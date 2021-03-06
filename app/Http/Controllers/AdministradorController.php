<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
    function __construct()
     {
         $this->middleware('can:ver-usuarios')->only('index');
         $this->middleware('can:crear-usuarios')->only('create');
         $this->middleware('can:editar-usuarios')->only('edit');
         $this->middleware('can:borrar-usuarios')->only('destroy');
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::paginate(5);

        return view('administradores.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();

        return view('administradores.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'email' => 'required|email|unique:users,email',
            'departamento' => 'required',
            'password' => 'required',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['departamento'] = $input['departamento'];
        $input['isAdmin'] = $input['isAdmin'];

        $input['password'] = Hash::make($input['password']);  
        
        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.index')->with('success','El usuario se creó satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('administradores.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'departamento' => 'required',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['departamento'] = $input['departamento'];

        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);

        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.index')->with('success','El usuario se actualizó satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('admin.index')->with('success','El usuario se eliminó satisfactoriamente');
    }
}

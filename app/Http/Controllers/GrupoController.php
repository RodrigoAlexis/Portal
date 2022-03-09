<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('products.groups.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GroupRequest $request)
    {
        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:groups',
            'file' => 'image'
        ];

        $Mensaje=[
            "name.required" => 'El campo Nombre no puede quedar vacío',
            "slug.required" => 'El campo Slug no puede quedar vacío',
            "slug.unique:groups" => 'Ya se cuenta con un registro con este nombre en la base de datos',
            "file.image" => 'Solo se permiten archivos .png | .jpeg | .jpg'
        ];
        $this->validate($request, $rules, $Mensaje);    

        $group = Group::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put( 'groups',$request->file('file'));

            $group->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('groups.index', $group)->with('success', 'El grupo se creo satisfactoriamente');
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
    public function edit(Group $group)
    {
        return view('products.groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GroupRequest $request, Group $group)
    {

        $group->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('groups', $request->file('file'));

            if($group->image){
                Storage::delete($group->image->url);

                $group->image->update([
                    'url' => $url
                ]);
            }else{
                $group->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('groups.index', $group)->with('success', 'El grupo se actualizó satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();

        if ($group->image) {
            
            Storage::delete($group->image->url);
        }

        return redirect()->route('groups.index')->with('success', 'El grupo se eliminó satisfactoriamente');
    }
}

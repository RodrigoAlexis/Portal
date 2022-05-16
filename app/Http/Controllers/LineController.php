<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\LineRequest;
use App\Models\Line;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class LineController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission: ver-linea|crear-linea|editar-linea|borrar-linea', ['only' => ['index']]);
    //     $this->middleware('permission: crear-linea', ['only' => ['create', 'store']]);
    //     $this->middleware('permission: editar-linea', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission: borrar-linea', ['only' => ['destroy']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.lineas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();

        return view('products.lineas.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LineRequest $request)
    {
        $line = Line::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('groups', $request->file('file'));

            $line->image()->create([
                'url' => $url
            ]);
        }

        if ($request->groups) {
            $line->groups()->attach($request->groups);
        }

        return redirect()->route('lines.index', $line)->with('success', 'La línea se creo satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Line $line)
    {
    }

    public function mostrarProductos(Group $group, Line $line, Product $product)
    {

        $lines = $group->lines()->latest('id')->get();

        $products = Product::where('group_id', '=', $group->id)
            ->where('line_id', '=', $line->id)
            ->latest('id')
            ->paginate(8);

        $prod = Product::where('id', '=', $product->id);

        return view('products.front.index', ['lines' => $lines, 'products' => $products, 'prod' => $prod]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Line $line)
    {
        //
        $groups = Group::all();

        return view('products.lineas.create', compact('line', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LineRequest $request, Line $line)
    {
        //
        $line->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('lines', $request->file('file'));

            if ($line->image) {
                Storage::delete($line->image->url);

                $line->image->update([
                    'url' => $url
                ]);
            } else {
                $line->image()->create([
                    'url' => $url
                ]);
            }
        }

        if ($request->groups) {
            $line->groups()->sync($request->groups);
        }

        return redirect()->route('lines.index', $line)->with('success', 'La línea se actualizó satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Line $line)
    {
        $line->delete();

        if ($line->image) {

            Storage::delete($line->image->url);
        }

        return redirect()->route('lines.index')->with('success', 'La línea se eliminó satisfactoriamente');
    }
}

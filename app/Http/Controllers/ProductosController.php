<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Line;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::pluck('name', 'id');
        $lines = Line::pluck('name', 'id');

        return view('products.create', compact('groups', 'lines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        // return $request->all();

        $product = Product::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'group_id' => $request->group_id,
            'line_id' => $request->line_id
        ]);


        if ($request->file('file')) {
            $url = Storage::put( 'products',$request->file('file'));

            $product->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('products.index', $product)->with('success', 'El producto se creo satisfactoriamente');

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
    public function edit(Product $product)
    {
        $groups = Group::pluck('name', 'id');
        $lines = Line::pluck('name', 'id');

        return view('products.edit', compact('product', 'groups', 'lines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('groups', $request->file('file'));

            if($product->image){
                Storage::delete($product->image->url);

                $product->image->update([
                    'url' => $url
                ]);
            }else{
                $product->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('products.index', $product)->with('success', 'El producto se actualizó satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        if ($product->image) {
            
            Storage::delete($product->image->url);
        }

        return redirect()->route('products.index')->with('success', 'El producto se eliminó satisfactoriamente');
    }
}

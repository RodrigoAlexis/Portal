<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;
use App\Models\Contacto;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoForm;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('contacto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request)
    {
        $message = [
            'name' => $request->name,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'asunto' => $request->asunto,
            'texto' => $request->texto
        ];

        Contacto::create([
            'nombre' => $request->name,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'asunto' => $request->asunto,
            'mensaje' => $request->texto
        ]);

        Mail::to('roalexlop13@outlook.com')->send(new ContactoForm($message));

        return redirect()->route('contacto.index')->with('success', 'Mensaje envíado satisfactoriamente');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

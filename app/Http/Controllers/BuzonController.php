<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DenunciaRequest;
use App\Models\Buzon;
use Illuminate\Support\Facades\Auth;
use App\Models\FileDenuncia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\Denuncia;

class BuzonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('buzon.front.index');
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
    public function store(DenunciaRequest $request)
    {
        $files = $request->file('adjunto');

        $message = [
            'folio' => $request->folioCanal . $request->folioCategoria . $request->folioTipo . time(),
            'canal' => $request->canal,
            'categoria' => $request->categoria,
            'tipo' => $request->tipo,
            'name' => $request->name,
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'isClient' => $request->isClient,
            'razon_social' => $request->razon_social,
            'hechos' => $request->hechos,
            'adjunto' => $request->file('adjunto')
        ];

        if (!Auth::user()) {
            if ($request->canal == 'Seguimiento') {

                return redirect()->route('login')->with('success', 'Si desea que se le de seguimiento a su denuncia, por favor, inicie sesión.');
            } else {

                Buzon::create([
                    'folio' => $request->folioCanal . $request->folioCategoria . $request->folioTipo . time(),
                    'canal' => $request->canal,
                    'categoria' => $request->categoria,
                    'tipo' => $request->tipo,
                    'isClient' => $request->isClient,
                    'hechos' => $request->hechos,
                    'telefono' => $request->telefono,
                    'razon_social' => $request->razon_social,
                ]);

                if ($files) {
                    foreach ($files as $file) {
                        if (Storage::putFileAs('/denuncias/', $file, $file->getClientOriginalName())) {
                            FileDenuncia::create([
                                'file' => time() . '-' . $file->getClientOriginalName(),
                                'image_path' => 'denuncias/' . time() . '-' . $file->getClientOriginalName(),
                                'denuncia_id' =>  Buzon::latest('id')->pluck('id')->first()
                            ]);
                        }
                    }
                }
                Mail::to('practicante.sistemas@gpoalze.com')->send(new Denuncia($message));

                // if ($request->categoria == 'Normas de Conducta' || 'Discriminación / Acoso') {
                //     //Correo de Ruth Vega
                //     Mail::to('roalexlop13@outlook.com')->send(new Denuncia($message));

                //     //Correo de Gabriel Zurita
                //     Mail::to('practicante.sistemas@gpoalze.com')->send(new Denuncia($message));
                // }

                // if ($request->categoria == 'Condiciones Laborales') {
                //     //Correo de Ruth Vega
                //     Mail::to('roalexlop13@outlook.com')->send(new Denuncia($message));

                //     //Correo de Gibran Garduño
                //     Mail::to('practicante.sistemas@gpoalze.com')->send(new Denuncia($message));
                // }

                // if ($request->categoria == 'Prácticas Monopólicas' || 'Leyes Ambientales' || 'Sobornos' || 'Derechos de la Tierra' || 'Otros') {
                //     //Correo de Ruth Vega
                //     Mail::to('roalexlop13@outlook.com')->send(new Denuncia($message));
                // }
            }
        } else {
            if ($request->canal == 'Anónimo') {

                Buzon::create([
                    'folio' => $request->folioCanal . $request->folioCategoria . $request->folioTipo . time(),
                    'canal' => $request->canal,
                    'categoria' => $request->categoria,
                    'tipo' => $request->tipo,
                    'isClient' => $request->isClient,
                    'hechos' => $request->hechos,
                    'telefono' => $request->telefono,
                    'razon_social' => $request->razon_social,
                ]);

                if ($files) {
                    foreach ($files as $file) {
                        if (Storage::putFileAs('/denuncias/', $file, $file->getClientOriginalName())) {
                            FileDenuncia::create([
                                'file' => time() . '-' . $file->getClientOriginalName(),
                                'image_path' => 'denuncias/' . time() . '-' . $file->getClientOriginalName(),
                                'denuncia_id' =>  Buzon::latest('id')->pluck('id')->first()
                            ]);
                        }
                    }
                }

                if ($request->categoria == 'Normas de Conducta' || 'Discriminación / Acoso') {
                    //Correo de Ruth Vega
                    Mail::to('roalexlop13@outlook.com')->send(new Denuncia($message));

                    //Correo de Gabriel Zurita
                    Mail::to('practicante.sistemas@gpoalze.com')->send(new Denuncia($message));
                }

                if ($request->categoria == 'Condiciones Laborales') {
                    //Correo de Ruth Vega
                    Mail::to('roalexlop13@outlook.com')->send(new Denuncia($message));

                    //Correo de Gibran Garduño
                    Mail::to('practicante.sistemas@gpoalze.com')->send(new Denuncia($message));
                }

                if ($request->categoria == 'Prácticas Monopólicas' || 'Leyes Ambientales' || 'Sobornos' || 'Derechos de la Tierra' || 'Otros') {
                    //Correo de Ruth Vega
                    Mail::to('practicante.sistemas@gpoalze.com')->send(new Denuncia($message));
                }
                
            } else {

                Buzon::create([
                    'folio' => $request->folioCanal . $request->folioCategoria . $request->folioTipo . time(),
                    'canal' => $request->canal,
                    'categoria' => $request->categoria,
                    'tipo' => $request->tipo,
                    'isClient' => $request->isClient,
                    'hechos' => $request->hechos,
                    'telefono' => $request->telefono,
                    'razon_social' => $request->razon_social,
                    'user_id' => Auth::user()->id
                ]);

                if ($files) {
                    foreach ($files as $file) {
                        if (Storage::putFileAs('/denuncias/', $file, $file->getClientOriginalName())) {
                            FileDenuncia::create([
                                'file' => time() . '-' . $file->getClientOriginalName(),
                                'image_path' => 'denuncias/' . time() . '-' . $file->getClientOriginalName(),
                                'denuncia_id' =>  Buzon::latest('id')->pluck('id')->first()
                            ]);
                        }
                    }
                }

                if ($request->categoria == 'Normas de Conducta' || 'Discriminación / Acoso') {
                    //Correo de Ruth Vega
                    Mail::to('roalexlop13@outlook.com')->send(new Denuncia($message));

                    //Correo de Gabriel Zurita
                    Mail::to('practicante.sistemas@gpoalze.com')->send(new Denuncia($message));
                }

                if ($request->categoria == 'Condiciones Laborales') {
                    //Correo de Ruth Vega
                    Mail::to('roalexlop13@outlook.com')->send(new Denuncia($message));

                    //Correo de Gibran Garduño
                    Mail::to('roalexis1234567890@gmail.com')->send(new Denuncia($message));
                }

                if ($request->categoria == 'Prácticas Monopólicas' || 'Leyes Ambientales' || 'Sobornos' || 'Derechos de la Tierra' || 'Otros') {
                    //Correo de Ruth Vega
                    Mail::to('roalexlop13@outlook.com')->send(new Denuncia($message));
                }

                return redirect()->route('buzon.index')->with('success', 'Denuncia enviada con éxito. ¡Gracias por ayudarnos a mejorar! Puede consultar el folio y la información de su denuncia en el panel.');
            }
        }

        // dd($request);

        return redirect()->route('buzon.index')->with('success', 'Denuncia enviada con éxito. ¡Gracias por ayudarnos a mejorar!');
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

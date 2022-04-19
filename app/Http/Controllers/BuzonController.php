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

        if(!Auth::user()){
            if($request->canal == 'Seguimiento'){

                return redirect()->route('login')->with('success', 'Si desea que se le de seguimiento a su denuncia, por favor, inicie sesión.');

            }else{
                
                Buzon::create($request->all());

                if($files){
                    foreach($files as $file ){
                        if(Storage::putFileAs('/denuncias/', $file, $file->getClientOriginalName())){
                            FileDenuncia::create([
                                'file' => time() . '-' . $file->getClientOriginalName(),
                                'image_path' => 'denuncias/' . time() . '-' . $file->getClientOriginalName(),
                                'denuncia_id' =>  Buzon::latest('id')->pluck('id')->first()
                            ]);
                        }                            
                        
                    }
                }

                $message = [
                    'canal' => $request->canal,
                    'categoria' => $request->categoria,
                    'tipo' => $request->tipo,
                    'isClient' => $request->isClient,
                    'hechos' => $request->hechos,
                    'adjunto' => $request->file('adjunto'),
                    'email' => 'roalexlop13@outlook.com'
                ];
        
                Mail::to($message['email'])->send(new Denuncia($message));
            }
        }else{
            if($request->canal == 'Anonimo'){

                Buzon::create($request->all());

                if($files){
                    foreach($files as $file ){
                        if(Storage::putFileAs('/denuncias/', $file, $file->getClientOriginalName())){
                            FileDenuncia::create([
                                'file' => time() . '-' . $file->getClientOriginalName(),
                                'image_path' => 'denuncias/' . time() . '-' . $file->getClientOriginalName(),
                                'denuncia_id' =>  Buzon::latest('id')->pluck('id')->first()
                            ]);
                        }                            
                        
                    }
                }
                
            }else{

                Buzon::create([
                    'canal' => $request->canal,
                    'categoria' => $request->categoria,
                    'tipo' => $request->tipo,
                    'isClient' => $request->isClient,
                    'hechos' => $request->hechos,
                    'user_id' => Auth::user()->id
                ]);

                if($files){
                    foreach($files as $file ){
                        if(Storage::putFileAs('/denuncias/', $file, $file->getClientOriginalName())){
                            FileDenuncia::create([
                                'file' => time() . '-' . $file->getClientOriginalName(),
                                'image_path' => 'denuncias/' . time() . '-' . $file->getClientOriginalName(),
                                'denuncia_id' =>  Buzon::latest('id')->pluck('id')->first()
                            ]);
                        }                            
                        
                    }
                }
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

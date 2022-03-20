<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\DB;

class GrupoFrontController extends Controller
{
    public function index(){
        $groups = Group::latest('id')->get();

        return view('products.groups.front.index', compact('groups'));
    }

    public function show(Group $grupo){


        $lines = $grupo->lines()->latest('id')->get();

        //$lines = DB::table('_group_line')->where('id_grupo', $grupo->id)->get();

        // dd( $lines);

        return view('products.lineas.front.index', ['lines' => $lines, 'grupo' => $grupo]);
    }
}

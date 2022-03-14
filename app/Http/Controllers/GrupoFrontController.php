<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GrupoFrontController extends Controller
{
    public function index(){
        $groups = Group::latest('id')->get();

        return view('products.groups.front.index', compact('groups'));
    }

    public function show(Group $grupo){
        $lines = $grupo->lines()->latest('id')->get();

        return view('products.lineas.front.index', compact('lines', 'grupo'));
    }
}

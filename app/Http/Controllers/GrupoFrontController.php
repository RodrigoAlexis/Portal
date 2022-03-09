<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GrupoFrontController extends Controller
{
    public function index(){
        $groups = Group::all();

        return view('products.groups.front.index', compact('groups'));
    }
}

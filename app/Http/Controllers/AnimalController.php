<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index($title, $id, $cat)
    {

        return view("$cat.index",[
            'title'=>$title,
            'id'=>$id,
            'cat'=> $cat
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
     //
    // MÉTODO ACTIONS
    public function index(){
        return view('admin.fornecedores.index');

    }
}

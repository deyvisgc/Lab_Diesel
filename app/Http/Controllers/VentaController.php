<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        return view('web.venta.venta');
    }
}

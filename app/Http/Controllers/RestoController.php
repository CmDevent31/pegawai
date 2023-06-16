<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestoController extends Controller
{
     public function kintan()
    {
        return view('resto.kintan');
    }
    public function gyu()
    {
        return view('resto.gyu');
    }
    public function hana()
    {
        return view('resto.hana');
    }
    public function mcd()
    {
        return view('resto.mcd');
    }
    public function udon()
    {
        return view('resto.udon');
    }
}

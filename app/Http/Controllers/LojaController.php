<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class LojaController extends Controller
    {
        public static function loja() {
            return view('site.loja');
        }
    }
    
?>
<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class SobreNosController extends Controller
    {
        public static function sobrenos() {
            return view('site.sobrenos');
        }
    }
    
?>
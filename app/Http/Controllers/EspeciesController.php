<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class EspeciesController extends Controller
    {
        public static function especies() {
            return view('site.especies');
        }
    }
    
?>
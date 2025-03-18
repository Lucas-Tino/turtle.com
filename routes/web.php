<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PrincipalController;
    use App\Http\Controllers\EspeciesController;
    use App\Http\Controllers\LojaController;
    use App\Http\Controllers\SobreNosController;
    use App\Http\Controllers\ContatoController;

    Route::get('/', function () {
        return view('bem vindo!');
    });

    Route::get('/', function(){ return PrincipalController::principal();})->name('site.index');
    Route::get('/especies', function(){ return EspeciesController::especies();})->name('site.especies');
    Route::get('/loja', function(){ return LojaController::loja();})->name('site.loja');
    Route::get('/sobrenos', function(){ return SobreNosController::sobrenos();})->name('site.sobrenos');
    Route::get('/contato', function(){ return ContatoController::contato();})->name('site.contato');

    // Route::get('/', 'PrincipalController@principal')->name('site.index');

?>
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/prodotti', function() {
    $array_pasta = config('pasta');
    // suddivido i vari formati in base al tipo
    /*
    $pasta_lunga = array_filter($array_pasta, function($elemento) {
        return $elemento['tipo'] == 'lunga';
    });
    $pasta_corta = array_filter($array_pasta, function($elemento) {
        return $elemento['tipo'] == 'corta';
    });
    $pasta_cortissima = array_filter($array_pasta, function($elemento) {
        return $elemento['tipo'] == 'cortissima';
    });
    */
    $collection_pasta = collect($array_pasta);
    $pasta_lunga = $collection_pasta->where('tipo', 'lunga');
    $pasta_corta = $collection_pasta->where('tipo', 'corta');
    $pasta_cortissima = $collection_pasta->where('tipo', 'cortissima');
    $data = [
        'formati' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];
    return view('prodotti', $data);
})->name('pagina-prodotti');

Route::get('/dettagli-prodotto/{id}', function($id) {
    $array_pasta = config('pasta');
    if(is_numeric($id) && $id > 0 && $id < count($array_pasta)) {
        $prodotto = $array_pasta[$id];
        $data = [
            'formato' => $prodotto
        ];
        return view('dettagli', $data);
    } else {
        abort('404');
    }
})->name('pagina-dettaglio');

Route::get('/news', function() {

    $data = [
        'nomi' => ['pippo', 'pluto', 'paperino']
    ];

    return view('news', $data);
})->name('pagina-news');

<?php
Route::get('/', function () {

    $prova = "Test";

    $test = "Ciao";

    $numeroIterazioni = 10;

    return view('welcome', compact("numeroIterazioni", "prova", "test"));
})
->name("welcome");
Route::get('/home20', function () {

    $prova = "Test";

    $test = "Ciao";

    $numeroIterazioni = 20;

    return view('welcome', compact("numeroIterazioni", "prova", "test"));
})
->name("home20");

Route::get('/listaPasta', function () {
    $pastaGenerica = config("pasta");
    $count= count($pastaGenerica);

    return view('listaPasta', compact("pastaGenerica", "count"));
})
->name("pasta");

// Route::get('/listaPastaLunga', function () {
//     $pastaGenerica = config("pasta");
//     $pastaLunga= [];
//     foreach ($pastaGenerica as $pasta){
//       $tipo = $pasta["tipo"];
//       if ($tipo == "lunga"){
//         $pastaLunga[]= $pasta;
//       }
//
//     }
//
//     return view('listaPastaLunga', compact("pastaLunga"));
// })
// ->name("pasta");

Route::get('/listaPastaLungaOldLayout', function () {
    $marcello = config("pasta");
    $pastaGenerica= [];
    foreach ($marcello as $pasta){
      $tipo = $pasta["tipo"];
      if ($tipo == "lunga"){
        $pastaGenerica[]= $pasta;
      }
    }

    $count= count($pastaGenerica);

    return view('listaPasta', compact("pastaGenerica", "count"));
})
->name("pastaLunga");

<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfiloController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

// Route è una Facade di laravel, è un alias statico che punta alla classe Illuminate\Routing\Router e fornisce un'interfaccia semplice per definire le rotte dell'applicazione

// i ::  usati per chiamare metodi statici di una classe in php

// get è un metodo statico della Facade Route che definisce una rotta che risponde alle richieste HTTP GET all'URL specificato come primo argomento ('/') e associa questa rotta a una funzione di callback (closure) fornita come secondo argomento.

// ('/') indica la radice del sito web, quindi questa rotta risponde alle richieste fatte all'URL principale del sito web, ad esempio http://tuosito.com/

// ROTTA CON CONTROLLER
// [HomeController::class, 'index'] - chiama il metodo index del controller HomeController
// Vantaggi: codice più organizzato, logica separata dalle rotte

// ->name('home') - NAMED ROUTE: assegna un nome alla rotta
// Utilità: 
// - Puoi riferirla nei template blade con route('home') invece di scrivere l'URL '/'
// - Se cambi l'URL della rotta, non devi modificare tutti i link nell'applicazione
// - Uso nei blade: <a href="{{ route('home') }}">Home</a>
// - Uso nel codice: return redirect()->route('home');

// PASSARE DATI ALLA VIEW - Due modi equivalenti:
// 1. Array associativo manuale (chiave => valore)
//    return view('homepage', ['info' => $info, 'titolo' => 'Home']);
// 2. Funzione compact() - PREFERIBILE: crea automaticamente un array associativo usando il nome della variabile come chiave
//    compact('info') diventa ['info' => $info]
//    Vantaggio: più conciso e meno ripetitivo quando hai molte variabili
// VIEW() - Funzione helper di Laravel che:
// - Cerca il file blade nella cartella resources/views/
// - 'homepage' cerca il file homepage.blade.php
// - Il secondo parametro passa i dati alla view come variabili disponibili nel template
// - Nella view blade potrai usare direttamente {{ $info }}

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get("/profilo", [ProfiloController::class, 'index'])->name('profilo');


Route::get("/carrello", [CartController::class, 'index'])->name('carrello');
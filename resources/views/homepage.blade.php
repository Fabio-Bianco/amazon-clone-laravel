@extends('layouts.app')

@section('title', 'Amazon.it - Spendi meno, ottieni di più')

@section('styles')
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet"> 
@endsection

@section('content')

<!-- Hero Banner -->
<div class="hero">
    <h1>Offerte Esclusive | Valide oggi</h1>
    <p>Risparmia fino al 50% su migliaia di prodotti</p>
</div>

<!-- Categories Grid -->
<div class="categories">
    <div class="category-card">
        <h3>Elettronica</h3>
        <img src="https://images.unsplash.com/photo-1498049794561-7780e7231661?w=400&h=300&fit=crop" alt="Elettronica"
            class="category-image">
        <a href="#">Vedi tutte le offerte</a>
    </div>
    <div class="category-card">
        <h3>Moda</h3>
        <img src="https://images.unsplash.com/photo-1445205170230-053b83016050?w=400&h=300&fit=crop" alt="Moda"
            class="category-image">
        <a href="#">Vedi tutte le offerte</a>
    </div>
    <div class="category-card">
        <h3>Casa e Cucina</h3>
        <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=400&h=300&fit=crop" alt="Casa"
            class="category-image">
        <a href="#">Vedi tutte le offerte</a>
    </div>
    <div class="category-card">
        <h3>Libri</h3>
        <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?w=400&h=300&fit=crop" alt="Libri"
            class="category-image">
        <a href="#">Vedi tutte le offerte</a>
    </div>
</div>

<!-- Products Section -->
<div class="products-section">
    <h2>I più venduti in Elettronica</h2>
    <div class="products-grid">
        
    @foreach ($prodotti as $prodotto )

    <x-product-card

        :nome="$prodotto['nome']"
        :prezzo="$prodotto['prezzo']"
        :rating="$prodotto['rating']"
        :immagine="$prodotto['immagine']"
        :recensioni="$prodotto['recensioni']"
    />

    @endforeach

    </div>
</div>

@endsection
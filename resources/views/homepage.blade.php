@extends('layouts.app')

@section('title', 'Amazon.it - Spendi meno, ottieni di più')

@section('styles')
<link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- Hero Banner -->
    <div class="hero">
        <h1>Scopri le migliori offerte di oggi</h1>
    </div>

    <!-- Categories Grid -->
    <div class="categories">
        <div class="category-card">
            <h3>Elettronica</h3>
            <img src="https://images.unsplash.com/photo-1498049794561-7780e7231661?w=400&h=300&fit=crop" alt="Elettronica" class="category-image">
            <a href="#">Scopri di più</a>
        </div>
        <div class="category-card">
            <h3>Moda</h3>
            <img src="https://images.unsplash.com/photo-1445205170230-053b83016050?w=400&h=300&fit=crop" alt="Moda" class="category-image">
            <a href="#">Scopri di più</a>
        </div>
        <div class="category-card">
            <h3>Casa e Cucina</h3>
            <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=400&h=300&fit=crop" alt="Casa" class="category-image">
            <a href="#">Scopri di più</a>
        </div>
        <div class="category-card">
            <h3>Libri</h3>
            <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?w=400&h=300&fit=crop" alt="Libri" class="category-image">
            <a href="#">Scopri di più</a>
        </div>
    </div>

    <!-- Products Section -->
    <div class="products-section">
        <h2>I più venduti in Elettronica</h2>
        <div class="products-grid">
            @php
                $prodotti = [
                    ['nome' => 'Smartphone XYZ', 'prezzo' => '299,99', 'rating' => '⭐⭐⭐⭐⭐'],
                    ['nome' => 'Cuffie Wireless', 'prezzo' => '79,99', 'rating' => '⭐⭐⭐⭐'],
                    ['nome' => 'Tablet Pro', 'prezzo' => '449,99', 'rating' => '⭐⭐⭐⭐⭐'],
                    ['nome' => 'Smartwatch', 'prezzo' => '199,99', 'rating' => '⭐⭐⭐⭐'],
                    ['nome' => 'Speaker Bluetooth', 'prezzo' => '49,99', 'rating' => '⭐⭐⭐⭐⭐'],
                    ['nome' => 'Caricabatterie Rapido', 'prezzo' => '24,99', 'rating' => '⭐⭐⭐⭐'],
                ];
            @endphp

            @foreach ($prodotti as $index => $prodotto)
                <div class="product-card">
                    <img src="https://images.unsplash.com/photo-{{ ['1511707001448-d2b9ecf96e5c', '1505740420928-5e560c06d30e', '1517336714731-489689fd1ca8', '1546868871-7041f2a55e12', '1484704849700-f032a568e944', '1589492477829-5e65395b66cc'][$index] }}?w=300&h=300&fit=crop" alt="{{ $prodotto['nome'] }}" class="product-image">
                    <h4>{{ $prodotto['nome'] }}</h4>
                    <div class="rating">{{ $prodotto['rating'] }}</div>
                    <div class="product-price">€{{ $prodotto['prezzo'] }}</div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
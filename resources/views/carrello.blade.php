@extends('layouts.app')

@section('title', 'Carrello - Amazon.it')

@section('styles')
<link href="{{ asset('css/carrello.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container">
        <h1>Carrello</h1>

        <div class="cart-layout">
            <div class="cart-items">
                <!-- Prodotto 1 -->
                <div class="cart-item">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=300&fit=crop" alt="Prodotto" class="item-image">
                    <div class="item-details">
                        <h3>Nome del Prodotto</h3>
                        <p>Disponibile</p>
                        <p class="price">€29,99</p>
                        <div class="item-actions">
                            <select>
                                <option>Qtà: 1</option>
                                <option>Qtà: 2</option>
                                <option>Qtà: 3</option>
                            </select>
                            <button>Elimina</button>
                            <button>Salva per dopo</button>
                        </div>
                    </div>
                    <div class="item-price">
                        <strong>€29,99</strong>
                    </div>
                </div>

                <!-- Prodotto 2 -->
                <div class="cart-item">
                    <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=300&h=300&fit=crop" alt="Prodotto" class="item-image">
                    <div class="item-details">
                        <h3>Altro Prodotto</h3>
                        <p>Disponibile</p>
                        <p class="price">€49,99</p>
                        <div class="item-actions">
                            <select>
                                <option>Qtà: 1</option>
                                <option>Qtà: 2</option>
                                <option>Qtà: 3</option>
                            </select>
                            <button>Elimina</button>
                            <button>Salva per dopo</button>
                        </div>
                    </div>
                    <div class="item-price">
                        <strong>€49,99</strong>
                    </div>
                </div>
            </div>

            <!-- Riepilogo -->
            <div class="summary">
                <h2>Riepilogo</h2>
                <div class="summary-row">
                    <span>Subtotale (2 articoli):</span>
                    <span>€79,98</span>
                </div>
                <div class="summary-row">
                    <span>Spedizione:</span>
                    <span>Gratuita</span>
                </div>
                <div class="summary-row summary-total">
                    <span>Totale ordine:</span>
                    <span>€79,98</span>
                </div>
                <button class="checkout-btn">Procedi all'acquisto</button>
            </div>
        </div>
    </div>
@endsection
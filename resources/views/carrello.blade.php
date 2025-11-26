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
                    <div class="cart-item-top">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=300&fit=crop" alt="Prodotto" class="item-image">
                        <div class="item-details">
                            <h3>Cuffie Bluetooth Wireless con Cancellazione del Rumore</h3>
                            <p class="item-stock">Disponibile</p>
                            <p class="item-eligible">✓ Idoneo per spedizione Prime</p>
                            <p class="price">€29,99</p>
                        </div>
                    </div>
                    <div class="cart-item-bottom">
                        <div class="item-actions">
                            <div class="quantity-selector">
                                <select>
                                    <option>Qtà: 1</option>
                                    <option>Qtà: 2</option>
                                    <option>Qtà: 3</option>
                                    <option>Qtà: 4</option>
                                    <option>Qtà: 5</option>
                                </select>
                            </div>
                            <button>Elimina</button>
                            <button>Lista desideri</button>
                        </div>
                        <div class="item-price">
                            <span class="item-price-label">Prezzo:</span>
                            <strong>€29,99</strong>
                        </div>
                    </div>
                </div>

                <!-- Prodotto 2 -->
                <div class="cart-item">
                    <div class="cart-item-top">
                        <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=300&h=300&fit=crop" alt="Prodotto" class="item-image">
                        <div class="item-details">
                            <h3>Smartwatch Fitness Tracker con Cardiofrequenzimetro</h3>
                            <p class="item-stock">Disponibile</p>
                            <p class="item-eligible">✓ Idoneo per spedizione Prime</p>
                            <p class="price">€49,99</p>
                        </div>
                    </div>
                    <div class="cart-item-bottom">
                        <div class="item-actions">
                            <div class="quantity-selector">
                                <select>
                                    <option>Qtà: 1</option>
                                    <option>Qtà: 2</option>
                                    <option>Qtà: 3</option>
                                    <option>Qtà: 4</option>
                                    <option>Qtà: 5</option>
                                </select>
                            </div>
                            <button>Elimina</button>
                            <button>Lista desideri</button>
                        </div>
                        <div class="item-price">
                            <span class="item-price-label">Prezzo:</span>
                            <strong>€49,99</strong>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Riepilogo -->
            <div class="summary">
                <h2>Riepilogo</h2>
                <div class="summary-subtotal">
                    <span>Subtotale (2 articoli): </span>
                    <span class="amount">€79,98</span>
                </div>
                <div class="summary-row">
                    <span class="label">Subtotale (2 articoli):</span>
                    <span>€79,98</span>
                </div>
                <div class="summary-row">
                    <span class="label">Spedizione:</span>
                    <span>Gratuita</span>
                </div>
                <div class="summary-total">
                    <span>Totale ordine:</span>
                    <span class="amount">79,98</span>
                </div>
                <button class="checkout-btn">Procedi all'acquisto (2 articoli)</button>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Il tuo Account - Amazon.it')

@section('styles')
<link href="{{ asset('css/profilo.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container">
        <h1>Il tuo Account</h1>

        <div class="profile-layout">
            <!-- Sidebar -->
            <div class="sidebar">
                <h2>Account</h2>
                <ul>
                    <li><a href="#">I tuoi ordini</a></li>
                    <li><a href="#">Impostazioni di accesso</a></li>
                    <li><a href="#">Indirizzi</a></li>
                    <li><a href="#">Pagamenti</a></li>
                    <li><a href="#">Amazon Prime</a></li>
                    <li><a href="#">Le tue liste</a></li>
                    <li><a href="#">Messaggi</a></li>
                    <li><a href="#">Servizio Clienti</a></li>
                </ul>
            </div>

            <!-- Main Content -->
            <div>
                <!-- User Info -->
                <div class="user-info">
                    <h2>Informazioni Personali</h2>
                    <div class="info-row">
                        <span class="info-label">Nome:</span>
                        <span class="info-value">Mario Rossi</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Email:</span>
                        <span class="info-value">mario.rossi@email.com</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Telefono:</span>
                        <span class="info-value">+39 123 456 7890</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Membro dal:</span>
                        <span class="info-value">Gennaio 2020</span>
                    </div>
                    <div style="margin-top: 20px;">
                        <button class="edit-btn">Modifica profilo</button>
                    </div>
                </div>

                <!-- Profile Cards -->
                <div class="profile-cards">
                    <div class="profile-card">
                        <div class="icon">📦</div>
                        <h3>I tuoi ordini</h3>
                        <p>Monitora, restituisci o acquista nuovamente articoli</p>
                        <a href="#">Visualizza tutti gli ordini →</a>
                    </div>

                    <div class="profile-card">
                        <div class="icon">🔒</div>
                        <h3>Accesso e sicurezza</h3>
                        <p>Modifica nome, email, password e numero di telefono</p>
                        <a href="#">Gestisci →</a>
                    </div>

                    <div class="profile-card">
                        <div class="icon">📍</div>
                        <h3>I tuoi indirizzi</h3>
                        <p>Modifica indirizzi per ordini e regali</p>
                        <a href="#">Gestisci →</a>
                    </div>

                    <div class="profile-card">
                        <div class="icon">💳</div>
                        <h3>Metodi di pagamento</h3>
                        <p>Gestisci le tue carte e conti bancari</p>
                        <a href="#">Gestisci →</a>
                    </div>

                    <div class="profile-card">
                        <div class="icon">⭐</div>
                        <h3>Amazon Prime</h3>
                        <p>Visualizza vantaggi e impostazioni di pagamento</p>
                        <a href="#">Gestisci →</a>
                    </div>

                    <div class="profile-card">
                        <div class="icon">📋</div>
                        <h3>Le tue liste</h3>
                        <p>Visualizza, modifica e condividi le tue liste</p>
                        <a href="#">Gestisci →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
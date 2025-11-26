<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Amazon.it')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header-top">
            <a href="{{ route('home') }}" class="logo">amazon.it</a>
            
            <div class="location">
                <span class="location-icon">📍</span>
                <div class="location-text">
                    <span class="deliver-to">Consegna a</span>
                    <span class="location-name">Italia</span>
                </div>
            </div>

            <div class="search-bar">
                <select class="search-category">
                    <option>Tutte le categorie</option>
                    <option>Elettronica</option>
                    <option>Libri</option>
                    <option>Moda</option>
                    <option>Casa</option>
                </select>
                <input type="text" placeholder="Cerca Amazon.it">
                <button class="search-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                </button>
            </div>

            <div class="header-links">
                <a href="#" class="header-link">
                    <span class="flag">🇮🇹</span>
                    <span>IT</span>
                </a>
                
                <a href="{{ route('profilo') }}" class="header-link account-link">
                    <span class="greeting">Ciao, Accedi</span>
                    <span class="account">Account e liste</span>
                </a>
                
                <a href="#" class="header-link">
                    <span class="greeting">Resi</span>
                    <span class="account">e Ordini</span>
                </a>
                
                <a href="{{ route('carrello') }}" class="cart-link">
                    <div class="cart-icon">
                        🛒
                        <span class="cart-count">2</span>
                    </div>
                    <span class="cart-text">Carrello</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="main-nav">
        <div class="nav-content">
            <ul class="nav-left">
                <li><a href="#" class="nav-link nav-all">☰ Tutte le categorie</a></li>
                <li><a href="#" class="nav-link">Offerte del giorno</a></li>
                <li><a href="#" class="nav-link">Servizio Clienti</a></li>
                <li><a href="#" class="nav-link">Lista dei desideri</a></li>
                <li><a href="#" class="nav-link">Buoni Regalo</a></li>
                <li><a href="#" class="nav-link">Vendere</a></li>
            </ul>
            <div class="nav-right">
                <a href="#" class="nav-deals">Le offerte di oggi</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-back-to-top">
            <a href="#" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;">
                Torna su
            </a>
        </div>

        <div class="footer-content">
            <div class="footer-columns">
                <div class="footer-column">
                    <h3>Conoscici</h3>
                    <ul>
                        <li><a href="#">Informazioni su Amazon</a></li>
                        <li><a href="#">Carriere</a></li>
                        <li><a href="#">Relazioni con gli investitori</a></li>
                        <li><a href="#">Amazon Devices</a></li>
                        <li><a href="#">Amazon Science</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Guadagna con Amazon</h3>
                    <ul>
                        <li><a href="#">Vendi su Amazon</a></li>
                        <li><a href="#">Vendi con Amazon Business</a></li>
                        <li><a href="#">Programma di affiliazione</a></li>
                        <li><a href="#">Pubblicizza i tuoi prodotti</a></li>
                        <li><a href="#">Pubblica con noi</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Metodi di pagamento Amazon</h3>
                    <ul>
                        <li><a href="#">Carta di credito/debito</a></li>
                        <li><a href="#">Buoni Regalo Amazon</a></li>
                        <li><a href="#">Ricarica Amazon</a></li>
                        <li><a href="#">Soluzioni di pagamento</a></li>
                        <li><a href="#">Shopbop</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Bisogno di aiuto?</h3>
                    <ul>
                        <li><a href="#">Amazon e COVID-19</a></li>
                        <li><a href="#">Spedizione e disponibilità</a></li>
                        <li><a href="#">Resi e sostituzioni</a></li>
                        <li><a href="#">Gestisci i contenuti</a></li>
                        <li><a href="#">Servizio Clienti</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-logo">
                <a href="{{ route('home') }}">amazon.it</a>
            </div>
            <div class="footer-links">
                <a href="#">Condizioni d'uso</a>
                <a href="#">Informativa sulla privacy</a>
                <a href="#">Preferenze relative ai cookie</a>
                <a href="#">Annunci basati sugli interessi</a>
            </div>
            <div class="footer-copyright">
                © 2025, Amazon.it, Inc. o società affiliate
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>

</html>

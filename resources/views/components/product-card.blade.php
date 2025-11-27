<div class="product-card">
    <img src="{{ $immagine }}" alt="{{ $nome }}" class="product-image" loading="lazy">
    <h4>{{ $nome }}</h4>
    <div class="rating">
        <span class="stars">{{ $rating }}</span>
        <a href="#" class="rating-count">({{ $recensioni }})</a>
    </div>
    <div class="product-price">{{ $prezzo }}</div>
    <p class="product-prime">✓ Consegna GRATUITA domani</p>
</div>
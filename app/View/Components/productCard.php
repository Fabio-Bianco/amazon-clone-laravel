<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class productCard extends Component
{
    public $nome;
    public $prezzo;
    public $rating;
    public $immagine;
    public $recensioni;

    /**
     * Create a new component instance.
     */
    public function __construct($nome = '', $prezzo = '', $rating = '', $immagine = '', $recensioni = 0)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->rating = $rating;
        $this->immagine = $immagine;
        $this->recensioni = $recensioni;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card'); //punto = dot notation
    }
}

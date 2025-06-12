<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Teste extends Component
{
    public $nome;
    public $senha;

    public function __construct($nome,$senha)
    {
        $this->$nome = $nome;
        $this->$senha = $senha;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.teste ');
    }
}

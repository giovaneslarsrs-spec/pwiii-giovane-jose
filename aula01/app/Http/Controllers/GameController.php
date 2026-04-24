<?php

namespace App\Http\Controllers;

class GameController extends Controller
{
    public function search($nome)
    {
        return "Procurando pelo jogo: " . $nome . "...";
    }
}
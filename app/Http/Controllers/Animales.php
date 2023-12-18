<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Animales extends Controller
{
    public function getAnimales(){
        $animales = ['Fernando','Leon','Elefante','Jirafa','Mufasa'];
        return response()->json(['mensaje' => 'Estos son animales','datos' => $animales]);

    }
}

?>
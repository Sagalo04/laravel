<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HeroesController extends Controller
{
    public function getHeroes($page){
        $apiKey = \Config::get('values.apiKey');
        $hash = \Config::get('values.hash');
        $baseUrl =\Config::get('values.baseUrl');
        
        $offset = $page * 9;

        $heroes = HTTP::get("$baseUrl?ts=1000&limit=9&offset=$offset&apikey=$apiKey&hash=$hash");
        $heroesArray = $heroes->json();
        return response() -> json($heroesArray,200);
    }

    public function getSingleHeroe($id){
        $apiKey = \Config::get('values.apiKey');
        $hash = \Config::get('values.hash');
        $baseUrl =\Config::get('values.baseUrl');
        $heroe = HTTP::get("$baseUrl/$id?ts=1000&apikey=$apiKey&hash=$hash");
        $heroeArray = $heroe->json();
        return response() -> json($heroeArray,200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class FilmController extends Controller
{
    
    public function home(Request $req){
        $client = new Client([
            'base_uri' => 'https://api.themoviedb.org/3/movie/top_rated?api_key=$apikey&language=en-US&page=1',
            'headers' => [
                'Content-type' => 'application/json'
            ]
        ]);
        $apikey = '8f32d16119ed785e6a2fd77f23e68666';
        $response = $client->get('https://api.themoviedb.org/3/movie/top_rated?api_key=$apikey&language=en-US&page=1');
        $films = json_decode($response->getBody()->getContents(),true)['results'];
        return view('welcome', compact('films'));
    }


}

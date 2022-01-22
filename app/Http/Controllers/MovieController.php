<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {

        $movies = [
            [
                'title' => 'Il Padrino',
                'original-title' => 'The Godfather',
                'date' => 'american',
                'nationality' => '1972-03-24',
                'vote' => '9.2',
            ],
            [
                'title' => 'Via Col Vento',
                'original-title' => 'Gone With The Wind',
                'date' => '1939-12-15',
                'nationality' => 'american',
                'vote' => '8.6',
            ],
            [
                'title' => 'Psycho',
                'original-title' => 'Psycho',
                'date' => '1960-06-16',
                'nationality' => 'american',
                'vote' => '9.4',
            ],
            [
                'title' => 'Gravity',
                'original-title' => 'Gravity',
                'date' => '2013-08-28',
                'nationality' => 'american/british',
                'vote' => '7.8',
            ],
            [
                'title' => 'Toy Story - Il Mondo Dei Giocattoli',
                'original-title' => 'Toy Story',
                'date' => '1995-11-19',
                'nationality' => 'american/british',
                'vote' =>'9.0',
            ],
            [
                'title' => 'Pulp Fiction',
                'original-title' => 'Pulp Fiction',
                'date' => '1994-10-14',
                'nationality' => 'american',
                'vote' => '9.2',
            ],
            [
                'title' => 'Forrest Gump',
                'original-title' => 'Forrest Gump',
                'date' => '1994-06-23',
                'nationality' => 'american/british',
                'vote' => '8.8',
            ],
            [
                'title' => 'Guerre Stellari',
                'original-title' => 'Star Wars',
                'date' => '1977-05-25',
                'nationality' => 'american',
                'vote' => '8.6',
            ],
            [
                'title' => "E.T. - L'extra-terrestre",
                'original-title' => 'E.T. The Extra-Terrestrial',
                'date' => '1982-05-26',
                'nationality' => 'american',
                'vote' => '7.9',
            ],
            [
                'title' => 'Il silenzio degli innocenti',
                'original-title' => 'The Silence of the Lambs',
                'date' => '1991-01-30',
                'nationality' => 'american',
                'vote' => '8.6',
            ],
            
        ];
        

        return view('movies');
    }
}

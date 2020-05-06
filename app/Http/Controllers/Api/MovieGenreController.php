<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class MovieGenreController extends Controller {

    public function GetGenres() {
        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkZTI5OTk4MDFhMjQ5YzI4NDczNzJiNmQ3MTg0NzAxOCIsInN1YiI6IjVlYTNjNGU4ZGI3MmMwMDAyNmJjMGUzYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.I64uRdEO5wgbr8kch3WUWxUCpSoezJxuhJVfS6lh1RA';
        $genres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=de2999801a249c2847372b6d71847018&language=en-US');
  
        $result = $genres->json();
        return response()->json($result['genres']);
    }

}

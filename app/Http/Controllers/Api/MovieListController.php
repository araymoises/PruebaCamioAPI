<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class MovieListController extends Controller {

    public function GetMovies() {
        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkZTI5OTk4MDFhMjQ5YzI4NDczNzJiNmQ3MTg0NzAxOCIsInN1YiI6IjVlYTNjNGU4ZGI3MmMwMDAyNmJjMGUzYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.I64uRdEO5wgbr8kch3WUWxUCpSoezJxuhJVfS6lh1RA';
        $movies = Http::withHeaders([
            'authorization' => 'Bearer ' . $token,
            'content-type' => 'application/json;charset=utf-8'
        ])->get('https://api.themoviedb.org/4/list/3');
  
        $result = $movies->json();
        return response()->json($result['results']);
    }
    
}

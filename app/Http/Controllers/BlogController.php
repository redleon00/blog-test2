<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentRepository;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    //
    public function index(){
        echo "PAso po aqiui";
        return view('app');
    }

   
}

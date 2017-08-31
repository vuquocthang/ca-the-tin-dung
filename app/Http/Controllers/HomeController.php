<?php
/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 7/31/2017
 * Time: 1:34 PM
 */

namespace App\Http\Controllers;



use App\Post;

class HomeController extends Controller
{

    public function index(){


        $posts = Post::all();

        return view('site.home' , ['posts' => $posts]);

    }

    public function post(){
        return view('site.post');
    }
}
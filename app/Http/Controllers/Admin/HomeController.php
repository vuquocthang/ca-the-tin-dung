<?php
/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 8/12/2017
 * Time: 12:15 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Seo;
use Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index(){
        $seo = Seo::findOrFail(1);

        return view('admin.home' , ['seo' => $seo]);
    }

    public function seo(){
        $input = Request::all();

        $seo = Seo::findOrFail(1);

        $seo->update($input);

        return redirect('admin/home');

    }

}
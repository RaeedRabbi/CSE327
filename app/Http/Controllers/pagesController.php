<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
   
    public function about()
    {
        return view('porto ecommerce.portotheme.html.porto_ecommerce.demo-9.about');
    }
    public function contact()
    {
        return view('porto ecommerce.portotheme.html.porto_ecommerce.demo-9.contact');
    }
    public function blog()
    {
        return view('porto ecommerce.portotheme.html.porto_ecommerce.demo-9.blog');
    }
}

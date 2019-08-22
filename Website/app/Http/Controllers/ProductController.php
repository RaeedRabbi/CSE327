<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProductController extends Controller
{
    public function index(){
        echo Auth::user()->id_user_role;
    }
}

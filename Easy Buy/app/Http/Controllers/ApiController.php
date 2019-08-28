<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function userinfobyID ($id)
    {
        return User::find($id);
    }

}

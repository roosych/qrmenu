<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        return view('user.promo.index');
    }

    public function share()
    {
        return view('user.promo.share');
    }
}

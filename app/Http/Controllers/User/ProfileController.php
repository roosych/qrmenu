<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfoRequest;
use App\Models\Category;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function info()
    {
        $profile = Profile::find(auth()->id());

        return view('user.profile.info', compact('profile'));
    }

    public function infoUpdate(Request $request)
    {

    }

    public function schedule()
    {
        return view('user.profile.schedule');
    }

    public function social()
    {
        return view('user.profile.social');
    }
}

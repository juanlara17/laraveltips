<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
//        $users = User::find([1,3,5],['name','email']);
//        dd($user);
        $users = User::get();

        return view('dashboard', compact('users'));
    }

    public function users()
    {
        $users = User::get();

        return view('user.index', compact('users'));

    }
}

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
//        dd($users);

        return view('dashboard', compact('users'));
    }

    public function users()
    {
//        $users = User::paginate(5);
//        dd($users->toArray());
//        $users = User::whereDate('created_at', '>=', now()->subMonth(6))->get();
//        $users = User::whereBetween('created_at', [now()->subDays(90) , today()])->get();
//        $users = User::whereMonth('created_at', now()->month(8))->get();
//        $users = User::whereYear('created_at', now()->year(2021))->get();
//        return view('user.index', compact('users'));

        return view('user.index')
            ->withUsers(User::paginate(10));
    }
}

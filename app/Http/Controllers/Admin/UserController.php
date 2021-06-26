<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where($request->except(['page']))->paginate(20);
        $users->appends($request->except('page'));
        return view('admin.user.index', compact('users'));
    }

    public function profile()
    {
        return view('admin.user.profile',
            [
                'user' => Auth::user()
            ]
        );
    }
}

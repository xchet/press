<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepository;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    /**
     * AdminController constructor.
     * @param UserRepository $userRepository
     * @internal param MapRepository $mapRepository
     */
    public function __construct(
        UserRepository $userRepository
    )
    {
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        $users = User::where($request->except(['page']))->paginate(20);
        $users->appends($request->except('page'));
        return view('admin.users', compact('users'));
    }

    public function profile()
    {
        return view('admin.user.profile');
    }
}

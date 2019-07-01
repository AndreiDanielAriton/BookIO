<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        $userBookshelves = $user->bookshelves;

        return view('home',[
            'user' => $user,
            'userId' => $user_id,
            'userBookshelves' => $userBookshelves,
        ]);
    }
}

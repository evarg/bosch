<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $role = 'moderator';
        $avatar = 'assets/img/avatars/1.png';

        $data = [
            // 'user_profile' => [
            //     'id' => '1',
            //     'name' => $user->nick,
            //     'role' => $role,
            //     'avatar' => $avatar,
            // ],
            // 'user_profile_badges' => [
            //     'id' => '0',
            //     'profile' => '1',
            //     'settings' => '2',
            //     'role' => '0',
            //     'billing' => '3',
            // ],
            // 'settings' => [
            //     'theme' => 'dark',
            //     'notifications' => true,
            // ],
        ];

        return view('dashboard', compact('data'));
    }
}

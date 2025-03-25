<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();

        return view('profile_edit', compact('user'));
    }

    public function update(UpdateProfileRequest $request, User $user)
    {
        $userAuth = Auth::user();

        $data = $request->validated();
        $user->update($data);

        return redirect()->route('profile.edit', $user->id)->with('success', 'Dane zaktualizowane!');

        //return view('profile_edit', compact('user'));
    }


}

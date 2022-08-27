<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|string',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => ['required', 'min:6', new MatchOldPassword()],
        ]);

        try {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            return redirect()->back()->with('success', __('profile.User has been edited successfully'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', __('general.Something went wrong please try again'));
        }
    }

    public function updatePass(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'old_password' => ['required', 'min:6', new MatchOldPassword()],
            'new_password' => ['required', 'min:6'],
            'confirm_new_password' => 'required_with:new_password|same:new_password'
        ]);

        try {
            $user->update(['password' => bcrypt($request->new_password)]);
            return redirect()->back()->with('success', __('profile.User password has been edited successfully'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', __('general.Something went wrong please try again'));
        }
    }
}

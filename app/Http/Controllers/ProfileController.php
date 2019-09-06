<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('registration.profile', ['user'	=>	$user]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'	=>	'required',
            'email' =>  [
                'required',
                'email',
                Rule::unique('users')->ignore(Auth::user()->id),
            ],
            'avatar'	=>	'nullable|image'
        ]);

        $user = Auth::user();
        $user->edit($request->all());
        $user->generatePassword($request->get('password'));

        return redirect()->back()->with('status', 'Профиль успешно обновлен');
    }
}

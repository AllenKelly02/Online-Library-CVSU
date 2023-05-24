<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Profile;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\UnverifiedAccount;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        //RedirectResponse
        $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'last_name' => ['required'],
            'first_name' => ['required'],
            'student_id' => ['required'],
            'gender' => ['required'],
            'street' => ['required'],
            'village' => ['required'],
            'municipality' => ['required'],
            'province' => ['required'],
            'zip_code' => ['required'],
        ]);


        $unverifiedAccount = [
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'student_id' => $request->student_id,
            'gender' => $request->gender,
            'street' => $request->street,
            'village' => $request->village,
            'municipality' => $request->municipality,
            'province' => $request->province,
            'zip_code' => $request->zip_code,
            'email' => $request->email,
            'password' => $request->password,
        ];

        $savedUnverifiedAccount = UnverifiedAccount::create($unverifiedAccount);

        return redirect(RouteServiceProvider::HOME);
    }
}



<?php

namespace Piwko\Forum\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return Auth::user()->id;
            return redirect()->intended('dashboard');
        }else
        {
        	return 'Dane nie są poprawne.';
        }
    }
    
    public function index()
    {
    	return view('view::login');
    }
}
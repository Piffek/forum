<?php

namespace Piwko\Forum\Controller;

use Piwko\Forum\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
    	Validator::make($request->all(), [
    			'email' => 'required|email|max:255',
    			'password' => 'required|min:6',
    	]);
    	
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('dashboard');
        }else
        {
        	return 'Dane nie są poprawne.';
        }
    }
    
    public function register(Request $request)
    {
    	Validator::make($request->all(), [
    			'name' => 'required|max:255',
    			'email' => 'required|email|max:255|unique:users',
    			'password' => 'required|min:6',
    	]);
    	
    	User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
    	]);
    	
    }
    
    public function showRegisterForm()
    {
    	return view('view::auth.register');
    }
    
    public function index()
    {
    	return view('view::auth.login');
    }
}
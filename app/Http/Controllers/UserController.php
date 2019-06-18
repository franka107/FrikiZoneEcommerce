<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function edit(){
    	return view('auth.edit');
    }

    public function update(Request $request){
    	$request->validate([
    		'name' => ['required', 'string', 'max:255'],
    		'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
		]);
		$id = Auth::user()->id; 
		$user = User::find($id);

		if ($request->file('image')) {
			$img = $request->file('image');
			$imageName = time().$img->getClientOriginalName();
			$user->image = $imageName;
			$request->image->move(public_path('images'), $imageName);
		} 
				    	   	
    	$user->name = $request->get('name');
    	$user->lastname = $request->get('lastname');
		$user->email = $request->get('email');
		
    	$user->save();

    	return redirect()->action('UserController@edit');
    }

    public function editPwd(){
    	return view('auth.editpass');
    }

    public function updatePwd(Request $request){
    	$request->validate([
    		'password' => ['required', 'string', 'min:8'],
    	]);

    	$id = Auth::user()->id;
    	$user = User::find($id);
    	$user->password = bcrypt($request->get('password'));
    	$user->save();

    	return redirect()->action('UserController@edit');
    }
}



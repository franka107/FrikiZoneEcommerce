<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name')->paginate(5);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'lastname' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'user' => 'required|unique:users|min:4|max:20',
            'password' => 'required|min:6',
            'type'   => 'required',
            'address' => 'required|max:255'
            
        ]);

        $user = new User();
        $user->name          = $request->get('name');
        $user->lastname     = $request->get('lastname');
        $user->email         = $request->get('email');
        $user->user          = $request->get('user');
        $user->password      = bcrypt($request->get('password'));
        $user->type          = $request->get('type');
        $user->active        = $request->has('active') ? 1 : 0;
        $user->address       = $request->get('address');

        $user->save();


        $message = $user ? 'Usuario agregado correctamente!' : 'El usuario NO pudo agregarse!';
        
        return redirect()->route('user.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'lastname' => 'required|max:100',
            'email' => 'required',
            'user' => 'required|min:4|max:20',
            'password' => 'required|min:6',
            'type'   => 'required',
            'address' => 'required|max:255'
            
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->lastname     = $request->get('lastname');
        $user->email        = $request->get('email');
        $user->user         = $request->get('user');
        $user->password      = bcrypt($request->get('password'));
        $user->type          = $request->get('type');
        $user->active        = $request->has('active') ? 1 : 0;
        $user->address       = $request->get('address');


        $updated = $user->save();

        $message = $updated ? 'Usuario actualizado correctamente!' : 'El usuario NO pudo actualizarse!';        
        return redirect()->route('user.index')->with('message', $message);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $deleted = $user->delete();

        $message = $deleted ? 'Usuario eliminado correctamente!' : 'El usuario NO pudo eliminarse!';
        return redirect()->route('user.index')->with('message', $message);



    }
}

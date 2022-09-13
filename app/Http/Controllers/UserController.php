<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Profil;
use Illuminate\Http\Request;

class UserController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $users = User::all();
        $profils = Profil::all();
        return view( 'pages.users.index', compact( 'users', 'profils' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $user = Profil::all();
        $profils = Profil::all();
        return view( 'pages.users.create', compact( 'user', 'profils' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreUserRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {

        $profil = new Profil;
        $profil->name = $request->name;
        $profil->age = $request->age;
        $profil->phone = $request->phone;
        $profil->save();

        $user = new User;
        $user->email = $request->email;
        $user->nickname = $request->nickname;
        $user->profil_id = $profil->id;
        $user->save();

        return redirect()->back();
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\User  $user
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        $user = User::find( $id );
        return view( 'pages.users.show', compact( 'user' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\User  $user
    * @return \Illuminate\Http\Response
    */

    public function edit( User $user ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateUserRequest  $request
    * @param  \App\Models\User  $user
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {

        $user = User::find($id);
        $user->email = $request->email;
        $user->nickname = $request->nickname;
        // $user->profil_id = $profil->id;
        $user->save();

        $profil = Profil::find($user->profil->id);
        $profil->name = $request->name;
        $profil->age = $request->age;
        $profil->phone = $request->phone;
        $profil->save();

        return redirect()->back();
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\User  $user
    * @return \Illuminate\Http\Response
    */

    public function destroy( User $user ) {
        //
    }
}

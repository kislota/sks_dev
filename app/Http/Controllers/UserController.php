<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use App\Http\Resources\UserCollection;
use App\Http\Resources\User as UserResources;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return UserResources::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::findOrFail($request->user_id);

        $user->id = $request->input('user_id');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        if($user->save()) {
            return new UserResources($user);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return new UserResources($user);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $comments = $user->comments()->delete();

        if($user->delete()){
            return new UserResources($user);
        }
    }
}

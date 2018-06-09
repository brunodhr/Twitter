<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Tweet;
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
        $users = User::where('id', '!=', Auth::id())->get();
        return view('pages.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = new Image;
        $image->user_id = Auth::user()->id;
        $image->image = upload('images/', $request->image);
        $image->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {

        $user = User::where('username', $username)->first();
        $tweets = $user->tweets->sortByDesc('created_at');
        
            return view('users.show', compact('user', 'tweets'));
    }

    public function edit()
    {
        return view('users.edit');
    }

    public function update(Request $request, $id)
    {
    $user = User::findOrFail($id);
        $array = $request->all();
        if(!empty($array['avatar']))
            $array['avatar'] = upload_avatar('avatars/', $array['avatar'], $array['id']);
        $user->update($array);
        return redirect('/home');
        // return redirect('/edit');
    }

    public function destroy($id)
    {
        
    }

    public function follow($followed_user_id)
    {   
        $user = Auth::user();
        $followed_user = User::find($followed_user_id);
        
        if(!$user->followeds->contains('id', $followed_user->id)){
            $user->followeds()->save($followed_user);
        }
        return back();

    }
    public function unfollow($unfollowed_user_id)
    {
        $unfollowed_user = User::find($unfollowed_user_id);
        $user = Auth::user();
        if($user->followeds->contains('id', $unfollowed_user->id)){
            $user->followeds()->detach($unfollowed_user);
        }
        return back();

    }
    public function followers($username){
        $user = User::where('username', $username)->first();
        $followers = $user->followers;
        return view('pages.followers', compact('user', 'followers'));
    }

    public function followings($username){
        $user = User::where('username', $username)->first();
        $followings = $user->followings;
        return view('pages.following', compact('user', 'followings'));
    }    
}

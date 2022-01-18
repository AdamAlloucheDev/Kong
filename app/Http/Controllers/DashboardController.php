<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('timeline', [
            'posts' => Post::get()->sortByDesc('id'),
            'comments' => Comment::get()->sortByDesc('id'),
            'user' => User::find(Auth::user()->id)
        ]);
    }

    public function layout()
    {
        return view('layouts.navigation', [
            'posts' => Post::get()->sortByDesc('id'),
            'comments' => Comment::get()->sortByDesc('id'),
            'user' => User::find(Auth::user()->id)
        ]);
    }

    public function home()
    {
        return view('welcome', [
            'user' => User::find(Auth::user()->id)
        ]);
    }

    public function showDashboard()
    {
            return view('dashboard', [
                'user' => User::find(Auth::user()->id)
            ]);
    
    }
    public function showUser($id)
    {
        $user = User::find($id)->get();

        if($user) {

            return view('user', [
                'user' => User::where('id', $id)->find($id)
            ]);

        }
    
    }


    

    public function createPost(Request $request)
    {
        $request->validate(['body' => 'required|min:6']);

        auth()->user()->posts()->create(['body' => $request->body]);

        return redirect(route('timeline'));
    }

    public function editUser(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if($user) {
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = bcrypt($request['password']);
            if ($request['image_confirmation']) {

                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png'
                ]);
                //dd($request['image_confirmation']);
                $imageName = $user['id'].'.'.$request['image_confirmation']->extension();

                $request['image_confirmation']->move(public_path().'/imgs/', $imageName);

                $user->image_confirmation = $imageName;
            }

            $user->save();
            return redirect(route('dashboard'));
        } else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->get();

        if(count($user)>0){
            Post::where('user_id', $id)->delete();
            User::where('id', $id )->delete();
            return redirect(route('dashboard'));
        }
        else{
            return redirect(route('dashboard'));
        }
    }
}

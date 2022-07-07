<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("landing");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        $check = DB::table('users')
            ->select()
            ->where('username', $request-> username)
            ->where('password', $request-> password)
            ->get();
        if(count($check) != 0){
            // $request->session()->put('idKey', $check->id);
            $request->session()->put('usernameKey', $request-> username);
            $request->session()->put('passwordKey', $request-> password);
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('failed_message', 'Wrong username or password');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signup(Request $request)
    {
        //input user data
        $check = DB::table('users')
            ->select()
            ->where('username', $request-> username)
            ->get();
        if(count($check) == 0){
            //validate image
        $this->validate($request, [
            'user_image'     => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        //upload image
        $image = $request->file('user_image');
        $image->storeAs('public', $image->hashName());

            user::create([
                'username' => $request-> username,
                'email' => $request-> email,
                'password' => $request-> password,
                'country' => $request-> country,
                'description' => $request-> description,
                'imageurl' => $image->hashName(),
                'created_at' => date("Y-m-d h:m:i"),
                'updated_at' => date("Y-m-d h:m:i"),
            ]);


            $request->session()->put('usernameKey', $request-> username);
            $request->session()->put('passwordKey', $request-> password);
            return redirect()->route('home');
        } else {
            return redirect()->route('/')->with('failed_message', 'Username already been taken');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}

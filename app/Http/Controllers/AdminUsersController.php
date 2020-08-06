<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function profile()
    {
        //
        $user = Auth::user();
        return view('users.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $user = Auth::user();
        return view('users.edit', compact('user'));
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
        $user_id = Auth::user()->id;
        if ($id != $user_id) {
            return back();
        } else {

            $data = $this->validate(request(), [
                'firstname' => ['required', 'string', 'max:255'],
                'lastname'  => ['required', 'string', 'max:255'],
                'username'  => ['required', 'string', 'max:255'],
                'phone'     => ['sometimes', 'string', 'max:20'],
                'role_id'   => ['required', 'string', 'max:255'],
                'gender'    => ['sometimes', 'string', 'max:255'],
                'email'     => ['required', 'string', 'email', 'max:255'],
                'password'  => ['sometimes'],
            ]);

            if ($request->has('password') &&  $request['password'] != '' && $request['password'] != null) {
                $data['password'] = bcrypt($request->input('password'));
            } else {
                $data['password'] = Auth::user()->password;
            }

            User::where('id', $id)->update($data);
            return back();
        }
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

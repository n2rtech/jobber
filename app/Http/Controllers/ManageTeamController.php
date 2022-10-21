<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManageTeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::query();

        $filter_name    = $request->name;

        $filter_email   = $request->email;

        $filter_mobile   = $request->mobile;

        $filter_role  = $request->role;

        isset($filter_name) ? $users->where('name', 'like', '%'.$filter_name.'%') : $users;

        isset($filter_email) ? $users->where('email', $filter_email) : $users;

        isset($filter_mobile) ? $users->where('mobile', $filter_mobile) : $users;

        isset($filter_role) ? $users->where('role', $filter_role) : $users;

        $users = $users->orderBy('id', 'desc')->get();

        return view('settings.manage-team.list', compact('users', 'filter_name', 'filter_email', 'filter_mobile', 'filter_role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.manage-team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'                  => 'required',
            'email'                 => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile'                => 'required',
            'address'               => 'required',
            'city'                  => 'required',
            'state'                 => 'required',
            'country'               => 'required',
            'password'              => ['required', 'string', 'min:6', 'confirmed'],
        ];

        $messages = [
            'name.required'             => "Please enter User name.",
            'email.required'            => "Please enter User email.",
            'mobile.required'           => "Please enter User Mobile.",
            'address.required'          => "Please enter User address.",
            'city.required'             => "Please enter User city.",
            'state.required'            => "Please enter User state.",
            'country.required'          => "Please enter User country.",
            'password.required'         => "Please enter User Password.",
        ];

        $this->validate($request, $rules, $messages);

        $user                   = new user();
        $user->name             = $request->name;
        $user->email            = $request->email;
        $user->mobile           = $request->mobile;
        $user->address          = $request->address;
        $user->city             = $request->city;
        $user->state            = $request->state;
        $user->country          = $request->country;
        $user->zipcode          = $request->zipcode;
        $user->role             = $request->role;
        $user->status           = $request->has('status') ? 1 : 0;
        $user->password         = Hash::make($request->password);

        if($request->hasfile('avatar')){

            $file = $request->file('avatar');

            $filename = $file->getClientOriginalName();

            $file->storeAs('uploads/users/', $filename, 'public');

            $user->avatar = $filename;

        }

        $user->save();

        return redirect()->route('manage-team.index')->with('success', 'User added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $user->avatar = isset($user->avatar) ? asset('storage/uploads/users/'.$user->avatar) : asset('dist/img/avatar.png') ;
        return view('settings.manage-team.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name'                  => 'required',
            'email'                 => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'mobile'                => 'required',
            'address'               => 'required',
            'city'                  => 'required',
            'state'                 => 'required',
            'country'               => 'required',
        ];

        $messages = [
            'name.required'             => "Please enter User name.",
            'email.required'            => "Please enter User email.",
            'mobile.required'           => "Please enter User Mobile.",
            'address.required'          => "Please enter User address.",
            'city.required'             => "Please enter User city.",
            'state.required'            => "Please enter User state.",
            'country.required'          => "Please enter User country."
        ];

        $this->validate($request, $rules, $messages);

        $user                   = User::find($id);
        $user->name             = $request->name;
        $user->email            = $request->email;
        $user->mobile           = $request->mobile;
        $user->address          = $request->address;
        $user->city             = $request->city;
        $user->state            = $request->state;
        $user->country          = $request->country;
        $user->zipcode          = $request->zipcode;
        $user->role             = $request->role;
        $user->status           = $request->has('status') ? 1 : 0;

        if(isset($request->password)){
            $user->password         = Hash::make($request->password);
        }

        if($request->hasfile('avatar')){

            $file = $request->file('avatar');

            $filename = $file->getClientOriginalName();

            $file->storeAs('uploads/users/', $filename, 'public');

            $user->avatar = $filename;

        }
        $user->save();


        return redirect()->route('manage-team.index')->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('manage-team.index')->with('success', 'User deleted successfully!');
    }
}

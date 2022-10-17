<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        //
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
        //
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
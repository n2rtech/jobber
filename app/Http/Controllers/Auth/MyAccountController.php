<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->avatar = isset($user->avatar) ? asset('storage/uploads/users/'.$user->avatar) : asset('dist/img/avatar.png') ;
        return view('settings.my-account', compact('user'));
    }

    public function update(Request $request){
        $id = Auth::user()->id;

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

        if($request->hasfile('avatar')){

            $file = $request->file('avatar');

            $filename = $file->getClientOriginalName();

            $file->storeAs('uploads/users/', $filename, 'public');

            $user->avatar = $filename;

        }
        $user->save();
        return redirect()->route('my-account')->with('success', 'Your account has been updated Successfully');
    }
}

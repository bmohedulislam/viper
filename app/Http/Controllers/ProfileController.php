<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;
use Image;



use function Laravel\Prompts\password;

class ProfileController extends Controller
{
    public function index(){
        return view('profile');
    }
    public function namechange(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        User::find(Auth::id())->update([
            'name' => $request->name
        ]);
        return back()->with('success','Your massage change successfully');
    }
    public function passwordchange(Request $request){
        $request->validate([
            '*' => 'required'

        ]);
        if(Hash::check($request->old_password, Auth::user()->password)){
            if($request->password == $request->conform_password){
                User::find(Auth::id())->update([
                    'password' => bcrypt($request->password)
                ]);
                return back()->with('success_p','Password Change Successfully');
            }
            else {
                return back()->withErrors("Password Don't mass");
            }
        }
        else{
            return back()->withErrors("Old Password Don't mass");
        }

    }
    public function photochange(Request $request){
        $request ->validate([
            'new_profile_photo' => 'required|image',
        ]);
        if (Auth::user()->profile_photo != 'default.jpg') {
            //delete old phot
            unlink(base_path('public/uploads/profile_photos/' . Auth::user()->profile_photo));
        }
        $new_profile_photo_name = Auth::id() . '.' . $request->file('new_profile_photo')->getClientOriginalExtension();
        //upload new photo
        Image::make($request->file('new_profile_photo'))->resize(200,200)->save(base_path('public/uploads/profile_photos/' . $new_profile_photo_name));
        User::find(Auth::id())->update([
            'profile_photo' => $new_profile_photo_name
        ]);
        return back()->with([
            'photo_success' => 'photo change successfully',
            'duita' => 'haha!',
        ]);
    }
}

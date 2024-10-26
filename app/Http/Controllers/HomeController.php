<?php

namespace App\Http\Controllers;

use App\Mail\EmailOffer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
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
    public function index(){
        if(strpos(url()->previous(), "product/details")){
            return redirect(url()->previous());
        }
        return view('home');
    }
    public function emailoffer(){
        return view('emailoffer',[
            'customers' => User::where('role', '!=', 2)->get()
        ]);
    }
    public function singleemailoffer($id){
        Mail::to(User::find($id)->email)->send(new EmailOffer());
        return back();
    }
    public function checkemailoffer(Request $request){
        foreach ($request->check as $id) {
            Mail::to(User::find($id)->email)->send(new EmailOffer());
        }
        return back();
    }
}

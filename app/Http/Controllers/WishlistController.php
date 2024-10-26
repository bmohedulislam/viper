<?php

namespace App\Http\Controllers;

use App\Models\wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('wishlist.index',[
            'wishlists' => wishlist::where('user_id', auth()->id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(wishlist $wishlist)
    {
        //
    }
    public function insert($product_id){

        wishlist::insert([
            'user_id' => auth()->id(),
            'product_id' => $product_id,
            'created_at' => Carbon::now()
        ]);
        return back();
    }
    public function remove($wishlist_id){
        wishlist::find($wishlist_id)->delete();
        return back();
    }
}

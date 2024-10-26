<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.index',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            '*' => 'required',
        ]);
        //photo upload start
        $new_category_photo_name = Auth::id() . '.' .str::random(5).'.'.$request->file('category_photo')->getClientOriginalExtension();
        Image::make($request->file('category_photo'))->save(base_path('public/uploads/category_photos/' . $new_category_photo_name));
        //photo upload_end

        Category::insert([
            'category_name' => $request->category_name,
            'category_tagline' => $request->category_tagline,
            'category_photo' => $new_category_photo_name,
            'created_at' => Carbon::now()
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //return $category;
        //$category = Category::find($id);
        return view('category.show', compact('category'));
    }
    // public function show(string $id)
    // {
    //     $category = Category::find($id);
    //     return view('category.show', compact('category'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //return $category;
        // $category = Category::find($id);
        return view('category.edit',compact('category'));
    }
    // public function edit(string $id)
    // {
    //     $category = Category::find($id);
    //     return view('category.edit',compact('category'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('new_category_photo')) {
            $new_category_photo_name = Auth::id() . '.' . str::random(5) . '.' . $request->file('new_category_photo')->getClientOriginalExtension();
            //delete old photo
            unlink(base_path('public/uploads/category_photos/' . Category::find($id)->category_photo));
            //upload new photo
            Image::make($request->file('new_category_photo'))->resize(600, 328)->save(base_path('public/uploads/category_photos/' . $new_category_photo_name));
            //upload to database
            Category::find($id)->update([
                'category_photo' => $new_category_photo_name
            ]);
        }
        Category::find($id)->update([
            'category_name' => $request->category_name,
            'category_tagline' => $request->category_tagline,
            'status' => $request->status
        ]);
       return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        unlink(base_path('public/uploads/category_photos/' . $category->category_photo));
        $category->delete();
        return back();
    }
}

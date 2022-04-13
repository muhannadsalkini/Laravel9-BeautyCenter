<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datalist = DB::select('select * from categories');
        return view('admin.category', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $datalist = DB::select('select * from categories');
        return view('admin.category_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Category();
        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        if ($request->file('image')){
            $data->image = $request->file('image')->store('images'); // file upload // Storage::putFile('images', $request->file('image'));
        }
        $data->status = $request->input('status');

        return redirect()->route('admin_category')->with('success', 'Category Added');
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
    public function edit(Category $category, $id)
    {
        $data = Category::find($id);  //DB::select("SELECT * FROM categories WHERE Id=?",[$id]);
        $datalist = DB::select("SELECT * FROM categories");

        return view('admin.category_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        $data = Category::find($id);
        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        if ($request->file('image')){
            $data->image = $request->file('image')->store('images'); // file upload // Storage::putFile('images', $request->file('image'));
        }
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin_category')->with('success', 'Category Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::select("DELETE  FROM categories WHERE Id=?",[$id]);
        return redirect()->route('admin_category')->with('success', ' Deleted');
    }
}

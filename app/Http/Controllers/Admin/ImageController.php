<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
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
    public function create($service_id)
    {
        $data = Service::find($service_id);  //DB::select("SELECT * FROM services WHERE Id=?",[$id]);
        $images = DB::table('images')->where('service_id', '=',$service_id)->get();
        return view('admin.image_add', ['data' => $data, 'images' =>$images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $service_id)
    {
        $data = new Image();
        $data->service_id = $service_id;
        $data->title = $request->input('title');
        if ($request->file('image')){
            $data->image = $request->file('image')->store('images'); // file upload // Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_image_add', ['service_id' => $service_id])->with('success', 'Service Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image, $id, $service_id)
    {
        $data = Image::find($id);
        $data->delete();
        return redirect()->route('admin_image_add', ['service_id' => $service_id])->with('success', ' Deleted');
    }
}
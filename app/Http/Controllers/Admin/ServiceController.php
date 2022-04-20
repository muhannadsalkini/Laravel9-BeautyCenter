<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Service::with('category')->get();
        //$datalist = DB::select('select * from categories');
        return view('admin.service', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Service::with('category')->get();
        return view('admin.service_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|min:2|max:149',
            'keywords'=>'required',
            'description'=>'required',
            'image'=>'required',
            'category_id'=>'required',
            'price'=>'required',
            'tax'=>'required',
            'detail'=>'required',
            'status'=>'required',
        ]);

        $data = new Service();
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        if ($request->file('image')){
            $data->image = $request->file('image')->store('images'); // file upload // Storage::putFile('images', $request->file('image'));
        }
        $data->user_id = Auth::id();
        $data->category_id = $request->input('category_id');
        $data->price = $request->input('price');
        $data->days = $request->input('days');
        $data->tax = $request->input('tax');
        $data->detail = $request->input('detail');
        $data->status = $request->input('status');

        $data->save();
        return redirect()->route('admin_service')->with('success', 'Service Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service, $id)
    {
        $data = Service::find($id);
        //echo $data;
        return view('admin.service_show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service, $id)
    {
        $data = Service::find($id);  //DB::select("SELECT * FROM services WHERE Id=?",[$id]);
        $datalist = DB::select("SELECT * FROM categories");

        return view('admin.service_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service, $id)
    {
        $data = Service::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        if ($request->file('image')){
            $data->image = $request->file('image')->store('images'); // file upload
        }
        $data->category_id = $request->input('category_id');
        $data->price = $request->input('price');
        $data->days = $request->input('days');
        $data->tax = $request->input('tax');
        $data->detail = $request->input('detail');
        $data->status = $request->input('status');

        $data->save();
        return redirect()->route('admin_service')->with('success', 'Service Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service, $id)
    {
        DB::select("DELETE  FROM services WHERE Id=?",[$id]);
        return redirect()->route('admin_service')->with('success', ' Deleted');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ImageStoreRequest;
use App\Http\Requests\ImageUpdateRequest;
use Illuminate\Support\Facades\Storage;

use App\Image;
use App\Category;

class ImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::orderBy('id', 'DESC')->paginate(4);
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $image = null;

        return view('admin.images.create', compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function store(ImageStoreRequest $request)
    {
        $notification = array(
            'message' => 'Foto creada con éxito!', 
            'alert-type' => 'success'
        );
        
        $image = Image::create($request->all());

        //Image
        if($request->file('image')){
        
            $path = Storage::disk('public')->put('images',  $request->file('image'));
            $image->fill(['file' => asset($path)])->save();
        }        
        return redirect()->route('imagess.edit', $image->id)->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Image::find($id);
        return view('admin.images.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::find($id);
        return view('admin.images.edit', compact('image'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImageUpdateRequest $request, $id)
    {
        $notification = array(
            'message' => 'Foto actualizada con éxito!', 
            'alert-type' => 'warning'
        );

        $image = Image::find($id);
        $image->fill($request->all())->save();

        //Image 
        if($request->file('image')){
            $path = Storage::disk('public')->put('images',  $request->file('image'));
            $image->fill(['file' => asset($path)])->save();
        }
        return redirect()->route('imagess.edit', $image->id)->with($notification);     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notification = array(
            'message' => 'Foto eliminada con éxito!', 
            'alert-type' => 'error'
        );
        $image = Image::find($id)->delete();
        return back()->with($notification);
    }
}

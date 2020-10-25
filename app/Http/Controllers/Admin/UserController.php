<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');
    }
  
    public function index()
    {
        $auth = auth()->id();
        $user = User::find($auth);
       
        return view('admin.users.index', compact('user'));
    }

    public function create()
    {
        
    }

    public function store(ProductStoreRequest $request)
    {
        
    }
    public function show($id)
    {
   
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        dd($id);
        $notification = array(
            'message' => 'Usuario actualizado con éxito!', 
            'alert-type' => 'warning'
        );
        //$data['password'] = bcrypt($data['password']);
        $user = User::find($id);
        $user->fill($request->all())->save();

        //IMAGE 
        if($request->file('image')){
            $path = Storage::disk('public')->put('images',  $request->file('image'));
            $user->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('users.edit', $user->id)->with($notification);
    }

}

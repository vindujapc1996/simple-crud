<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Customer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function view()
    {
        $call=Customer::all();
        return view('view',compact('call'));
    }
    public function delete($id)
    {
        Customer::find($id)->delete();
        return redirect()->route('view');
    }
    public function edit($id)
    {
        $customer=Customer::find($id);
        return view('edit',compact('customer'));
    }
    public function update($id,Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact'=>'max:10',
            'place'=>'required',
        ]);
        $data=Customer::find($id);
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->contact=$request->input('contact');
        $data->place=$request->input('place');
        $data->update();
        return redirect()->route('view');
    }
    public function register()
    {
        return view('register');
    }
    public function registerdata(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact'=>'max:10',
            'place'=>'required',
            'image' => 'mimes:jpeg,jpg,png,gif|max:2048'

        ]);
        $data=$request->all();
        $path='asset/storage/images/'.$data['image'];
            $fileName=time().$request->file('image')->getClientoriginalName();
            $PATH=$request->file('image')->storeAs('images',$fileName,'public');
            $datas["image"]='/storage/'.$path;
            $data['image']=$fileName;

            Customer::create($data);
            return redirect()->route('register')->with('success','registered');
    }
}

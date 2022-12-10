<?php

namespace App\Http\Controllers;
use App\Models\Information;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $request = Information::all();

        return view('list',['request' => $request]);
    }
    public function create()
    {

        return view('create-data');
    }
    public function store(Request $request)
    {

        $data= new Information;
        $data->name= $request->name;
        $data->email= $request->email;
        $data->address= $request->address;
        $data->save();
        return redirect('/list');
    }
    public function edit($id)
    {
        $data =    Information::where('id',$id)->first();
        
        return view('edit',compact('data'));    
    }
    public function update(Request $request, $id)
    {
        $data =   Information::where('id',$id)->first();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->save();
        return redirect('/list');
    }
    public function destroy($id)
    {
        $data =   Information::whereId($id)->first();
        $data->delete();
        
        return redirect('/list');
    }




}
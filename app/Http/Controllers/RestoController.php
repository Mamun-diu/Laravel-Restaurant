<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Session;
class RestoController extends Controller
{
    function index(){
        return view('home');
    }
    function list(){
        $data = Restaurant::all();
        return view('list')->with('data',$data);

    }
    function add(){
        return view('add');
    }
    function save(Request $req){
        $resto = new Restaurant;
        $resto->name = $req->name;
        $resto->email = $req->email;
        $resto->address = $req->address;
        $resto->save();
        $req->session()->flash('status','Restaurant submitted successfully');
        return redirect('list');

    }
    function delete($id){
        Restaurant::destroy($id);
        Session::flash('status', 'Restaurant Deleted successfully');
        return Redirect()->back();
    }
    function edit($id){
        $data = Restaurant::find($id);
        return view('edit')->with('data',$data);
    }
    function update(Request $req, $id){
        $resto = Restaurant::find($id);
        $resto->name = $req->name;
        $resto->email = $req->email;
        $resto->address = $req->address;
        $resto->save();
        Session::flash('status', "Restaurant Update Successfully");
        return redirect('/list');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    //
    public function create(){
    	return view('artikel.form');
    }

    public function store(Request $request){
    	$data=$request->all();
    	unset($data["_token"]);
    	$newitem=ArtikelModel::save($data);
    	return redirect('/artikel');
    }

    public function index(){
    	$items=ArtikelModel::get_all();
    	return view('artikel.index',compact('items'));
    }

    public function show($id){
    	$item=ArtikelModel::find_by_id($id);
    	return view('artikel.show',compact('item'));
    }

    public function edit($id){
    	$item=ArtikelModel::find_by_id($id);
    	return view('artikel.edit',compact('item'));
    }

    public function update($id,Request $request){
    	$data=$request->all();
    	unset($data["_token"]);
    	unset($data["_method"]);
    	$item=ArtikelModel::update($id,$data);
    	return redirect('/artikel');
    }

    public function destroy($id){
    	$item=ArtikelModel::destroy($id);
    	return redirect('/artikel');
    }
}

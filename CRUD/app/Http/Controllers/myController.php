<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class myController extends Controller
{
    function showHello(){
    	return view("insert");
    }

    function insertData(Request $request){
    	$name = $request->input('name');
    	$enroll = $request->input('enrollment');

    	DB::insert("insert into Students (name, enrollment) values (?, ?) ", [$name, $enroll]);
    	return redirect()->route("show_detail");

    }

    function showData(){
    	$data = DB::select("select * from Students");
    	return view("show", ['data'=> $data]);
    }

    function deleteData($id){
    	DB::delete("delete from Students where id=?", [$id]);
    	return redirect()->route("show_detail");
    }

    function showUpdate($id){
    	$data = DB::select("select * from Students where id=?", [$id]);
    	return view("update", ['data'=> $data]);
    }

    function updateData(Request $request, $id){
    	$name = $request->input('name');
    	$enroll = $request->input('enrollment');
    	DB::update("update Students set name=?, enrollment=? where id=?", [$name, $enroll, $id]);
    	return redirect()->route("show_detail");
    	// return view("insert", ["name" => $name, "enroll" => $enroll, "id" => $id]);
    }
}

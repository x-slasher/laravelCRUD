<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
    public function home()
    {
    	$articles=Article::all();
    	// echo "<pre>";
    	// print_r($articles);
    	// echo "</pre>";
    	return view('home',['articles' => $articles]);
    }
    public function add(Request $request)
    {
    	$this->validate($request,[
    		'name'=>'required',
    		'address'=>'required',
    		'phone_no'=>'required'
    	]);

    	$articles = new Article;
    	$articles->name = $request -> input('name');
    	$articles->address = $request->input('address');
    	$articles->phone_no = $request->input('phone_no');
    	$articles->save();
    	return redirect('/')->with('info','Article Save Successfully');

    	
    }

    public function update($id)
    {
    	$articles = Article::find($id);
    	

    	return view('update',['articles' => $articles]);
    }

    public function edit(Request $request,$id)
    {
    	$this->validate($request,[
    		'name'=>'required',
    		'address'=>'required',
    		'phone_no'=>'required'
    	]);
    	$data=array(
    		'name'=> $request->input('name'),
    		'address'=> $request->input('address'),
    		'phone_no'=> $request->input('phone_no')
    	);	


    	Article::where('id',$id)->update($data);
    	return redirect('/')->with('info','Article Updated Successfully');
    }

    public function delete($id)
    {
    	Article::where('id',$id)->delete();
    	return redirect('/')->with('info','Article Deleted Successfully');
    }
}

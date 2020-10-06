<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware("CheckIfCanPost");
	}
    public function index()
    {
    	$products=products::get();
    	return view("posts.index",["products"=>$products]);
    }
    public function create()
    {
    	return view("posts.create");
    }
    public function store(Request $request)
    {
    	products::create([
    		"title"=>$request->input("title"),
    		"text"=>$request->input("text"),
    		"short_description"=>$request->input("text2")

    	]);
    }
}

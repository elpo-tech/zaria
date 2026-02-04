<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HousemanagerController extends Controller

{
    public function index()
    {

    $Housemanager =housemanager::all();
    return view('Housemanager.index',compact('Housemanager'));
    }
    public function create()
    {
        return view('Housemanager.create');
    }
    public function store(Request $request)
    {
 $request->validate([
            'name'   => 'required|string|max:255',
            'id number'  => 'required|id number|unique:housemanager,id number',
            'phone number'  => 'required|integer|max:20',
            'education level'=> 'required|string|max:255',
            'years of experience'=> 'required|stting|max:255',
            'former employer number'=>'required|integer|max:20',
            'house manager residence'=>'required|string|max:255',
            'next of kin details'=>'required|string|max:255',
 ]);
 housemanager::create($request->all());
 return redirect()->route('Housemanager.index');
    }
       

    }
   

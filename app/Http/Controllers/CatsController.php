<?php

namespace App\Http\Controllers;
use App\Models\Cat;
use App\Models\User;
use Illuminate\Http\Request;

class CatsController extends Controller
{
    public function index()
    {
        return view('cats.index', ['cats' => Cat::all()]);
    }
    public function create()
    {
        return view('cats.create');
    }

    public function show()
    {
        return view('cats.show',['users' => User::with('cats')->get()]);
    
    }

    public function createnew(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'who' => 'required|max:10',
            'user_id' => 'required',
        ]);

        Cat::create([
            'name' => $request->name,
            'who' => $request->who,
            'user_id' => $request->user_id
        ]);

        return back();

        
    }
}
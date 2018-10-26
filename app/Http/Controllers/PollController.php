<?php

namespace App\Http\Controllers;
use App\Poll;
use App\User;
use App\Choice;
use Auth;

use Illuminate\Http\Request;

class PollController extends Controller
{
    public function index()
    {

        return view('polls.index');
    }

    public function create()
    {
        
        return view('polls.create');
    }

    public function store(Request $request)
    {
        $code = uniqid();
        $id = Auth::id();
        
        $poll = Poll::create([
            'name' => $request->name, 
            'description' => $request->description,
            'code' => $code,
            'user_id' => $id
        ]);
        
        foreach($request->option as $value)
            $choices = Choice::create([
            'option' => $value,
            'poll_id' => $poll->id
        ]);



        // dd($request->option);


        
       

        return redirect(action('PollController@index'));
    }




}

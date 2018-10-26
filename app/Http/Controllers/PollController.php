<?php

namespace App\Http\Controllers;
use App\Poll;
use App\User;
use App\Choice;

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
        $poll = Poll::create($request->input('name', 'user_id', 'description'));
        $choices = Choice::create($request->input('option1', 'option2', 'option3'));
        // $poll->save();
        // $choices->save();
    
        return redirect(action('PollController@index'));
    }




}

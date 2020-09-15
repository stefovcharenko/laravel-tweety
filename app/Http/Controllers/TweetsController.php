<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;
use function request;

class TweetsController extends Controller
{
    public function store()
    {
        request()->validate([
            'body' => 'required|max:255'
        ]);

        Tweet::create([
            'user_id' => auth()->user()->id,
            'body' => request('body'),
        ]);

        return redirect('/home');
    }
}

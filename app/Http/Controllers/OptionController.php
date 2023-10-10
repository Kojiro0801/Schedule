<?php

namespace App\Http\Controllers;
use App\Models\Schedule;
use App\Models\Plan;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function show_vote(Option $option)
    {
        return view('plans.show_vote')->with(['options' =>$option->get()]);
    }
}

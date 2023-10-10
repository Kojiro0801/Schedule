<?php

namespace App\Http\Controllers;
use App\Models\Plan;
use App\Models\Option;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index_vote(Plan $plan)
    {
        return view('plans.index_vote')->with(['plans' => $plan->get()]);
    }
    
    public function show_vote(Plan $plan)
    {
        return view('plans.show_vote')->with([ 'plan' => $plan]);
    }
    
    // public function show_option(Options $option)
    // {
        
    //     return view('plans/show_vote')->with(['options' => $option->get()]);
        
    // }
    
}

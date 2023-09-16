<?php

namespace App\Http\Controllers;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index_vote(Plan $plan)
    {
        return view('plans.index_vote')->with(['plans' => $plan->get()]);
    }
}

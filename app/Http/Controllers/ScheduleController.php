<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Http\Requests\ScheduleRequest;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    
    public function index(Schedule $schedule)
    {
        return view('schedules.index')->with(['schedules' => $schedule->getPaginateByLimit()]);
    }
    
    public function show(Schedule $schedule)
    {
      return view('schedules/show')->with(['schedule' => $schedule]);
    }
  
  public function create(Schedule $schedule)
  {
      return view('schedules.create');
  }
  
  
  public function store(ScheduleRequest $request, Schedule $schedule)
  
  {
      $schedule->user_id = \Auth::id();
      $input = $request['schedule'];
      $schedule->fill($input)->save();
      return redirect('/schedules/' . $schedule->id);
  }
  
  public function edit(Schedule $schedule)
  {
      return view('schedules.edit')->with(['schedule' => $schedule]);
  }
  
  public function update(Request $request, Schedule $schedule)
  {
      $input_schedule = $request['schedule'];
      $schedule->fill($input_schedule)->save();
      
      return redirect('/schedules/' . $schedule->id);
  }
  
  public function delete(Schedule $schedule)
  {
      $schedule->delete();
      return redirect('/');
  }
  
  
}

<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf8mb4">
        <title>Schedule</title>
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link href="{{secure_asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        
        <h1 class="edit-title">予定編集</h1>
        <div class="edit-page">
            <form action="/schedules/{{ $schedule->id }}" method="POST">
                @csrf
                @method('PUT')
            <div class="goal">
                <h3>予定先:</h3>
               <input type="text" name='schedule[goal]' value="{{ $schedule->goal }}">
            </div>
            <div class="content_schedule">
                <h3>予定内容:</h3>
                <input type="text" name='schedule[content]' value="{{ $schedule->content }}">
            </div>
        
            <div class="person">
                <h3>参加者名：</h3>
                 <input type="text" name='schedule[person]' value="{{ $schedule->person }}">
            </div>
        
            <div class="schedule-day">
                <h3>予定日:</h3>
                <input type="text" name='schedule[date]' value="{{ $schedule->date }}">
            </div>
        
            <div class="note">
               <h3>その他</h3>
               <input type="text" name='schedule[note]' value="{{ $schedule->note }}">
            </div>
            
           <!--<input type="submit" value="保存">-->
           
           
             <form action="/schedules/{{ $schedule->id }}" id="form_{{ $schedule->id }}" method="post">
                 @csrf
                 <button type="submit" onclick="editSchedule({{ $schedule->id }})">保存</button>
             </form>
            
            </form>
            </div>
            
             <script>
               function editSchedule(id){
                   'use strict'
                   
                   if(confirm('{{ $schedule->note }}'))
                   {
                       document.getElementById(`form_${id}`).submit();
                   }
               }
           </script>
    </body>
    
    </html>
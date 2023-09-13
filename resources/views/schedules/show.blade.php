<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf8mb4">
        <title>Schedule</title>
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link href="{{secure_asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="show-page">
            
            <div class="title">
                <h3>目的:</h3>
                {{ $schedule->title }}
            </div>
            
                
            <div class="goal">
                <h3>予定先:</h3>
               {{ $schedule->goal}}
            </div>
        
            <div class="content_schedule">
                <h3>予定内容:</h3>
                {{ $schedule->content }}
            </div>
        
            <div class="person">
                <h3>参加者名：</h3>
                {{ $schedule->person }}
            </div>
        
            <div class="schedule-day">
                <h3>予定日:</h3>
                {{ $schedule->date }}
            </div>
        
            <div class="note">
               <h3>その他</h3>
                {{ $schedule->note }}
            </div>
            
            <div class="edit">
                <a href="/schedules/{{ $schedule->id }}/edit">編集</a>
            </div>
            
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        　　　
            </div>
    </body>
    </html>
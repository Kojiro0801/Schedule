<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf8mb4">
        <title>Schedule</title>
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link href="{{secure_asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        <h1>投票候補画面一覧</h1>
        @foreach($plans as $plan)
            <h2 class="plan_title">
                <a href="/plans/{{ $plan->id }}">{{ $plan->title}}</a>
            </h2>
        @endforeach
        
    </body>
    
    </html>
<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf8mb4">
        <title>Schedule</title>
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>予定作成画面</h1>
        <form action="/schedules" method="POST">
            @csrf
            
            <div class="title">
                <h2>予定</h2>
                <input type="text" name="schedule[title]"placeholder="予定内容" value={{ old('schedule.title') }}>
                <p class="title_error" style="color:red" >{{ $errors->first('schedule.title') }}</p>
            </div>
            
            <div class="goal">
                <h2>予定先</h2>
                <input type="text" name="schedule[goal]"placeholder="予定詳細" value={{ old('schedule.goal') }}>
                 <p class="goal_error" style="color:red" >{{ $errors->first('schedule.goal') }}</p>
            </div>
             <div class="content">
                <h2>予定内容</h2>
                <input type="text" name="schedule[content]"placeholder="予定内容" value={{ old('schedule.content') }}>
                 <p class="content_error" style="color:red" >{{ $errors->first('schedule.content') }}</p>
            </div>
        
            <div class="person">
                <h2>参加者名：</h2>
                <input type="text" name="schedule[person]"placeholder="参加者名" value={{ old('schedule.person') }}>
                 <p class="person_error" style="color:red" >{{ $errors->first('schedule.person') }}</p>
            </div>
            
            <div class="date">
                <h2>予定日</h2>
                <input type="text" name="schedule[date]"placeholder="予定日" value={{ old('schedule.date') }}>
                 <p class="date_error" style="color:red" >{{ $errors->first('schedule.date') }}</p>
            </div>
            
            <div class="note">
                <h2>備考（キャンセル料の有無、期間等)</h2>
                <input type="text" name="schedule[note]"placeholder="備考">
            </div>
            
            <input type="submit" value="保存"></input>
            
        </form>
        
        <div class="footer">
                <a href="/">戻る</a>
            </div>
    </body>
    </html>
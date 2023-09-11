<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf8mb4">
        <title>Schedule</title>
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1 class="all">すべての予定画面一覧</h1>
        
        <div class="schedules">
       @foreach($schedules as $schedule)
                <h2 class="schedule-title">
                    <a href="/schedules/{{ $schedule->id }}">{{ $schedule->title }}</a>
                </h2>
            
             
             <form action="/schedules/{{ $schedule->id }}" id="form_{{ $schedule->id }}" method="post">
                 @csrf
                 @method('DELETE')
                 <button type="button" onclick="deleteSchedule({{ $schedule->id }})">delete</button>
             </form>
        @endforeach
        </div>
      
           <div class="create-btn">
               <a href="/schedules/create">登録</a>
           </div>
           
           <script>
               function deleteSchedule(id){
                   'use strict'
                   
                   if(confirm('削除すると復元できません。\n本当に削除しますか?'))
                   {
                       document.getElementById(`form_${id}`).submit();
                   }
               }
           </script>
           
           <div class="paginate">{{ $schedules->links() }}</div>
        
    </body>
    
</html>
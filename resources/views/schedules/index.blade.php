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
                <h2 class="schedule-title">{{ $schedule->title }}</h2>
            
            
       
            <div class="edit-btn">
                <button>予定編集</button>
            </div>
        
             
             <div class="delete-btn">
                <button>削除</button>
             </div>
        @endforeach
        </div>
      
           <div class="create-btn">
               <button>予定作成</button>
           </div>
        
    </body>
    
</html>
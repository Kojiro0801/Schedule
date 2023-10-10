<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf8mb4">
        <title>Schedule</title>
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link href="{{secure_asset('css/style.css')}}" rel="stylesheet">
    </head>
        <body>
        <div class="show_vote-page">
            
            <body>
                <h2 class="plan_title">
                    <h3>投票内容</h3>
                    {{ $plan->title }}
                </h2>
                
                <h2 class="plan_option">
                    <h3>選択肢</h3>
                    @foreach($plan->options as $option)
                       {{ $option->name }}
                    @endforeach
                </h2>
                
                <h2 class="plan_deadline">
                    <h3>締め切り</h3>
                    {{ $plan->deadline }}
                </h2>
                
            </body>
            
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        　　　
            </div>
    </body>
    </html>
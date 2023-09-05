<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        DB::table('schedules')->insert([
            'title'=>'今日の晩御飯',
            'content'=>'大戸屋で朝御飯を食べる',
            'person'=>'田中太郎',
            'goal'=>'大戸屋',
            'note'=>'特になし',
            'date'=>'8月２９日１８時',
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
            'user_id'=>1,
        
            ]);
            
        DB::table('schedules')->insert([
            
            'title'=>'今日の昼御飯',
            'content'=>'ロイヤルホストで朝御飯を食べる',
            'person'=>'佐藤次郎',
            'goal'=>'ロイヤルホスト',
            'note'=>'特になし',
            'date'=>'8月３０日１３時',
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
            'user_id'=>2,
            ]);
            
        DB::table('schedules')->insert([
            
            'title'=>'今日の朝御飯',
            'content'=>'松やで朝御飯を食べる',
            'person'=>'伊藤三郎',
            'goal'=>'松や',
            'note'=>'特になし',
            'date'=>'8月２９日８時',
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
            'user_id'=>3,
            
            
            ]);
            
            
    }
}

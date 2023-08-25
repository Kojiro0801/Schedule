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
            'content'=>'大戸屋で晩御飯を食べる',
            'note'=>'特になし',
            'date'=>'8月２８日１９時',
            'created_at'=>new Datetime(),
            'updated_at'=>new Datetime(),
            'user_id'=>1,
            ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attendance;

class AttendancesTableSeeder extends Seeder
{
    public function run()
    {
        $attendances = [
            [
                'user_id' => '1',
                'work_date' => '2000-01-01',
                'am_start_time' => '10:00',
                'am_end_time' => '12:00',
                'am_place' => '現場A',
                'pm_start_time' => '13:00',
                'pm_end_time' => '18:00',
                'pm_place' => '現場A'
            ],[
                'user_id' => '1',
                'work_date' => '2000-01-02',
                'am_start_time' => '10:00',
                'am_end_time' => '12:00',
                'am_place' => '現場B',
                'pm_start_time' => '13:00',
                'pm_end_time' => '18:00',
                'pm_place' => '現場B'
            ]
        ];

        foreach($attendances as $attendance) {
            Attendance::create($attendance);
        }
    }
}
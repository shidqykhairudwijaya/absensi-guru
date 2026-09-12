<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        Schedule::create([
            'teacher_name' => 'Budi',
            'subject' => 'Informatika',
            'class_name' => 'VIII-A',
            'start_time' => '08:00',
            'end_time' => '08:40',
        ]);

        Schedule::create([
            'teacher_name' => 'Siti',
            'subject' => 'Matematika',
            'class_name' => 'VIII-B',
            'start_time' => '09:00',
            'end_time' => '09:40',
        ]);

        Schedule::create([
            'teacher_name' => 'Andi',
            'subject' => 'IPA',
            'class_name' => 'IX-A',
            'start_time' => '10:00',
            'end_time' => '10:40',
        ]);
    }
}
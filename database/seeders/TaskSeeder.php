<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::insert([
            ['title' => 'Design wireframes', 'status' => 'To do'],
            ['title' => 'Write backend logic', 'status' => 'In progress'],
            ['title' => 'Deploy to production', 'status' => 'Done'],
            ['title' => 'Fix bugs', 'status' => 'To do'],
            ['title' => 'Code review', 'status' => 'In progress'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Tasklist;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasklist_crseed = Tasklist::where('name', 'Create seeders for app')->first();
        $tasklist_pzplan = Tasklist::where('name', 'Work on PuzzlePlanetDB')->first();

        $task = Task::create([
            'name' => 'Create seeder files',
            'order' => 1,
            'tasklist_id' => $tasklist_crseed->id,
            'finish_date' => now(),
        ]);
        $task = Task::create([
            'name' => 'Seed users',
            'order' => 2,
            'tasklist_id' => $tasklist_crseed->id,
        ]);
        $task = Task::create([
            'name' => 'Seed task lists',
            'order' => 3,
            'tasklist_id' => $tasklist_crseed->id,
        ]);
        $task = Task::create([
            'name' => 'Seed tasks',
            'order' => 4,
            'tasklist_id' => $tasklist_crseed->id,
        ]);

        $task = Task::create([
            'name' => 'Factories',
            'order' => 1,
            'tasklist_id' => $tasklist_pzplan->id,
            'finish_date' => now(),
        ]);
        $task = Task::create([
            'name' => 'Seeders',
            'order' => 2,
            'tasklist_id' => $tasklist_pzplan->id,
            'finish_date' => now(),
        ]);
        $task = Task::create([
            'name' => 'Models',
            'order' => 3,
            'tasklist_id' => $tasklist_pzplan->id,
        ]);
        $task = Task::create([
            'name' => 'Controllers',
            'order' => 4,
            'tasklist_id' => $tasklist_pzplan->id,
        ]);
    }
}

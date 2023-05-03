<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Tasklist;
use App\Models\User;

class TasklistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_normie = User::where('name','normie')->first();
        $user_admin = User::where('name','admin')->first();

        $tasklist = Tasklist::factory()->create([
            'name' => 'Create seeders for app',
            'user_id' => $user_normie->id,
        ]);
        $tasklist = Tasklist::factory()->create([
            'name' => 'Work on PuzzlePlanetDB',
            'user_id' => $user_normie->id,
        ]);
    }
}

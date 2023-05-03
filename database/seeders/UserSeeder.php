<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_user = Role::where('name','user')->first();
        $role_admin = Role::where('name','admin')->first();
        User::factory()->create([
            'name' => 'normie',
            'email' => 'normie@example.com',
            'password' => Hash::make('1234567890'),
            'role_id' => $role_user->id,
        ]);
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('1234567890'),
            'role_id' => $role_admin->id,
        ]);
    }
}

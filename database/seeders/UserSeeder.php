<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $student = User::factory()->create([
            'name' => 'student',
            'email' => 'student@tcrmbo.nl',
            'password' => Hash::make('student')
        ]);
        $student->assignRole('student');

        $teacher = User::factory()->create([
            'name' => 'teacher',
            'email' => 'teacher@tcrmbo.nl',
            'password' => Hash::make('teacher')
        ]);
        $teacher->assignRole('teacher');

        $admin = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@tcrmbo.nl',
            'password' => Hash::make('admin')
        ]);
        $admin->assignRole('admin');
    }
}

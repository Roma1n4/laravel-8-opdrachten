<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Activity::factory() ->create([
            'name' => 'Todo'
        ]);

        Activity::factory() ->create([
            'name' => 'Doing'
        ]);

        Activity::factory() ->create([
            'name' => 'Testing'
        ]);
        
        Activity::factory() ->create([
            'name' => 'Verify'
        ]);

        Activity::factory() ->create([
            'name' => 'Done'
        ]);

        // ->times(10)
        // ->create();
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Project;
use App\Models\Activity;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'task'=>$this->faker->name,
            'begindate'=> now(),
            'enddate'=> now(),
            'user_id' => User::all()->random()->id,
            'project_id' => Project::all()->random()->id,
            'activity_id' => Activity::all()->random()->id
        ];
    }
}

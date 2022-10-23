<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Support>
 */
class SupportFactory extends Factory
{
	public function definition()
	{
		return [
			'user_id'     => User::factory(),
			'lesson_id'   => Lesson::factory(),
			'status'      => 'P',
			'description' => fake()->sentence(20),
		];
	}
}
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
	public function definition()
	{
			return [
			'name'        => fake()->unique()->name(),
			'description' => fake()->sentence(20)
		];
	}
}

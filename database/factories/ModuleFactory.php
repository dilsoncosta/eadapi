<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
	public function definition()
	{
		return [
		'course_id' => Course::factory(),
		'name'      => fake()->name(),
		];
	}
}
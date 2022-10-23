<?php

namespace Database\Factories;

use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
	public function definition()
	{
		$name = fake()->unique()->name();
		
		return [
			'module_id' => Module::factory(),
			'name'      => $name,
			'url'       => Str::slug($name),
			'video'     => Str::random(),
		];
	}
}

<?php

namespace App\Repositories;

use App\Models\Lesson;

class LessonRepository 
{
	private $entity;
	
	public function __construct(Lesson $model)
	{
		$this->entity = $model;
	}
	
	public function getLessonsByModuleId(string $module_id)
	{
		return $this->entity->where('module_id', $module_id)
								->get();
	}
	
	public function getLesson(string $identify)
	{
		return $this->entity->where('id', $identify)
								->first();
	}
}
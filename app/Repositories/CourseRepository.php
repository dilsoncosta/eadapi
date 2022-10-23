<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository 
{
	private $entity;
	
	public function __construct(Course $model)
	{
		$this->entity = $model;
	}
	
	public function getAllCourses()
	{
		return $this->entity->get();
	}
	
	public function getCourse(string $id)
	{
		return $this->entity->find($id);
	}
}
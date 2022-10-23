<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Repositories\CourseRepository;
use Illuminate\Http\Request;

class CourseController extends Controller
{
	private $repository;

	public function __construct(CourseRepository $courseRepository)
	{
		$this->repository = $courseRepository;
	}
	
	public function index()
	{
		$courses = $this->repository->getAllCourses();
		
		return CourseResource::collection($courses);
	}
	
	public function show($id)
	{
		$course = $this->repository->getCourse($id);
		
		if(!$course)
		{
			return response()->json(['message' => 'Nenhuma aula encontrada!'], 400);
		}
		
		return new CourseResource($course);
	}
}

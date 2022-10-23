<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LessonResource;
use App\Repositories\LessonRepository;

class LessonController extends Controller
{
	private $repository;
	
	public function __construct(LessonRepository $lessonRepository)
	{
		$this->repository = $lessonRepository;
	}
	
	public function index($moduleId)
	{
		$lessons = $this->repository->getLessonsByModuleId($moduleId);
		
		return LessonResource::collection($lessons);
	}
	
	public function show($id)
	{
		$lesson = $this->repository->getLesson($id);
		
		return new LessonResource($lesson);
	}
}

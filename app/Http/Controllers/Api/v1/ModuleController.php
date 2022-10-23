<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModuleResource;
use App\Repositories\ModuleRepository;

class ModuleController extends Controller
{
	private $repository;

	public function __construct(ModuleRepository $courseRepository)
	{
		$this->repository = $courseRepository;
	}
	
	public function index($courseId)
	{
		$modules = $this->repository->getModulesCourseById($courseId);
		
		return ModuleResource::collection($modules);
	}
}

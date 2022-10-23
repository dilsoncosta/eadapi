<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSupport;
use App\Http\Resources\SupportResource;
use App\Repositories\SupportRepository;

class SupportController extends Controller
{
	private $repository;
	
	public function __construct(SupportRepository $supportRepository)
	{
		$this->repository = $supportRepository;
	}
	
	public function index(Request $request)
	{
		$supports = $this->repository->getSupports($request->all());
		
		return SupportResource::collection($supports);
	}
	
	public function store(StoreSupport $request)
	{
		$support = $this->repository->createNewSupport($request->all());
		
		return new SupportResource($support);
	}
}

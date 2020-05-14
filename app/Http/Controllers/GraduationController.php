<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\GraduationRequest;
use App\Repositories\GraduationRepository;

class GraduationController extends Controller
{
    protected $repository;
    public function __construct(GraduationRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"graduation"},
    *     path="api/v1/graduation",
    *     description="Return a list with graduations",
    *     @OA\Response(
    *         response=200,
    *         description="A list with graduations",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function index()
    {
        $response = $this->repository->all();
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"graduation"},
    *     path="api/v1/graduation",
    *     description="Create new graduation",
    *     @OA\Response(
    *         response=200,
    *         description="A created graduation",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function store(GraduationRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"graduation"},
    *     path="api/v1/graduation",
    *     description="Return a specific graduation",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of graduation",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific graduation",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function show($id)
    {
        $response = $this->repository->findOrFail($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"graduation"},
    *     path="api/v1/graduation",
    *     description="Update a specific graduation",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of graduation",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated graduation",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function update(GraduationRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"graduation"},
    *     path="api/v1/graduation",
    *     description="Remove a specific graduations",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of graduation",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted graduation",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function destroy($id)
    {
        $response = $this->repository->findAndDelete($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"graduation"},
    *     path="api/v1/graduation/restore",
    *     description="Restore a specific graduation",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of graduation",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored graduation",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function restore($id)
    {
        $response = $this->repository->findAndRestore($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"graduation"},
    *     path="api/v1/graduation/forceDelete",
    *     description="Remove permanently graduation",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of graduation",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly graduation",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function forceDelete($id)
    {
        $response = $this->repository->findAndDestroy($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}

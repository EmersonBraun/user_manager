<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectorRequest;
use App\Repositories\SectorRepository;

class SectorController extends Controller
{
    protected $repository;
    public function __construct(SectorRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"sector"},
    *     path="api/v1/sector",
    *     description="Return a list with sectors",
    *     @OA\Response(
    *         response=200,
    *         description="A list with sectors",
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
    *     tags={"sector"},
    *     path="api/v1/sector",
    *     description="Create new sector",
    *     @OA\Response(
    *         response=200,
    *         description="A created sector",
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
    public function store(SectorRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"sector"},
    *     path="api/v1/sector",
    *     description="Return a specific sector",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of sector",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific sector",
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
        $response = $this->repository->getRamalsAndUsers($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"sector"},
    *     path="api/v1/sector",
    *     description="Update a specific sector",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of sector",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated sector",
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
    public function update(SectorRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"sector"},
    *     path="api/v1/sector",
    *     description="Remove a specific sectors",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of sector",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted sector",
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
    *     tags={"sector"},
    *     path="api/v1/sector/restore",
    *     description="Restore a specific sector",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of sector",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored sector",
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
    *     tags={"sector"},
    *     path="api/v1/sector/forceDelete",
    *     description="Remove permanently sector",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of sector",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly sector",
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

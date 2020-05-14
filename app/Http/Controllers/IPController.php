<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\IPRequest;
use App\Http\Requests\IPRequestUpdate;
use App\Repositories\IPRepository;

class IPController extends Controller
{
    protected $repository;
    public function __construct(IPRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"ip"},
    *     path="api/v1/ip",
    *     description="Return a list with IPS",
    *     @OA\Response(
    *         response=200,
    *         description="A list with IPS",
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
        $response = $this->repository->listIPWithUsers();
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"ip"},
    *     path="api/v1/ip",
    *     description="Create new ip",
    *     @OA\Response(
    *         response=200,
    *         description="A created ip",
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
    public function store(IPRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"ip"},
    *     path="api/v1/ip",
    *     description="Return a specific ip",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ip",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific ip",
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
        $response = $this->repository->showUser($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"ip"},
    *     path="api/v1/ip",
    *     description="Update a specific ip",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ip",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated ip",
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
    public function update(IPRequestUpdate $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"ip"},
    *     path="api/v1/ip",
    *     description="Remove a specific IPS",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ip",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted ip",
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
    *     tags={"ip"},
    *     path="api/v1/ip/restore",
    *     description="Restore a specific ip",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ip",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored ip",
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
    *     tags={"ip"},
    *     path="api/v1/ip/forceDelete",
    *     description="Remove permanently ip",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ip",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly ip",
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

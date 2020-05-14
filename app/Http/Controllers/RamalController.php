<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RamalRequest;
use App\Repositories\RamalRepository;

class RamalController extends Controller
{
    protected $repository;
    public function __construct(RamalRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"ramal"},
    *     path="api/v1/ramal",
    *     description="Return a list with ramals",
    *     @OA\Response(
    *         response=200,
    *         description="A list with ramals",
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
    *     tags={"ramal"},
    *     path="api/v1/ramal",
    *     description="Create new ramal",
    *     @OA\Response(
    *         response=200,
    *         description="A created ramal",
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
    public function store(RamalRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"ramal"},
    *     path="api/v1/ramal",
    *     description="Return a specific ramal",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ramal",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific ramal",
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
    *     tags={"ramal"},
    *     path="api/v1/ramal",
    *     description="Update a specific ramal",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ramal",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated ramal",
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
    public function update(RamalRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"ramal"},
    *     path="api/v1/ramal",
    *     description="Remove a specific ramals",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ramal",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted ramal",
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
    *     tags={"ramal"},
    *     path="api/v1/ramal/restore",
    *     description="Restore a specific ramal",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ramal",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored ramal",
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
    *     tags={"ramal"},
    *     path="api/v1/ramal/forceDelete",
    *     description="Remove permanently ramal",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ramal",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly ramal",
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhoneTypeRequest;
use App\Repositories\PhoneTypeRepository;

class PhoneTypeController extends Controller
{
    protected $repository;
    public function __construct(PhoneTypeRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"PhoneType"},
    *     path="api/v1/PhoneType",
    *     description="Return a list with PhoneTypes",
    *     @OA\Response(
    *         response=200,
    *         description="A list with PhoneTypes",
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
    *     tags={"PhoneType"},
    *     path="api/v1/PhoneType",
    *     description="Create new PhoneType",
    *     @OA\Response(
    *         response=200,
    *         description="A created PhoneType",
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
    public function store(PhoneTypeRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"PhoneType"},
    *     path="api/v1/PhoneType",
    *     description="Return a specific PhoneType",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of PhoneType",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific PhoneType",
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
        $response = $this->repository->getContacts($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"PhoneType"},
    *     path="api/v1/PhoneType",
    *     description="Update a specific PhoneType",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of PhoneType",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated PhoneType",
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
    public function update(PhoneTypeRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"PhoneType"},
    *     path="api/v1/PhoneType",
    *     description="Remove a specific PhoneTypes",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of PhoneType",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted PhoneType",
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
    *     tags={"PhoneType"},
    *     path="api/v1/PhoneType/restore",
    *     description="Restore a specific PhoneType",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of PhoneType",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored PhoneType",
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
    *     tags={"PhoneType"},
    *     path="api/v1/PhoneType/forceDelete",
    *     description="Remove permanently PhoneType",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of PhoneType",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly PhoneType",
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

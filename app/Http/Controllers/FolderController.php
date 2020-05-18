<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FolderRequest;
use App\Repositories\FolderRepository;

class FolderController extends Controller
{
    protected $repository;
    public function __construct(FolderRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"folder"},
    *     path="api/v1/folder",
    *     description="Return a list with folders",
    *     @OA\Response(
    *         response=200,
    *         description="A list with folders",
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
    *     tags={"folder"},
    *     path="api/v1/folder",
    *     description="Create new folder",
    *     @OA\Response(
    *         response=200,
    *         description="A created folder",
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
    public function store(FolderRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"folder"},
    *     path="api/v1/folder",
    *     description="Return a specific folder",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of folder",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific folder",
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
        $response = $this->repository->withGroups($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"folder"},
    *     path="api/v1/folder",
    *     description="Update a specific folder",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of folder",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated folder",
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
    public function update(FolderRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"folder"},
    *     path="api/v1/folder",
    *     description="Remove a specific folders",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of folder",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted folder",
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
    *     tags={"folder"},
    *     path="api/v1/folder/restore",
    *     description="Restore a specific folder",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of folder",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored folder",
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
    *     tags={"folder"},
    *     path="api/v1/folder/forceDelete",
    *     description="Remove permanently folder",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of folder",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly folder",
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

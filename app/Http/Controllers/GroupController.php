<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Repositories\GroupRepository;

class GroupController extends Controller
{
    protected $repository;
    public function __construct(GroupRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"group"},
    *     path="api/v1/group",
    *     description="Return a list with groups",
    *     @OA\Response(
    *         response=200,
    *         description="A list with groups",
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
    *     tags={"group"},
    *     path="api/v1/group",
    *     description="Create new group",
    *     @OA\Response(
    *         response=200,
    *         description="A created group",
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
    public function store(GroupRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"group"},
    *     path="api/v1/group",
    *     description="Return a specific group",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of group",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific group",
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
        $response = $this->repository->getUsers($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"group"},
    *     path="api/v1/group",
    *     description="Update a specific group",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of group",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated group",
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
    public function update(GroupRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"group"},
    *     path="api/v1/group",
    *     description="Remove a specific groups",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of group",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted group",
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
    *     tags={"group"},
    *     path="api/v1/group/restore",
    *     description="Restore a specific group",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of group",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored group",
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
    *     tags={"group"},
    *     path="api/v1/group/forceDelete",
    *     description="Remove permanently group",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of group",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly group",
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

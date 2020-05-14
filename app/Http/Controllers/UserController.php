<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository;
use App\Repositories\IPRepository;

class UserController extends Controller
{
    protected $repository;
    protected $ip;
    public function __construct(
        UserRepository $repository,
        IPRepository $ip
    )
	{
        $this->repository = $repository;
        $this->ip = $ip;
    }

    /**
    * @OA\Get(
    *     tags={"user"},
    *     path="api/v1/user",
    *     description="Return a list with users",
    *     @OA\Response(
    *         response=200,
    *         description="A list with users",
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
        $response = $this->repository->listUsers();
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"user"},
    *     path="api/v1/user",
    *     description="Create new user",
    *     @OA\Response(
    *         response=200,
    *         description="A created user",
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
    public function store(UserRequest $request)
    {
        $response = $this->repository->create($request->all());
        $ip = $this->ip->useIp($request->ip);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"user"},
    *     path="api/v1/user",
    *     description="Return a specific user",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of user",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific user",
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
    *     tags={"user"},
    *     path="api/v1/user",
    *     description="Update a specific user",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of user",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated user",
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
    public function update(UserRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        if ($response->data) {
            $ip = $this->ip->toogleIp($response->data);
        }
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"user"},
    *     path="api/v1/user",
    *     description="Remove a specific users",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of user",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted user",
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
    *     tags={"user"},
    *     path="api/v1/user/restore",
    *     description="Restore a specific user",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of user",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored user",
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
    *     tags={"user"},
    *     path="api/v1/user/forceDelete",
    *     description="Remove permanently user",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of user",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly user",
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

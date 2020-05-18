<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{
    protected $repository;
    public function __construct(ContactRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"contact"},
    *     path="api/v1/contact",
    *     description="Return a list with contacts",
    *     @OA\Response(
    *         response=200,
    *         description="A list with contacts",
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
    *     tags={"contact"},
    *     path="api/v1/contact",
    *     description="Create new contact",
    *     @OA\Response(
    *         response=200,
    *         description="A created contact",
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
    public function store(ContactRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"contact"},
    *     path="api/v1/contact",
    *     description="Return a specific contact",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of contact",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific contact",
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
        $response = $this->repository->getAll($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"contact"},
    *     path="api/v1/contact",
    *     description="Update a specific contact",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of contact",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated contact",
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
    public function update(ContactRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"contact"},
    *     path="api/v1/contact",
    *     description="Remove a specific contacts",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of contact",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted contact",
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
    *     tags={"contact"},
    *     path="api/v1/contact/restore",
    *     description="Restore a specific contact",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of contact",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored contact",
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
    *     tags={"contact"},
    *     path="api/v1/contact/forceDelete",
    *     description="Remove permanently contact",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of contact",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly contact",
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

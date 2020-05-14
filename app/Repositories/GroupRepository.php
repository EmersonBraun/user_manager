<?php

namespace App\Repositories;

use App\Models\Group;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class GroupRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $obj = [];
    protected $returnType = 'error';
    protected $returnMsg = '';
    protected $returnContent = '';
    protected $statusCode = 400;
    protected $options = 0;
    
	public function __construct( Group $model )
	{
		$this->model = $model;
    }

    public function getUsers($id)
    {
        try{
            $this->obj = $this->model->find($id)->with(['users'])->first();
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
        }
        return $this->mountReturn('load', $this->obj, $this->statusCode, $this->contentError);
    }
}
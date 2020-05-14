<?php

namespace App\Repositories;

use App\Models\Ramal;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class RamalRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $obj = [];
    protected $returnType = 'error';
    protected $returnMsg = '';
    protected $returnContent = '';
    protected $statusCode = 400;
    protected $options = 0;
    
	public function __construct( Ramal $model )
	{
		$this->model = $model;
    }

    public function listIPWithUsers()
    {
        try{
            $this->obj = $this->model
                    ->join('users', 'users.ip_id', '=', 'ip.id')
                    ->get();
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
        }
        return $this->mountReturn('load', $this->obj, $this->statusCode, $this->contentError);
    }

    public function getSectors($id)
    {
        try{
            $this->obj = $this->model->find($id)->with(['sector'])->first();
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
        }
        return $this->mountReturn('load', $this->obj, $this->statusCode, $this->contentError);
    }
}
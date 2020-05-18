<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class UserRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $obj = [];
    protected $returnType = 'error';
    protected $returnMsg = '';
    protected $returnContent = '';
    protected $statusCode = 400;
    protected $options = 0;

	public function __construct( User $model )
	{
		$this->model = $model;
    }

    public function listUsers()
    {
        try{
            $this->obj = $this->model
                    ->selectRaw('users.*, graduations.graduation, sectors.sector')
                    ->join('sectors', 'users.sector_id', '=', 'sectors.id')
                    ->join('graduations', 'users.graduation_id', '=', 'graduations.id')
                    ->get();
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
        }
        return $this->mountReturn('load', $this->obj, $this->statusCode, $this->contentError);
    }

    public function showUser($id)
    {
        try{
            $this->obj = $this->model->find($id)->with(['groups','graduation','sector','contacts'])->first();
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
        }
        return $this->mountReturn('load', $this->obj, $this->statusCode, $this->contentError);
    }
}

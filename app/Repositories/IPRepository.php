<?php

namespace App\Repositories;

use App\Models\IP;
use App\Models\User;
use App\Repositories\BaseRepository;

use App\Traits\ResponseTrait;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class IPRepository extends BaseRepository
{
    use ResponseTrait;

    protected $model;
    protected $obj = [];
    protected $returnType = 'error';
    protected $returnMsg = '';
    protected $returnContent = '';
    protected $statusCode = 400;
    protected $options = 0;
    
	public function __construct( IP $model )
	{
		$this->model = $model;
    }

    public function listIPWithUsers()
    {
        try{
            $this->obj = $this->model
                    ->join('users', 'users.ip', '=', 'ips.ip')
                    ->get();
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
        }
        return $this->mountReturn('load', $this->obj, $this->statusCode, $this->contentError);
    }

    public function useIp($ip)
    {
        try{
            $this->obj = $this->model->where('ip', $ip)->first()->update(['used'=>true]);
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
        }
        return $this->mountReturn('update', $this->obj, $this->statusCode, $this->contentError);
    }

    public function toogleIp($data)
    {
        $oldIp = $data['old']['ip'] ?? false;
        $newIp = $data['new']['ip'] ?? false;
        $ips = ['old' => $oldIp, 'new' => $newIp];
        if ($oldIp == $newIp || !$oldIp || !$newIp) return $this->mountReturn('update', $ips, 200, '');
        else {
            try{
                $ips['old'] = $this->model->where('ip',$oldIp)->first()->update(['used'=>false]);
                $this->statusCode = 200;
            } catch(\Throwable $th) {
                $this->contentError = $th->getMessage();
            }

            try{
                $ips['new'] = $this->model->where('ip',$newIp)->first()->update(['used'=>true]);
                $this->statusCode = 200;
            } catch(\Throwable $th) {
                $this->contentError = $th->getMessage();
            }
            return $this->mountReturn('update', $ips, $this->statusCode, $this->contentError);
        }
    }

    public function showUser($id)
    {
        try{
            $this->obj = $this->model->find($id)->with(['user'])->first();
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->contentError = $th->getMessage();
        }
        return $this->mountReturn('load', $this->obj, $this->statusCode, $this->contentError);
    }
}
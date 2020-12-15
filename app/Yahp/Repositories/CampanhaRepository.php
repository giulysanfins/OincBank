<?php

namespace App\Yahp\Repositories;

use App\Yahp\Models\Campanha;
use Carbon\Carbon;

class CampanhaRepository
{

     /**
     * @var Role
     */
    private $model;

    /**
     * Contato Repository constructor.
     * @param Campanha $campanha
     */
    public function __construct(Campanha $campanha)
    {
        $this->model = $campanha;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getByStatus($status)
    {
        $dateToday = Carbon::now()->format('Y-m-d');
        if($status == 5)
        {
            return $this->model->where('status',2)->where('data_encerramento','<',$dateToday)->get();
        } else {
            return $this->model->where('status',$status)->get();
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getByUser($user_id)
    {
        return $this->model->where('user_id',$user_id)->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getByStatusUser($status,$user_id)
    {
        return $this->model->where('status',$status)->where('user_id',$user_id)->get();
    }

    /**
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data)
    {
        return $this->model->find($id)->fill($data)->save();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }

    public function getBySearch($q)
    {
        return $this->model->where('titulo','LIKE','%'.$q.'%')
        ->orWhere('id','LIKE','%'.$q.'%')->get();
    }


}

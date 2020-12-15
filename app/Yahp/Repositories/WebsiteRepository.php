<?php

namespace App\Yahp\Repositories;

use App\Yahp\Models\Website;

class WebsiteRepository
{

     /**
     * @var Role
     */
    private $model;

    /**
     * Contato Repository constructor.
     * @param Alerta $alerta
     */
    public function __construct(Website $website)
    {
        $this->model = $website;
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
    public function getByPhoto($area,$area_id)
    {
        return $this->model->where('area',$area)->where('area_id',$area_id)->orderBy('created_at','desc')->first();
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
}

<?php

namespace App\Yahp\Repositories;

use App\Yahp\Models\Parameter;

class ParameterRepository 
{

     /**
     * @var Role
     */
    private $model;

    /**
     * Contato Repository constructor.
     * @param Alerta $alerta
     */
    public function __construct(Parameter $parameter)
    {
        $this->model = $parameter;
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
    public function getBySlug($slug)
    {
        return $this->model->where('slug',$slug)->first();
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
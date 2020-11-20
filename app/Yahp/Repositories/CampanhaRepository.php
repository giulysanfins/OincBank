<?php

namespace App\Yahp\Repositories;

use App\Yahp\Models\Campanha;

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

    public function getImageAttribute()
    {

        return $this->url;

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

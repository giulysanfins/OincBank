<?php

namespace App\Yahp\Repositories;

use App\Yahp\Models\User;

class UserRepository 
{

     /**
     * @var Role
     */
    private $model;

    /**
     * Contato Repository constructor.
     * @param Alerta $alerta
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->where('status',"!=",0)->get();
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
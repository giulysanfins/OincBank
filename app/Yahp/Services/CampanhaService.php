<?php

namespace App\Yahp\Services;

use App\Yahp\Repositories\CampanhaRepository;
use App\Yahp\Contracts\ServiceContract;

class CampanhaService implements ServiceContract
{
     /**
     * @var CampanhaRepository
     */
    private $repository;


    /**
     * ClienteService constructor.
     * @param CampanhaRepository $campanhaRepository
     */
    public function __construct(CampanhaRepository $campanhaRepository)
    {
        $this->repository = $campanhaRepository;
    }

    /**
     * @return mixed
     */
    public function renderList()
    {
        return $this->repository->getAll();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function renderEdit($id)
    {
        return $this->repository->getById($id);
    }

    /**
     * @param $status
     * @return mixed
     */
    public function renderByStatus($status)
    {
        return $this->repository->getByStatus($status);
    }

        /**
     * @param $status
     * @return mixed
     */
    public function renderByPaginate($status)
    {
        return $this->repository->getByPaginate($status);
    }


    /**
     * @param $user_id
     * @return mixed
     */
    public function renderByUser($user_id)
    {
        return $this->repository->getByUser($user_id);
    }

    /**
     * @return mixed
     */
    public function renderByIndex()
    {
        return $this->repository->getByIndex();
    }

    /**
     * @param $status
     * @param $user_id
     * @return mixed
     */
    public function renderByStatusUser($status,$user_id)
    {
        return $this->repository->getByStatusUser($status,$user_id);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function buildUpdate($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function buildInsert($data)
    {
        return $this->repository->create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function buildDelete($id)
    {
        return $this->repository->delete($id);
    }


        /**
     * @param $q - request vinda do formulario;
     * @return mixed
     */
    public function renderBySearch($q)
    {
        return $this->repository->getBySearch($q);
    }


}

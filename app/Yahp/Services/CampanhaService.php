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

    public function renderByStatus($status)
    {
        return $this->repository->getByStatus($status);
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
        $account = $this->repository->create($data);
        return $account;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function buildDelete($id)
    {
        return $this->repository->delete($id);
    }
}

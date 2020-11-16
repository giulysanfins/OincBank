<?php

namespace App\Yahp\Services;

use App\Yahp\Repositories\AlertaRepository;
use App\Yahp\Contracts\ServiceContract;

class CampanhaService implements ServiceContract
{
     /**
     * @var AlertaRepository
     */
    private $repository;
    
    
    /**
     * ClienteService constructor.
     * @param AlertaRepository $clienteRepository
     */
    public function __construct(AlertaRepository $alertaRepository)
    {
        $this->repository = $alertaRepository;
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
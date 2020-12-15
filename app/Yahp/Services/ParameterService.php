<?php

namespace App\Yahp\Services;

use App\Yahp\Contracts\ServiceContract;
use App\Yahp\Repositories\ParameterRepository;

class ParameterService implements ServiceContract
{
     /**
     * @var ParameterRepository
     */
    private $repository;
    
    /**
     * ClienteService constructor.
     * @param ParameterRepository $parameterRepository
     */
    public function __construct(ParameterRepository $parameterRepository)
    {
        $this->repository = $parameterRepository;
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
     * @return mixed
     */
    public function renderBySlug($slug)
    {
        return $this->repository->getBySlug($slug);
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
}
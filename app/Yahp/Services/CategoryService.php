<?php

namespace App\Yahp\Services;

use App\Yahp\Repositories\CategoryRepository;
use App\Yahp\Contracts\ServiceContract;

class CategoryService implements ServiceContract
{
     /**
     * @var PhotoRepository
     */
    private $repository;
    
    
    /**
     * ClienteService constructor.
     * @param ategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->repository = $categoryRepository;
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
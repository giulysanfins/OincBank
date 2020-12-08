<?php

namespace App\Yahp\Services;

use App\Yahp\Contracts\ServiceContract;

use App\Yahp\Repositories\WebsiteRepository;


class WebsiteService implements ServiceContract
{
     /**
     * @var WebsiteRepository
     */
    private $repository;

    /**
     * ClienteService constructor.
     * @param WebsiteRepository $clienteRepository
     */
    public function __construct(WebsiteRepository $websiteRepository)
    {
        $this->repository = $websiteRepository;
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

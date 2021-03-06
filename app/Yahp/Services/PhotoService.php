<?php

namespace App\Yahp\Services;

use App\Yahp\Repositories\PhotoRepository;
use App\Yahp\Contracts\ServiceContract;

class PhotoService implements ServiceContract
{
     /**
     * @var PhotoRepository
     */
    private $repository;
    
    
    /**
     * ClienteService constructor.
     * @param PhotoRepository $photoRepository
     */
    public function __construct(PhotoRepository $photoRepository)
    {
        $this->repository = $photoRepository;
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
    public function renderPhotoUser($area,$area_id)
    {
        return $this->repository->firstByPhoto($area,$area_id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function renderByCampanha($area_id)
    {
        return $this->repository->getByPhoto('campanha',$area_id);
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
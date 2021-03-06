<?php

namespace App\Yahp\Services;

use App\Yahp\Repositories\PaymentRepository;
use App\Yahp\Contracts\ServiceContract;

class PaymentService implements ServiceContract
{
     /**
     * @var PhotoRepository
     */
    private $repository;
        
    /**
     * ClienteService constructor.
     * @param PaymentRepository $paymentRepository
     */
    public function __construct(PaymentRepository $paymentRepository)
    {
        $this->repository = $paymentRepository;
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
    public function renderByCampanha($campanha_id)
    {
        return $this->repository->getByCampanha($campanha_id);
    }
    
    /**
     * @param $id
     * @return mixed
     */
    public function renderByUser($user_id)
    {
        return $this->repository->getByUser($user_id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function renderByStatus($status_id)
    {
        return $this->repository->getByStatus($status_id);
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
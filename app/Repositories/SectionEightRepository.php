<?php

namespace App\Repositories;

use App\Models\SectionEight;
use App\Repositories\Interfaces\SectionEightRepositoryInterface;

class SectionEightRepository implements SectionEightRepositoryInterface
{

    protected $model;

    public function __construct(SectionEight $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        return $this->model->find($id)->update($data);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}

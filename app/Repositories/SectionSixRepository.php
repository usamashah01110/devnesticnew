<?php

namespace App\Repositories;

use App\Repositories\Interfaces\SectionSixRepositoryInterface;
use App\Models\SectionSix;

class SectionSixRepository implements SectionSixRepositoryInterface
{
    protected $model;

    public function __construct(SectionSix $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }
    public function find($id)
    {
        return $this->model->find($id);
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function update($id, array $data)
    {
        return $this->model->find($id)->update($data);
    }
    public function delete($id) {
        return $this->model->find($id)->delete();
    }
}

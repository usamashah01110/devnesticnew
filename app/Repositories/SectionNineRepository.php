<?php

namespace App\Repositories;

use App\Repositories\Interfaces\SectionNineRepositoryInterface;
use App\Models\SectionNine;

class SectionNineRepository implements SectionNineRepositoryInterface
{
    protected $model;

    public function __construct(SectionNine $model)
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
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
    public function find($id)
    {
        return $this->model->find($id);
    }
}

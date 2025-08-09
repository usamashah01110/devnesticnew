<?php

namespace App\Repositories;

use App\Models\SectionFive;
use App\Repositories\Interfaces\SectionFiveRepositoryInterface;

class SectionFiveRepository implements SectionFiveRepositoryInterface
{

    protected $model;

    public function __construct(SectionFive $model)
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

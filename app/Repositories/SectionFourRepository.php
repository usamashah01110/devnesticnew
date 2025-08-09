<?php

namespace App\Repositories;

use App\Models\SectionFour;
use App\Repositories\Interfaces\SectionFourRepositoryInterface;

class SectionFourRepository implements SectionFourRepositoryInterface
{

    protected $model;

    public function __construct(SectionFour $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->model->finf($id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->latest()->get();
    }
}

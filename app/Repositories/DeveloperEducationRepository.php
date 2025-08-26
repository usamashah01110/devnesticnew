<?php

namespace App\Repositories;

use App\Models\DeveloperEducation;
use App\Repositories\Interfaces\DeveloperEducationInterface;

class DeveloperEducationRepository implements DeveloperEducationInterface
{

    protected $model;
    public function __construct(DeveloperEducation $model)
    {
        $this->model = $model;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function all()
    {
        return $this->model->all();
    }
    public function update($id, array $data)
    {
        return $this->model->find($id)->update($data);
    }
}

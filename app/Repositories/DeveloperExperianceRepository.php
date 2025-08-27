<?php

namespace App\Repositories;

use App\Repositories\Interfaces\DeveloperExperianceInterface;
use App\Models\DeveloperExperiance;

class DeveloperExperianceRepository implements DeveloperExperianceInterface
{
    protected $model;

    public function __construct(DeveloperExperiance $model)
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
    public function update($id, array $data) {
        return $this->model->find($id)->update($data);
    }
    public function find($id) {
        return $this->model->find($id);
    }
    public function delete($id) {
        return $this->model->find($id)->delete();
    }
}

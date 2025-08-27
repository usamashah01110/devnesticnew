<?php

namespace App\Repositories;

use App\Models\DeveloperContact;
use App\Repositories\Interfaces\DeveloperContactInterface;

class DeveloperContactRepository implements DeveloperContactInterface
{

    protected $model;

    public function __construct(DeveloperContact $model)
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
    public function update($id, $data)
    {
        return $this->model->find($id)->create($data);
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

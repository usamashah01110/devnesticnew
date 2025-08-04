<?php
namespace App\Repositories;

use App\Models\SectionOne;
use App\Repositories\Interfaces\SectionOneRepositoryInterface;

class SectionOneRepository implements SectionOneRepositoryInterface
{
    protected $model;

    public function __construct(SectionOne $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->latest()->get();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, array $data)
    {
        $record = $this->find($id);
        $record->update($data);
        return $record;
    }

    public function delete($id)
    {
        return $this->find($id)->delete();
    }
}

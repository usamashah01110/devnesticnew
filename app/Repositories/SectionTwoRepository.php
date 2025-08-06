<?php

namespace App\Repositories;

use App\Repositories\Interfaces\SectionTwoRepositoryInterface;
use App\Models\Sectiontwo;

class SectionTwoRepository implements SectionTwoRepositoryInterface
{
    protected $model;

    public function __construct(Sectiontwo $sectiontwo)
    {
        $this->model = $sectiontwo;
    }

    public function all()
    {
        return $this->model->latest()->get();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $record = $this->find($id);
        $record->update($data);
        return $record;
    }

    public function find($id)
    {
        return $this->find($id);
    }

    public function delete($id)
    {
        return $this->find($id)->delete();
    }

}

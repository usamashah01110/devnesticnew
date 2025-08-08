<?php
namespace App\Repositories;

use App\Models\SectionThree;
use App\Repositories\Interfaces\SectionThreeRepositoryInterface;


class SectionThreeRepository implements SectionThreeRepositoryInterface
{
    protected $model;

    public function __construct(SectionThree $model) {
        $this->model = $model;
    }

    public function all() {
        return $this->model->all();
    }

    public function create(array $data) {
        return $this->model->create($data);
    }

    public function update($id, array $data) {
        $record = $this->model->find($id);
        $record->update($data);
        return $record;
    }

    public function delete($id) {
        $record = $this->model->find($id)->delete();
    }


}


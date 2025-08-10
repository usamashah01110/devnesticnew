<?php

namespace App\Repositories\Interfaces;

interface SectionSevenRepositoryInterface {
    public function create(array $data);
    public function update( $id, array $data);
    public function find($id);
    public function delete($id);
    public function all();
}
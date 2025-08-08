<?php 

namespace App\Repositories\Interfaces;

interface SectionFourRepositoryInterface {

public function create(array $data);
public function update(array $data, $id);
public function delete($id);
public function find($id);
public function all();
}
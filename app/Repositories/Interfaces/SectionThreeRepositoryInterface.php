<?php

namespace App\Repositories\Interfaces;


interface SectionThreeRepositoryInterface
{
public function all();
public function create(array $data);
public function delete($data);
public function update($id, array $data);
public function find($id);

}

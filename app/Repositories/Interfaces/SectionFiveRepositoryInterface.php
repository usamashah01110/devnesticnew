<?php

namespace App\Repositories\Interfaces;

interface SectionFiveRepositoryInterface
{
    // create
    public function create(array $data);
    // update
    public function update($id, array $data);
    // all
    public function all();
    // delete
    public function delete($id);
    // find
    public function find($id);
}

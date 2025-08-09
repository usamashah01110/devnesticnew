<?php

namespace App\Repositories\Interfaces;

interface SectionSixRepositoryInterface {
    public function all();
    public function find($id);  
    public function delete($id);  
    public function create(array $data);  
    public function update($id, array $data);  
}
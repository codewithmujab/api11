<?php

namespace App\Interfaces;
//php artisan make:interface /Interfaces/ProductRepositoryInterface
interface ProductRepositoryInterface
{
    //
    public function index();
    public function getById($id);
    public function store(array $data);
    public function update(array $data, $id);
    public function delete($id);
}

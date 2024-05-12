<?php
//php artisan make:interface UserRepositoryInterface
namespace App\Interfaces;

interface UserRepositoryInterface
{
    //
    public function all();
    //public function getById($id);
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
    public function find($id);
}

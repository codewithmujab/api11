<?php

namespace App\Repositories;
//repositories langsung mengakses model
//Kelas ini mengimplementasikan metode yang ditentukan dalam UserRepositoryInterface. 
//Ia berinteraksi dengan model Pengguna untuk melakukan operasi CRUD
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return User::all();
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function update(array $data, $id)
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }

    public function find($id)
    {
        return User::findOrFail($id);
    }
}

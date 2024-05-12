<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{
    //
    private UserRepositoryInterface $userRepositoryInterface;

    public function __construct(UserRepositoryInterface $userRepositoryInterface)
    {
        $this->userRepositoryInterface = $userRepositoryInterface;
    }

    public function index()
    {
        $users = $this->userRepositoryInterface->all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->validate([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        $user = $this->userRepositoryInterface->create($data);

        return redirect()->route('users.show', $user->id);
    }

    public function show($id)
    {
        $user = $this->userRepositoryInterface->find($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = $this->userRepositoryInterface->find($id);
        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $data = $request->validate([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $user = $this->userRepositoryInterface->update($id, $data);

        return redirect()->route('users.show', $user->id);
    }

    public function destroy($id)
    {
        $this->userRepositoryInterface->delete($id);
        return redirect()->route('users.index');
    }
}

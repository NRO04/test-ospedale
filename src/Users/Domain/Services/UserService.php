<?php

namespace Ospedale\Users\Domain\Services;

use App\Models\Users\Users;
use Illuminate\Database\Eloquent\Model;
use Ospedale\Users\Domain\Repository\UserRepository;

class UserService implements UserRepository
{
    protected Model $model;

    function __construct()
    {
        $this->model = new Users();
    }

    function create(array $data)
    {
        return $this->model->create($data);
    }

    function delete(Users $user)
    {
        return $user->delete();
    }

    function update(Users $user, array $data)
    {
        return $user->update($data);
    }

    function all()
    {
        return $this->model->all();
    }

    function findById(int $id)
    {
        return $this->model->get($id);
    }

}

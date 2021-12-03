<?php

namespace Ospedale\Users\Domain\Services;

use App\Models\Users\Users;
use Illuminate\Database\Eloquent\Model;
use Ospedale\Users\Domain\Repository\UserRepository;

class UserService implements UserRepository
{
    protected Model $model;
    protected array $relations;

    function __construct()
    {
        $this->relations = ['rol', 'eps'];
        $this->model = new Users();
    }

    function create(array $data)
    {
        return $this->model->create($data);
    }

    function delete(Model $user)
    {
        return $user->delete();
    }

    function update(Model $user, array $data)
    {
        return $user->update($data);
    }

    function all()
    {
        $query = $this->model;
        if (!empty($this->relations)) {
            $query = $query->with($this->relations);
        }

        return $query->get();
    }

    function findById(int $id)
    {
        return $this->model->find($id);
    }

}

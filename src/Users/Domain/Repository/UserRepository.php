<?php

namespace Ospedale\Users\Domain\Repository;

use App\Models\Users\Users;
use Illuminate\Database\Eloquent\Model;

interface UserRepository
{
    function create(array $data);

    function delete(Model $user);

    function update(Model $user, array $data);

    function all();

    function findById(int $id);
}

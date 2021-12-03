<?php

namespace Ospedale\Users\Domain\Repository;

use App\Models\Users\Users;

interface UserRepository
{
    function create(array $data);

    function delete(Users $user);

    function update(Users $user, array $data);

    function all();

    function findById(int $id);
}

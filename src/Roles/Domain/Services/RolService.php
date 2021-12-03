<?php

namespace Ospedale\Roles\Domain\Services;

use App\Models\Roles\Roles;
use App\Models\Users\Users;
use Illuminate\Database\Eloquent\Model;
use Ospedale\Roles\Domain\Repository\RolRepository;

class RolService implements RolRepository
{
    protected Model $model;

    function __construct()
    {
        $this->model = new Roles();
    }

    function create(array $data): array
    {
        return $this->model->create($data)->toArray();
    }

    function all(): array
    {
        return $this->model->all()->toArray();
    }


}

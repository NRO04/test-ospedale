<?php

namespace Ospedale\Eps\Domain\Services;

use App\Models\Eps\Eps;
use Illuminate\Database\Eloquent\Model;
use Ospedale\Eps\Domain\Repository\EpsRepository;

class EpsService implements EpsRepository
{
    protected Model $model;

    function __construct()
    {
        $this->model = new Eps();
    }

    function create(array $data)
    {
        return $this->model->create($data);
    }

    function all(): array
    {
        return $this->model->all()->toArray();
    }
}

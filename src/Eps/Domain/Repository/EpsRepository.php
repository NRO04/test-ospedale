<?php

namespace Ospedale\Eps\Domain\Repository;

interface EpsRepository
{
    function create(array $data);

    function all(): array;
}

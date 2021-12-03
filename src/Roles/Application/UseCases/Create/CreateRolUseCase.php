<?php

namespace Ospedale\Roles\Application\UseCases\Create;

use Ospedale\Roles\Domain\Repository\RolRepository;
use Ro\DtoPhp\Infrastructure\DTO;
use Ro\HexUseCaseOrchestrator\Domain\Repository\UseCaseRepository;

class CreateRolUseCase
{
    protected RolRepository $rolRepository;

    public function __construct(RolRepository $repository)
    {
        $this->rolRepository = $repository;
    }

    function execute(DTO $dto): array
    {
        return $this->rolRepository->create($dto->extractDto());
    }


}


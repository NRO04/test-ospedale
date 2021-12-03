<?php

namespace Ospedale\Roles\Application\UseCases\All;

use Ospedale\Roles\Domain\Repository\RolRepository;
use Ro\DtoPhp\Infrastructure\DTO;
use Ro\HexUseCaseOrchestrator\Domain\Repository\UseCaseRepository;

class AllRolesUseCase implements UseCaseRepository
{

    protected RolRepository $rolRepository;

    public function __construct(RolRepository $rolRepository)
    {
        $this->rolRepository = $rolRepository;
    }

    function execute(DTO $dto = null): array
    {
        return $this->rolRepository->all();
    }


}

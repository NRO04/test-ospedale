<?php

namespace Ospedale\Eps\Application\UseCases\All;

use Ospedale\Eps\Domain\Repository\EpsRepository;
use Ro\DtoPhp\Infrastructure\DTO;
use Ro\HexUseCaseOrchestrator\Domain\Repository\UseCaseRepository;

class AllEpsUseCase implements UseCaseRepository
{
    protected EpsRepository $epsRepository;

    public function __construct(EpsRepository $epsRepository)
    {
        $this->epsRepository = $epsRepository;
    }

    function execute(DTO $dto = null): array
    {
        return $this->epsRepository->all();
    }

}

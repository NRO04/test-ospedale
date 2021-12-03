<?php

namespace Ospedale\Eps\Application\UseCases\Create;

use Ospedale\Eps\Domain\Repository\EpsRepository;
use Ro\DtoPhp\Infrastructure\DTO;
use Ro\HexUseCaseOrchestrator\Domain\Repository\UseCaseRepository;

class CreateEpsUseCase implements UseCaseRepository
{

    protected EpsRepository $epsRepository;

    function __construct(EpsRepository $epsRepository)
    {
        $this->epsRepository = $epsRepository;
    }

    function execute(DTO $dto = null): mixed
    {
        return $this->epsRepository->create($dto->extractDto());
    }

}

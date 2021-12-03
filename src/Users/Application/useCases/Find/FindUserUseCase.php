<?php

namespace Ospedale\Users\Application\useCases\Find;

use Ospedale\Users\Domain\Repository\UserRepository;
use Ro\DtoPhp\Infrastructure\DTO;
use Ro\HexUseCaseOrchestrator\Domain\Repository\UseCaseRepository;

class FindUserUseCase implements UseCaseRepository
{
    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function execute(DTO $dto = null): mixed
    {
        return $this->userRepository->findById($dto->get('id'));
    }
}

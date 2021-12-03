<?php

namespace Ospedale\Users\Application\useCases\Delete;

use Ospedale\Users\Application\useCases\Find\FindUserUseCase;
use Ospedale\Users\Domain\Repository\UserRepository;
use Ro\DtoPhp\Infrastructure\DTO;
use Ro\HexUseCaseOrchestrator\Domain\Repository\UseCaseRepository;

class DeleteUserUseCase implements UseCaseRepository
{
    protected UserRepository $userRepository;
    protected UseCaseRepository $finder;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->finder = new FindUserUseCase($this->userRepository);
    }

    function execute(DTO $dto = null): mixed
    {
        $record = $this->finder->execute($dto);
        return $this->userRepository->delete($record);
    }
}

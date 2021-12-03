<?php

namespace Ospedale\Users\Application\useCases\All;

use App\Models\Users\Users;
use Ospedale\Users\Domain\Repository\UserRepository;
use Ro\DtoPhp\Infrastructure\DTO;
use Ro\HexUseCaseOrchestrator\Domain\Repository\UseCaseRepository;

class AllUsersUseCase implements UseCaseRepository
{
    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function execute(DTO $dto = null): mixed
    {
        return $this->userRepository->all();
    }

}

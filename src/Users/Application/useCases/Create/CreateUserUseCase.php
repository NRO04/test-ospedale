<?php

namespace Ospedale\Users\Application\useCases\Create;

use Ospedale\Users\Domain\Repository\UserRepository;
use Ro\DtoPhp\Infrastructure\DTO;
use Ro\HexUseCaseOrchestrator\Domain\Repository\UseCaseRepository;

class CreateUserUseCase implements UseCaseRepository
{

    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function execute(DTO $dto = null): mixed
    {
        $password = $dto->get('password');
        $dto->set([
            'password' => $this->hashPassword($password)
        ]);

        return $this->userRepository->create($dto->extractDto());
    }

    function hashPassword($password): string
    {
        return bcrypt($password);
    }


}

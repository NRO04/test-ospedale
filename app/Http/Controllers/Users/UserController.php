<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Users\Users;
use Illuminate\Http\Request;
use Ospedale\Eps\Application\UseCases\Create\CreateEpsUseCase;
use Ospedale\Eps\Domain\Services\EpsService;
use Ospedale\Users\Application\useCases\All\AllUsersUseCase;
use Ospedale\Users\Application\useCases\Create\CreateUserUseCase;
use Ospedale\Users\Application\useCases\Delete\DeleteUserUseCase;
use Ospedale\Users\Application\useCases\Update\UpdateUserUseCase;
use Ospedale\Users\Domain\Services\UserService;
use Ro\DtoPhp\Domain\Services\DtoMappingService;
use Ro\DtoPhp\Infrastructure\DTO;

class UserController extends Controller
{


    function index()
    {
        try {
            return Users::all();
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 400);
        }
    }

    function create(Request $request)
    {
        try {
            $use_case = new CreateUserUseCase(userRepository: new UserService());
            $data = $use_case->execute(new DTO(new DtoMappingService($request->all())));
            return response()->json(['status' => 'success', 'data' => $data], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 400);
        }
    }

    function all()
    {
        try {
            $use_case = new AllUsersUseCase(userRepository: new UserService());
            $data = $use_case->execute();
            return response()->json(['status' => 'success', 'data' => $data], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 400);
        }
    }

    function delete(Request $request)
    {
        try {
            $use_case = new DeleteUserUseCase(userRepository: new UserService());
            $data = $use_case->execute(dto: new DTO(mapper: new DtoMappingService(values: $request->all())));
            return response()->json(['status' => 'success', 'data' => $data], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 400);
        }
    }

    function update(Request $request)
    {
        try {
            $use_case = new UpdateUserUseCase(userRepository: new UserService());
            $data = $use_case->execute(dto: new DTO(mapper: new DtoMappingService(values: $request->all())));
            return response()->json(['status' => 'success', 'data' => $data], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 400);
        }
    }

}

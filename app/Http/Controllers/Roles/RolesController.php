<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use App\Models\Roles\Roles;
use Illuminate\Http\Request;
use Ospedale\Roles\Application\UseCases\All\AllRolesUseCase;
use Ospedale\Roles\Application\UseCases\Create\CreateRolUseCase;
use Ospedale\Roles\Domain\Services\RolService;
use Ro\DtoPhp\Domain\Services\DtoMappingService;
use Ro\DtoPhp\Infrastructure\DTO;

class RolesController extends Controller
{
    function index()
    {
        try {
            $use_case = new AllRolesUseCase(rolRepository: new RolService());
            $data = $use_case->execute();
            return response()->json(['data' => $data], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    function create(Request $request)
    {
        try {
            $dto = new DTO(new DtoMappingService($request->all()));
            $use_case = new CreateRolUseCase(repository: new RolService());
            $data = $use_case->execute($dto);
            return response()->json(['data' => $data], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}

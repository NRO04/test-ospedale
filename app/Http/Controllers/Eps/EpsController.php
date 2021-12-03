<?php

namespace App\Http\Controllers\Eps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ospedale\Eps\Application\UseCases\All\AllEpsUseCase;
use Ospedale\Eps\Application\UseCases\Create\CreateEpsUseCase;
use Ospedale\Eps\Domain\Services\EpsService;
use Ospedale\Roles\Application\UseCases\Create\CreateRolUseCase;
use Ospedale\Roles\Domain\Services\RolService;
use Ro\DtoPhp\Domain\Services\DtoMappingService;
use Ro\DtoPhp\Infrastructure\DTO;

class EpsController extends Controller
{
    function index()
    {
        try {

            $use_case = new AllEpsUseCase(epsRepository: new EpsService());
            $data = $use_case->execute();
            return response()->json($data, 200);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    function create(Request $request)
    {
        try {
            $dto = new DTO(new DtoMappingService($request->all()));
            $use_case = new CreateEpsUseCase(epsRepository: new EpsService());
            $data = $use_case->execute($dto);
            return response()->json($data, 200);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


}

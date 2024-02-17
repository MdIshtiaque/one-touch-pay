<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestAppRegister;
use App\Services\AppRegisterService;
use Exception;
use Illuminate\Http\JsonResponse;

class AppRegisterController extends Controller
{
    public function appRegister(RequestAppRegister $request): JsonResponse
    {
        try {
            $appRegisterService = new AppRegisterService();
            $appRegisterData = $appRegisterService->appRegister($request);
        }catch (Exception $exception) {
            return sendErrorResponse("Something Went Wrong : ". $exception->getMessage());
        }

        return sendSuccessResponse('Application Registered Successfully', 200, $appRegisterData);
    }

    public function appEdit(RequestAppRegister $request): JsonResponse
    {
        try {
            $appRegisterService = new AppRegisterService();
            $appRegisterService->appEdit($request);
        }catch (Exception $exception) {
            return sendErrorResponse($exception->getMessage(), 400);
        }
        return sendSuccessResponse('Application Update Successfully', 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ApplicationKey;
use App\Services\ApplicationService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function getApplication(Request $request): JsonResponse
    {
        try {
            $applicationService = new ApplicationService();
            $application = $applicationService->getApplication($request);
        } catch (Exception $exception) {
            return sendErrorResponse("Something Went Wrong: ". $exception->getMessage());
        }
        return sendSuccessResponse('Application Found Successfully', 200, $application);

    }

    public function deleteApplication(Request $request)
    {
        try {
            $applicationKey = ApplicationKey::where('key', $request->header('App-Key'))->first();
            $application = Application::with('businessCategoryType.applicationTransactionUrl', 'config')->where('id', $applicationKey->application_id)->first();
            $application->delete();
        }catch (Exception $exception) {
            return sendErrorResponse("Something Went Wrong: ". $exception->getMessage());
        }
        return sendSuccessResponse('Application Deleted Successfully', 200);
    }
}

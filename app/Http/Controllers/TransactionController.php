<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestTransaction;
use App\Models\Transaction;
use App\Services\TransactionService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transaction(RequestTransaction $request): JsonResponse
    {
        try {
            $transactionService = new TransactionService();
            $response = $transactionService->transaction($request);
        }catch (Exception $exception) {
            return sendErrorResponse("Something Went Wrong". $exception->getMessage());
        }
        return sendSuccessResponse('Sslcommerze Called Successfully', 200, $response);
    }

    public function UpdateStatus(Request $request, $tranId): JsonResponse
    {
        try {
            $transaction = Transaction::where('tran_id', $tranId)->first();

            if ($request->status === 'success') {
                $status = Transaction::SUCCESSFUL;
            }elseif ($request->status === 'failed' || $request->status === 'fail') {
                $status = Transaction::FAILED;
            }elseif ($request->status === 'canceled' || $request->status === 'cancel') {
                $status = Transaction::CANCEL;
            }else {
                $status = 'UNKNOWN';
            }
            if ($transaction) {
                $transaction->update([
                    'status' => $status
                ]);
            }else {
                throw new Exception('Transaction id not found');
            }
        }catch (Exception $exception) {
            return sendErrorResponse("Something Went Wrong: ". $exception->getMessage());
        }
        return sendSuccessResponse('Transaction Status Updated Successfully', 200);
    }
}

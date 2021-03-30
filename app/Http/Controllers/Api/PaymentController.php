<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    public function getPayment()
    {
        return response()->json(Payment::all(),200);
    }

    public function storePayment(Request $request)
    {
        $insertPayment = new Payment;
        $insertPayment->payment_name = $request->payment;
        $insertPayment->save();
        return response([
            'status' => 'OK',
            'message' => 'Simpan data berhasil',
            'data' => $insertPayment
        ], 200);
    }

    public function updatePayment(Request $request, $id)
    {
        /// check data
        $payment = Payment::find($id);
        if($payment) {
            $payment->payment_name = $request->payment;
            $payment->save();
            return response([
                'status' => 'OK',
                'message' => 'Ubah data berhasil',
                'update-data' => $payment
            ], 200);
        } else {
            return response([
                'status' => 'error',
                'message' => 'Data tidak ada'
            ], 404);
        }
    }

    public function deletePayment($id)
    {
        $payment = Payment::find($id);
        if($payment) {
            Payment::destroy($id);
            return response([
                'status' => 'OK',
                'message' => 'Hapus data berhasil'
            ], 200);
        } else {
            return response([
                'status' => 'error',
                'message' => 'Data tidak ada'
            ], 404);
        }
    }
}

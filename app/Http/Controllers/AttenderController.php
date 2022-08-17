<?php

namespace App\Http\Controllers;

use App\Mail\SendComfirmationRegistrationEmail;
use App\Mail\SendRegistrationEmail;
use App\Models\Attender;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class AttenderController extends Controller
{
    //
    public function index()
    {
        $allAttenders = Attender::all(['firstName', 'lastName', 'email', 'organisation','jobTitle', 'companyAddress', 'phoneNumber', 'country']);

        return \response()->json($allAttenders);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'firstName' => 'required|string', 
            'lastName' => 'required|string', 
            'email' => 'required|string|email:rfc,dns', 
            'organisation' => 'required|string',
            'jobTitle' => 'required|string', 
            'companyAddress' => 'required|string', 
            'phoneNumber' => 'required|string', 
            'country' => 'required|string',
            // 'paymentProof'=> 'file|mimes:pdf,jpg,jpeg,png'
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()->all()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        // $path = $request->paymentProof->store('proofs');

        try {

            DB::transaction(function () use ($request) {

                Attender::create([
                    'firstName' => $request->firstName,
                    'lastName' => $request->lastName,
                    'email' => $request->email,
                    'organisation' => $request->organisation,
                    'jobTitle' => $request->jobTitle,
                    'companyAddress' => $request->companyAddress,
                    'phoneNumber' => $request->phoneNumber,
                    'country' => $request->country,
                    // 'paymentProof'=>  $request->paymentProof->store('proofOfPayments')
                ]);
            });

            $fullName = "$request->firstName  $request->lastName";

            Mail::to("info@kiac.org.rw")->send(new SendComfirmationRegistrationEmail(
                $request->firstName, 
                $request->lastName, 
                $request->email, 
                $request->organisation, 
                $request->jobTitle, 
                $request->companyAddress, 
                $request->phoneNumber,
                $request->country
            ));
            
            return \response()->json(['success' => true]);

        } catch (\Exception $exception) {

            dd($exception);

            Log::error('System error, contact support', [
                "userEmail" => $request->email,
                "file" => __FILE__,
                "exception_file" => $exception->getFile(),
                "line" => $exception->getLine(),
                "message" => $exception->getMessage(),
                "trace" => $exception->getTrace()
            ]);

            return \response()->json(['message' => 'System error, contact support', 'errors' => $exception->getLine()],
                Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

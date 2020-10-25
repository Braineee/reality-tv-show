<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\Transaction\TransactionRepositoryInterface;

class UserController extends Controller
{
    protected $_userRepository;
    protected $_transactionRepository;

    public function __construct(
        UserRepositoryInterface $userRepositoryInterface, 
        TransactionRepositoryInterface $transactionRepository
    ) 
    {
        $this->_userRepository = $userRepositoryInterface;
        $this->_transactionRepository = $transactionRepository;
    }

    public function index()
    {
        
    }

    public function createUser(CreateUserRequest $request)
    {
        try {
            // Extract the request data
            $request = json_decode(request()->getContent());
            // Assign a default role of user
            $request = $request->role = 'user';
            // Create the user 
            $newUser = $this->_userRepository->CreateUser($request);
            // Return response
            if ($newUser) return response()->json(['message'=>'request was successfull', 'error'=>'false', 'data'=>$newUser]);
        } catch (Exception $e) {
            return response()->json(['message'=>'request was not successfull', 'error'=>'true', 'data'=>$e ], 422);
        }
    }

    public function createContestant(CreateUserRequest $request)
    {
        try {
            // Extract the request data
            $request = json_decode(request()->getContent());
            // Assign a default role of contestant
            $request->role = 'contestant';
            // Create the user 
            $newUser = $this->_userRepository->CreateUser($request);
            // Define the transaction details
            /**
             * If you wish to add payment to the other create user types
             * copy the line 61-63 codew and place them in the other 
             * create methods immediatly ather the $newUser = $this->_userRepository->CreateUser($request); line of code
             * and change the $transactionData array values
             */
            if ($newUser) $transactionData = array('amount' => env('CONTESTANT_REG_AMOUNT'), 'payment_description' => "Contestant Registration", 'user_uuid' => $newUser->getKey());
            // Create new transaction for the user
            if ($newUser) $newTransaction = $this->_transactionRepository->CreateTransaction($transactionData);

            // Return response data
            if ($newTransaction && $newUser) return response()->json(['message'=>'Request was successfull', 'error'=>'false', 'data'=>$newUser]);
        } catch (Exception $e) {
            return response()->json(['message'=>'Request was not successfull', 'error'=>'true', 'data'=>$e ], 422);
        }
    }

    public function createVoter(CreateUserRequest $request)
    {
        try {
            // Extract the request data
            $request = json_decode(request()->getContent());
            // Assign a default role of contestant
            $request = $request->role = 'voter';
            // Create the user 
            $newUser = $this->_userRepository->CreateUser($request);
            // Return response
            if ($newUser) return response()->json(['message'=>'request was successfull', 'error'=>'false', 'data'=>$newUser]);
        } catch (Exception $e) {
            return response()->json(['message'=>'request was not successfull', 'error'=>'true', 'data'=>$e ], 422);
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

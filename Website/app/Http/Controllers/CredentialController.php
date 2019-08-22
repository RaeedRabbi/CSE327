<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Validator;
use DB;

class CredentialController extends Controller
{
    public function saveUser (Request $request)
    {


        $rules = [
            'name' => 'required| min:3',
            'email' => 'required | email | unique:users,email',
            //'phone' => 'required | numeric',
            //'address' => 'required',
            'password' => 'required | min:2',
            'confirm_password' => 'required | same:password',

        ];

        $messages = [
            'name.required' => 'Name is required!',
            //'name.unique' => 'This name already has taken.',
            'email.required' => 'Email is required!',
            'email.unique' => 'This Email already has taken.',
            //'phone.required' => 'Phone is required!',
            //'address.required' => 'Address is required!',
            'password.required'=> 'PassWord is required',
            'password.min' => 'password needs at least 2 character',
            'confirm_password.required'=> 'ReEnter PassWord',
            'confirm_password.same'=> 'PassWord Did not match',

        ];

        $validation = Validator::make($request->all(), $rules, $messages);

        // redirect on validation error
        if ($validation->fails()) {
            $errorMsgString = implode("<br/>",$validation->messages()->all());
            return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
        }

        DB::beginTransaction();

        try {

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            //$userMiddleware->phone = $request->phone;
            //$userMiddleware->address = $request->address;
            $user->password = Hash::make($request->password);
            $user->id_user_roles=0;


            if($user->save()){
                DB::commit();
                return Response::json(array('success' => TRUE, 'data' => $user), 200);
            }

            else{

                DB::rollback();
                return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'User could can not be created!'), 400);

            }

        }

        catch (\Exception $e) {
            echo $e;
            DB::rollback();
            return Response::json(array('success' => FALSE, 'heading' => 'Insertion Failed', 'message' => 'User could can not be created!'), 400);
        }


    }

    public function login (Request $request)
    {

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $token = Auth::user()->createToken('TutsForWeb')->accessToken;
            $userinfo= $request->user();
            //$name= $request->user()->name;
            //$email= $request->user()->email;
            //$id_user_role= $request->user()->id_user_roles;
            // var_dump($token);
            return response()->json(['message'=>'Success','token' => $token, 'user' => $userinfo], 200);
        } else {
            return response()->json(['heading' => 'Access Denied', 'message' => 'Invalid email or password'], 401);
        }

        /*if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);*/
    }

}

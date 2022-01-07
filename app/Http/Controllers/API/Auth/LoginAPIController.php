<?php
   
namespace App\Http\Controllers\API\Auth;
   
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use Auth;

class LoginAPIController extends Controller
{
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){ 
            $token = auth()->user()->createToken('SportApp')->plainTextToken; 

            return response()->json(['token' => $token, 'user' => auth()->user()], 200);
        } 
        else{ 
            return response()->json(['message' => 'UnAuthorised'], 401);
        } 
    }
}
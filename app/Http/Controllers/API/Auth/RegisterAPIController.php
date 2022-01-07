<?php
   
namespace App\Http\Controllers\API\Auth;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Validator;
   
class RegisterAPIController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['is_public'] = 1;
        $user = User::create($input);

        return response()->json(['success'=> true, 'user' => $user], 200);
    }
}
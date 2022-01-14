<?php
   
namespace App\Http\Controllers\API\Auth;
   
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Libraries\SportMenuDataPreparation;
use Hash;
   
class ResetPasswordAPIController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $user = User::find(auth()->user()->id);

        $user->password = Hash::make($input['password']);

        $user->save();

        return $this->sendResponse('success', 'User password changed successfully.');
    }
}
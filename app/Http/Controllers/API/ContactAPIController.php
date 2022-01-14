<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Libraries\SportMenuDataPreparation;
use Validator;
   
class ContactAPIController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->user()->id;

        $contact = Feedback::create($input);

        return $this->sendResponse($contact, 'User retrieved successfully.');
    }
}
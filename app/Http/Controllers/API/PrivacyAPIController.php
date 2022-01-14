<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Article;
   
class PrivacyAPIController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pp = Article::where('article_type_id', 2)->first();

        return $this->sendResponse($pp, 'Privacy Policy retrieved successfully.');
    }
}
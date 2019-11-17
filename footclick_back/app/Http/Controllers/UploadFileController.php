<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageServiceProvider;
use App\BestGoals;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * @group Goal Videos management
 *
 * APIs for uploading videos
 */
class UploadFileController extends Controller
{
    /**
     * Upload a Goal Footage
     *
     * @bodyParam  $request  \Illuminate\Http\Request
     * @bodyParam  $image  \Illuminate\Http\Request required Get file
     * @bodyParam  $fname  \Illuminate\Http\Request required Username
     * @bodyParam  $name  \Illuminate\Http\Request required File name to be stored in public folder
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)   {
        if($request->get('file'))   {
          $image = $request->get('file');
          $fname = $request->get('userName');
          $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
          \Image::make($request->get('file'))->save(public_path('images/').$name);
        }
        // -----insert file to 'GoalFootage' table in database ----
        $fileupload = new BestGoals();
        $fileupload->footclick_name=$fname;
        $fileupload->image=$name;
        $fileupload->save();
        return response()->json('Successfully added');
    }
}

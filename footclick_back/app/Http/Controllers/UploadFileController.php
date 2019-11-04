<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageServiceProvider;
use App\BestGoals;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    /**
     * Upload a Goal Footage
     *
     * @bodyParam  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)   {

        if($request->get('file'))   {
          $image = $request->get('file');
          $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
          \Image::make($request->get('file'))->save(public_path('images/').$name);
        }
        // ---@start insert file to 'GoalFootage' table in database ----
        $fileupload = new BestGoals();
        $fileupload->image=$name;
        $fileupload->save();
        // ---@end insert file to 'GoalFootage' table in database ----
        return response()->json('Successfully added');
    }
}

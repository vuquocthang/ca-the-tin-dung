<?php
/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 8/13/2017
 * Time: 2:14 AM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\File;


class UploadImageController extends Controller
{
    public function showUploadForm(){
        return view('admin.upload-image.form');
    }

    public function upload(Request $request){



        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('image'), $imageName);

        return redirect('admin/images');
    }

    public function images(){
        $list = [];
        $filesInFolder = File::files('public/image');

        foreach($filesInFolder as $path)
        {
            $list[] = pathinfo($path);
        }


        return view('admin.upload-image.list', ['list' => $list]);
    }

}
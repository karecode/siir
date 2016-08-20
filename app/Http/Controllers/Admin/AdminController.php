<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

use Validator;
class AdminController extends AdminBaseController
{
    public function index()
    {
        return view('backend.pages.dashboard');
    }

    public function siir_ekle()
    {
        return view('backend.pages.siir_ekle');
    }

    public function ckeupload()
    {
        $CKEditor = Input::get('CKEditor');
        $funcNum = Input::get('CKEditorFuncNum');
        $message = $url = '';
        $files = array('image' => Input::file('image'));
        // setting up rules
        $rules = array('image' => 'required and mimes:jpeg,jpg,gif,png,swf',); //mimes:jpeg,bmp,png and for max size max:10000
        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($files, $rules);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            $message= 'Lütfen gerekli dosya biçimi kullanın';
        }
        else{
            if (Input::hasFile('upload')) {
                $file = Input::file('upload');
                if ($file->isValid()) {
                    $filename = time().'.'.$file->getClientOriginalExtension();
                    $destinationPath='img/'.Auth::user()->slug.'/yazi_resimleri';
                    Input::file('upload')->move($destinationPath,$filename);
                    $url = '/'.$destinationPath.'/' . $filename;
                } else {
                    $message = 'An error occured while uploading the file.';
                }
            } else {
                $message = 'No file uploaded.';
            }
        }

        return '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
    }
}

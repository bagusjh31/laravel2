<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadForm()
    {
    return view('upload');
    }

    public function uploadFile(request $req)
    {
        $req->file->store('public');
        return redirect('/')->with('pesan','berhasil di upload');
    
    
    }


}


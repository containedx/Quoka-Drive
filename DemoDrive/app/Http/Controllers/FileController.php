<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    public function store(Request $request)
    {

        $file = $request->file('file');
        dd($file);


    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    public function store(Request $request)
    {

        $file = new File();
        $file->name = $request->file('file')->getClientOriginalName();
        $file->size = $request->file('file')->getSize()/1024;
        $file->type = $request->file('file')->getClientMimeType();
        $file->url = "na sztywno";
        $file->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $file = File::find($id);
        $file->delete();
        return redirect('/');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller

{
    public function store(Request $request)
    {

        $file = new File();
        $file->name = $request->file('file')->getClientOriginalName();
        $file->size = $request->file('file')->getSize()/1024;
        $file->type = $request->file('file')->getClientMimeType();

        $url = Storage::url($file->name);
        $file->url = $url;
        $file->save();
        Storage::disk('s3')->put($file->name, $file);

        return redirect('/');
    }

    public function destroy($id)
    {
        $file = File::find($id);
        $file->delete();
        $url = Storage::url($file->name);
        Storage::disk('s3')->delete($file->name  );
        return redirect('/');
    }

}

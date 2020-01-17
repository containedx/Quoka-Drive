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
        Storage::disk('s3')->put($file->name, file_get_contents($request->file('file')));
        $file->url =  Storage::disk('s3')->url($file->name);
        $file->save();

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller

{
    public function store(Request $request)
    {
        $file = new File();
        $file->name = $request->file('file')->getClientOriginalName();
        $file->size = $request->file('file')->getSize()/1024;
        $file->type = $request->file('file')->getClientMimeType();
        $file->secret_key = Auth::user()->secret_key;
        $file->shared = false;
        Storage::disk('s3')->put(Auth::user()->id . "/" . $file->name, file_get_contents($request->file('file')));
        $file->url =  Storage::disk('s3')->url(Auth::user()->id . "/" . $file->name);
        $file->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $file = File::find($id);
        $file->delete();
        Storage::disk('s3')->delete($file->name );
        return redirect('/');
    }

    public function download($id)
    {
        $file = File::find($id);
        return Storage::disk('s3')->download(Auth::user()->id . "/" . $file->name);
    }



}

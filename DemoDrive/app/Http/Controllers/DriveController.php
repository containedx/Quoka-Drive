<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DriveController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return view('drive.index');
        } else {
            return view('auth.login');
        }

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\File;

class DriveController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $files = File::all();
            return view('drive.index')->withFiles($files);
        } else {
            return view('auth.login');
        }
    }

    public function guest()
    {
        return view('auth.login');

    }

    public function notifications()
    {
        return view('drive.notifications');

    }

    public function mNotifications()
    {
        return view('drive.mobile.m_notifications');

    }

    public function mShare()
    {
        return view('drive.mobile.m_share');

    }

    public function mStorage()
    {
        return view('drive.mobile.m_storage');

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

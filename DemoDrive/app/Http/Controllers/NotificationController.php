<?php

namespace App\Http\Controllers;

use App\File;
use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function index()
    {
        $notifications = Notification::all();
        return view('drive.notifications')->withNotifications($notifications);
    }

    public function share( Request $request)
    {
        $id = $request->input('id');
        $file = File::find($id);

        $secretkey = $request->input('secretkey');
        $url = $file->url;

        $file->shared = true;
        $file->save();

        $notification = new Notification();
        $notification->secret_key = $secretkey;
        $notification->url = $url;
        $notification->save();

        return redirect('/');
    }
}

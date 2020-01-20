<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function share( Request $request)
    {
        $secretkey = $request->input('secretkey');
        $url = $request->input('url');

        $notification = new Notification();
        $notification->secret_key = $secretkey;
        $notification->url = $url;
        $notification->save();

        return redirect('/');
    }
}

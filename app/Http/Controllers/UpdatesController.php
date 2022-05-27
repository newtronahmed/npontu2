<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdatesController extends Controller
{
    public function index()
    {
        //mark all unread notifs as read
        auth()->user()->unreadNotifications->markAsRead();
        //return view with all unread notifications
        return view('updates')->with('notifications', auth()->user()->notifications()->latest()->paginate(5));
    
    }
}

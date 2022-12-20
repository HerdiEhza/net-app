<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PushNotification;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PushNotificationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('push_notification_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.push-notification.index');
    }

    public function create()
    {
        abort_if(Gate::denies('push_notification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.push-notification.create');
    }

    public function edit(PushNotification $pushNotification)
    {
        abort_if(Gate::denies('push_notification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.push-notification.edit', compact('pushNotification'));
    }

    public function show(PushNotification $pushNotification)
    {
        abort_if(Gate::denies('push_notification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.push-notification.show', compact('pushNotification'));
    }
}
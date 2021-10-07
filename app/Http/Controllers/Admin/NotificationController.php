<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notification;
use App\Http\Requests\MassDestroyNotificationRequest;
use App\Http\Requests\StoreNotificationRequest;
use App\Http\Requests\UpdateNotificationRequest;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('notification_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $notification = Notification::all();

        return view('admin.notification.index', compact('notification'));
    }

    public function create()
    {
        abort_if(Gate::denies('notification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.notification.create');
    }

    public function store(StoreNotificationRequest $request)
    {
        $notification = Notification::create($request->all());

        return redirect()->route('admin.notification.index');

    }

    public function edit(Notification $notification)
    {
        abort_if(Gate::denies('notification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.notification.edit', compact('notification'));
    }

    public function update(UpdateNotificationRequest $request, Notification $notification)
    {
        $notification->update($request->all());
        return redirect()->route('admin.notification.index');

    }

    public function show(Notification $notification)
    {
        abort_if(Gate::denies('notification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.notification.show', compact('notification'));
    }

    public function destroy(Notification $notification)
    {
        abort_if(Gate::denies('notification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $notification->delete();

        return back();

    }

    public function massDestroy(MassDestroyNotificationRequest $request)
    {
        Notification::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}

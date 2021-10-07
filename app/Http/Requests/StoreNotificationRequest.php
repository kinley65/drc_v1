<?php

namespace App\Http\Requests;

use App\Notification;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
class StoreNotificationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('notification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'title'     => [
                'required'],
            'description'    => [
                'required'],
            'long_description' => [
                'required'],
            'date'  => [
                'date'],
           
        ];

    }
}

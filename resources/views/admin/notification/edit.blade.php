@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.notification.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.notification.update", [$notification->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.notification.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $notification->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.notification.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.notification.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $notification->description) }}" required>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.notification.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="long_description">{{ trans('cruds.notification.fields.long_description') }}</label>
                <input class="form-control {{ $errors->has('long_description') ? 'is-invalid' : '' }}" type="text" name="long_description" id="long_description" value="{{ old('long_description', $notification->long_description) }}" required>
                @if($errors->has('long_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('long_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.notification.fields.long_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date">{{ trans('cruds.notification.fields.date') }}</label>
                <input class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }}" type="date" name="date" id="date" value="{{ old('date', $notification->date) }}" required>
                @if($errors->has('date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.notification.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
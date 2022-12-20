@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="bg-white card">
        <div class="border-b card-header border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.pushNotification.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('push_notification_create')
                    <a class="btn btn-indigo" href="{{ route('admin.push-notifications.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.pushNotification.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('push-notification.index')

    </div>
</div>
@endsection
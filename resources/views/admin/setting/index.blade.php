@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="bg-white card">
        <div class="border-b card-header border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.setting.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('setting_create')
                    <a class="btn btn-indigo" href="{{ route('admin.settings.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.setting.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('setting.index')

    </div>
</div>
@endsection
@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="bg-white card">
        <div class="border-b card-header border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.paket.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('paket_create')
                    <a class="btn btn-indigo" href="{{ route('admin.pakets.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.paket.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('paket.index')

    </div>
</div>
@endsection
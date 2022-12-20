@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.pelanggan.title_singular') }}:
                    {{ trans('cruds.pelanggan.fields.id') }}
                    {{ $pelanggan->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('pelanggan.edit', [$pelanggan])
        </div>
    </div>
</div>
@endsection
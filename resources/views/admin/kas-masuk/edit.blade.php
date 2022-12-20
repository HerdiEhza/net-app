@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.kasMasuk.title_singular') }}:
                    {{ trans('cruds.kasMasuk.fields.id') }}
                    {{ $kasMasuk->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('kas-masuk.edit', [$kasMasuk])
        </div>
    </div>
</div>
@endsection
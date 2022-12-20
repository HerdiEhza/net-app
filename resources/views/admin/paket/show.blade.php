@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.paket.title_singular') }}:
                    {{ trans('cruds.paket.fields.id') }}
                    {{ $paket->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.paket.fields.id') }}
                            </th>
                            <td>
                                {{ $paket->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.paket.fields.id_tagihan') }}
                            </th>
                            <td>
                                {{ $paket->id_tagihan }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.paket.fields.nama_paket') }}
                            </th>
                            <td>
                                {{ $paket->nama_paket }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.paket.fields.tarif') }}
                            </th>
                            <td>
                                {{ $paket->tarif }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.paket.fields.cycle') }}
                            </th>
                            <td>
                                {{ $paket->cycle_label }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('paket_edit')
                    <a href="{{ route('admin.pakets.edit', $paket) }}" class="mr-2 btn btn-indigo">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.pakets.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
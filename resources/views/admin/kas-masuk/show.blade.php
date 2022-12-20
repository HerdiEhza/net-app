@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.kasMasuk.title_singular') }}:
                    {{ trans('cruds.kasMasuk.fields.id') }}
                    {{ $kasMasuk->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.kasMasuk.fields.id') }}
                            </th>
                            <td>
                                {{ $kasMasuk->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.kasMasuk.fields.tanggal_transaksi') }}
                            </th>
                            <td>
                                {{ $kasMasuk->tanggal_transaksi }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.kasMasuk.fields.keterangan') }}
                            </th>
                            <td>
                                {{ $kasMasuk->keterangan }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.kasMasuk.fields.nominal_transaksi') }}
                            </th>
                            <td>
                                {{ $kasMasuk->nominal_transaksi }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('kas_masuk_edit')
                    <a href="{{ route('admin.kas-masuks.edit', $kasMasuk) }}" class="mr-2 btn btn-indigo">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.kas-masuks.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
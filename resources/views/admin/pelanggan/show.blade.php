@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.pelanggan.title_singular') }}:
                    {{ trans('cruds.pelanggan.fields.id') }}
                    {{ $pelanggan->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.id') }}
                            </th>
                            <td>
                                {{ $pelanggan->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.username') }}
                            </th>
                            <td>
                                {{ $pelanggan->username }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.email') }}
                            </th>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $pelanggan->email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $pelanggan->email }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.password') }}
                            </th>
                            <td>
                                **********
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.nama_lengkap') }}
                            </th>
                            <td>
                                {{ $pelanggan->nama_lengkap }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.perusahaan') }}
                            </th>
                            <td>
                                {{ $pelanggan->perusahaan }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.alamat') }}
                            </th>
                            <td>
                                {{ $pelanggan->alamat }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.nomor_hp') }}
                            </th>
                            <td>
                                {{ $pelanggan->nomor_hp }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.nomor_whatsapp') }}
                            </th>
                            <td>
                                {{ $pelanggan->nomor_whatsapp }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.nomor_ktp') }}
                            </th>
                            <td>
                                {{ $pelanggan->nomor_ktp }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.nomor_virtual_account') }}
                            </th>
                            <td>
                                {{ $pelanggan->nomor_virtual_account }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.tanggal_pemasangan') }}
                            </th>
                            <td>
                                {{ $pelanggan->tanggal_pemasangan }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.lokasi_pemasangan') }}
                            </th>
                            <td>
                                {{ $pelanggan->lokasi_pemasangan }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.reseller') }}
                            </th>
                            <td>
                                {{ $pelanggan->reseller }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.pelanggan.fields.catatan') }}
                            </th>
                            <td>
                                {{ $pelanggan->catatan }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('pelanggan_edit')
                    <a href="{{ route('admin.pelanggans.edit', $pelanggan) }}" class="mr-2 btn btn-indigo">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.pelanggans.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.listTagihan.title_singular') }}:
                    {{ trans('cruds.listTagihan.fields.id') }}
                    {{ $listTagihan->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.listTagihan.fields.id') }}
                            </th>
                            <td>
                                {{ $listTagihan->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.listTagihan.fields.nama_pelanggan') }}
                            </th>
                            <td>
                                @if($listTagihan->namaPelanggan)
                                    <span class="badge badge-relationship">{{ $listTagihan->namaPelanggan->nama_lengkap ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.listTagihan.fields.alamat_pelanggan') }}
                            </th>
                            <td>
                                @if($listTagihan->alamatPelanggan)
                                    <span class="badge badge-relationship">{{ $listTagihan->alamatPelanggan->alamat ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.listTagihan.fields.produk') }}
                            </th>
                            <td>
                                @if($listTagihan->produk)
                                    <span class="badge badge-relationship">{{ $listTagihan->produk->nama_paket ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.listTagihan.fields.harga') }}
                            </th>
                            <td>
                                @if($listTagihan->harga)
                                    <span class="badge badge-relationship">{{ $listTagihan->harga->tarif ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.listTagihan.fields.jatuh_tempo') }}
                            </th>
                            <td>
                                {{ $listTagihan->jatuh_tempo }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.listTagihan.fields.pesan') }}
                            </th>
                            <td>
                                {{ $listTagihan->pesan }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.listTagihan.fields.status') }}
                            </th>
                            <td>
                                {{ $listTagihan->status_label }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('list_tagihan_edit')
                    <a href="{{ route('admin.list-tagihans.edit', $listTagihan) }}" class="mr-2 btn btn-indigo">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.list-tagihans.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
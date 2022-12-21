<x-admin-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>

    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.view') }}
                        {{ trans('cruds.kasKeluar.title_singular') }}:
                        {{ trans('cruds.kasKeluar.fields.id') }}
                        {{ $kasKeluar->id }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                <div class="pt-3">
                    <table class="table table-view">
                        <tbody class="bg-white">
                            <tr>
                                <th>
                                    {{ trans('cruds.kasKeluar.fields.id') }}
                                </th>
                                <td>
                                    {{ $kasKeluar->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.kasKeluar.fields.tanggal_transaksi') }}
                                </th>
                                <td>
                                    {{ $kasKeluar->tanggal_transaksi }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.kasKeluar.fields.keterangan') }}
                                </th>
                                <td>
                                    {{ $kasKeluar->keterangan }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.kasKeluar.fields.nominal_transaksi') }}
                                </th>
                                <td>
                                    {{ $kasKeluar->nominal_transaksi }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    @can('kas_keluar_edit')
                        <a href="{{ route('admin.kas-keluars.edit', $kasKeluar) }}" class="mr-2 btn btn-indigo">
                            {{ trans('global.edit') }}
                        </a>
                    @endcan
                    <a href="{{ route('admin.kas-keluars.index') }}" class="btn btn-secondary">
                        {{ trans('global.back') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
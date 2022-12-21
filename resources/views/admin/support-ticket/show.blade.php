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
                        {{ trans('cruds.supportTicket.title_singular') }}:
                        {{ trans('cruds.supportTicket.fields.id') }}
                        {{ $supportTicket->id }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                <div class="pt-3">
                    <table class="table table-view">
                        <tbody class="bg-white">
                            <tr>
                                <th>
                                    {{ trans('cruds.supportTicket.fields.id') }}
                                </th>
                                <td>
                                    {{ $supportTicket->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.supportTicket.fields.no_tiket') }}
                                </th>
                                <td>
                                    {{ $supportTicket->no_tiket }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.supportTicket.fields.tanggal') }}
                                </th>
                                <td>
                                    {{ $supportTicket->tanggal }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.supportTicket.fields.pelanggan') }}
                                </th>
                                <td>
                                    @if($supportTicket->pelanggan)
                                        <span class="badge badge-relationship">{{ $supportTicket->pelanggan->nama_lengkap ?? '' }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.supportTicket.fields.title') }}
                                </th>
                                <td>
                                    {{ $supportTicket->title }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.supportTicket.fields.update') }}
                                </th>
                                <td>
                                    {{ $supportTicket->update }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.supportTicket.fields.status') }}
                                </th>
                                <td>
                                    {{ $supportTicket->status_label }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    @can('support_ticket_edit')
                        <a href="{{ route('admin.support-tickets.edit', $supportTicket) }}" class="mr-2 btn btn-indigo">
                            {{ trans('global.edit') }}
                        </a>
                    @endcan
                    <a href="{{ route('admin.support-tickets.index') }}" class="btn btn-secondary">
                        {{ trans('global.back') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
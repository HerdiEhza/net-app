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
                        {{ trans('cruds.pushNotification.title_singular') }}:
                        {{ trans('cruds.pushNotification.fields.id') }}
                        {{ $pushNotification->id }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                <div class="pt-3">
                    <table class="table table-view">
                        <tbody class="bg-white">
                            <tr>
                                <th>
                                    {{ trans('cruds.pushNotification.fields.id') }}
                                </th>
                                <td>
                                    {{ $pushNotification->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.pushNotification.fields.waktu_dikirim') }}
                                </th>
                                <td>
                                    {{ $pushNotification->waktu_dikirim }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.pushNotification.fields.judul') }}
                                </th>
                                <td>
                                    {{ $pushNotification->judul }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.pushNotification.fields.isi_notifikasi') }}
                                </th>
                                <td>
                                    {{ $pushNotification->isi_notifikasi }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    @can('push_notification_edit')
                        <a href="{{ route('admin.push-notifications.edit', $pushNotification) }}" class="mr-2 btn btn-indigo">
                            {{ trans('global.edit') }}
                        </a>
                    @endcan
                    <a href="{{ route('admin.push-notifications.index') }}" class="btn btn-secondary">
                        {{ trans('global.back') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
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
                        {{ trans('cruds.setting.title_singular') }}:
                        {{ trans('cruds.setting.fields.id') }}
                        {{ $setting->id }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                <div class="pt-3">
                    <table class="table table-view">
                        <tbody class="bg-white">
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.id') }}
                                </th>
                                <td>
                                    {{ $setting->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.nama_usaha') }}
                                </th>
                                <td>
                                    {{ $setting->nama_usaha }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.admin_email') }}
                                </th>
                                <td>
                                    <a class="link-light-blue" href="mailto:{{ $setting->admin_email }}">
                                        <i class="far fa-envelope fa-fw">
                                        </i>
                                        {{ $setting->admin_email }}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.nama_usaha_singkat') }}
                                </th>
                                <td>
                                    {{ $setting->nama_usaha_singkat }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.alamat_usaha') }}
                                </th>
                                <td>
                                    {{ $setting->alamat_usaha }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.no_hp') }}
                                </th>
                                <td>
                                    {{ $setting->no_hp }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.no_whatsapp') }}
                                </th>
                                <td>
                                    {{ $setting->no_whatsapp }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.email_perusahaan') }}
                                </th>
                                <td>
                                    <a class="link-light-blue" href="mailto:{{ $setting->email_perusahaan }}">
                                        <i class="far fa-envelope fa-fw">
                                        </i>
                                        {{ $setting->email_perusahaan }}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.rekening_bank') }}
                                </th>
                                <td>
                                    {{ $setting->rekening_bank }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.ppn') }}
                                </th>
                                <td>
                                    {{ $setting->ppn }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.tanggal_jatuh_tempo') }}
                                </th>
                                <td>
                                    {{ $setting->tanggal_jatuh_tempo }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.use_logo') }}
                                </th>
                                <td>
                                    {{ $setting->use_logo_label }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.logo') }}
                                </th>
                                <td>
                                    @foreach($setting->logo as $key => $entry)
                                        <a class="link-photo" href="{{ $entry['url'] }}">
                                            <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.unique_code') }}
                                </th>
                                <td>
                                    {{ $setting->unique_code_label }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.biaya_admin') }}
                                </th>
                                <td>
                                    {{ $setting->biaya_admin }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.map_center') }}
                                </th>
                                <td>
                                    {{ $setting->map_center }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.pesan_wa_tagihan') }}
                                </th>
                                <td>
                                    {{ $setting->pesan_wa_tagihan }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.pesan_tagihan_lunas') }}
                                </th>
                                <td>
                                    {{ $setting->pesan_tagihan_lunas }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.teks_login') }}
                                </th>
                                <td>
                                    {{ $setting->teks_login }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.editor_tagihan') }}
                                </th>
                                <td>
                                    {{ $setting->editor_tagihan }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.setting.fields.format_print_pos') }}
                                </th>
                                <td>
                                    {{ $setting->format_print_pos }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    @can('setting_edit')
                        <a href="{{ route('admin.settings.edit', $setting) }}" class="mr-2 btn btn-indigo">
                            {{ trans('global.edit') }}
                        </a>
                    @endcan
                    <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">
                        {{ trans('global.back') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="w-full form-select sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('setting_delete')
                <button class="ml-3 btn btn-rose disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Setting" format="csv" />
                <livewire:excel-export model="Setting" format="xlsx" />
                <livewire:excel-export model="Setting" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="inline-block w-full sm:w-1/3" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table w-full table-index">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.setting.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.nama_usaha') }}
                            @include('components.table.sort', ['field' => 'nama_usaha'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.admin_email') }}
                            @include('components.table.sort', ['field' => 'admin_email'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.nama_usaha_singkat') }}
                            @include('components.table.sort', ['field' => 'nama_usaha_singkat'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.alamat_usaha') }}
                            @include('components.table.sort', ['field' => 'alamat_usaha'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.no_hp') }}
                            @include('components.table.sort', ['field' => 'no_hp'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.no_whatsapp') }}
                            @include('components.table.sort', ['field' => 'no_whatsapp'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.email_perusahaan') }}
                            @include('components.table.sort', ['field' => 'email_perusahaan'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.rekening_bank') }}
                            @include('components.table.sort', ['field' => 'rekening_bank'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.ppn') }}
                            @include('components.table.sort', ['field' => 'ppn'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.tanggal_jatuh_tempo') }}
                            @include('components.table.sort', ['field' => 'tanggal_jatuh_tempo'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.use_logo') }}
                            @include('components.table.sort', ['field' => 'use_logo'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.unique_code') }}
                            @include('components.table.sort', ['field' => 'unique_code'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.biaya_admin') }}
                            @include('components.table.sort', ['field' => 'biaya_admin'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.map_center') }}
                            @include('components.table.sort', ['field' => 'map_center'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.pesan_wa_tagihan') }}
                            @include('components.table.sort', ['field' => 'pesan_wa_tagihan'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.pesan_tagihan_lunas') }}
                            @include('components.table.sort', ['field' => 'pesan_tagihan_lunas'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.teks_login') }}
                            @include('components.table.sort', ['field' => 'teks_login'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.editor_tagihan') }}
                            @include('components.table.sort', ['field' => 'editor_tagihan'])
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.format_print_pos') }}
                            @include('components.table.sort', ['field' => 'format_print_pos'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($settings as $setting)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $setting->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $setting->id }}
                            </td>
                            <td>
                                {{ $setting->nama_usaha }}
                            </td>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $setting->admin_email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $setting->admin_email }}
                                </a>
                            </td>
                            <td>
                                {{ $setting->nama_usaha_singkat }}
                            </td>
                            <td>
                                {{ $setting->alamat_usaha }}
                            </td>
                            <td>
                                {{ $setting->no_hp }}
                            </td>
                            <td>
                                {{ $setting->no_whatsapp }}
                            </td>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $setting->email_perusahaan }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $setting->email_perusahaan }}
                                </a>
                            </td>
                            <td>
                                {{ $setting->rekening_bank }}
                            </td>
                            <td>
                                {{ $setting->ppn }}
                            </td>
                            <td>
                                {{ $setting->tanggal_jatuh_tempo }}
                            </td>
                            <td>
                                {{ $setting->use_logo_label }}
                            </td>
                            <td>
                                @foreach($setting->logo as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $setting->unique_code_label }}
                            </td>
                            <td>
                                {{ $setting->biaya_admin }}
                            </td>
                            <td>
                                {{ $setting->map_center }}
                            </td>
                            <td>
                                {{ $setting->pesan_wa_tagihan }}
                            </td>
                            <td>
                                {{ $setting->pesan_tagihan_lunas }}
                            </td>
                            <td>
                                {{ $setting->teks_login }}
                            </td>
                            <td>
                                {{ $setting->editor_tagihan }}
                            </td>
                            <td>
                                {{ $setting->format_print_pos }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('setting_show')
                                        <a class="mr-2 btn btn-sm btn-info" href="{{ route('admin.settings.show', $setting) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('setting_edit')
                                        <a class="mr-2 btn btn-sm btn-success" href="{{ route('admin.settings.edit', $setting) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('setting_delete')
                                        <button class="mr-2 btn btn-sm btn-rose" type="button" wire:click="confirm('delete', {{ $setting->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $settings->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush
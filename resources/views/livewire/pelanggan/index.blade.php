<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="w-full form-select sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('pelanggan_delete')
                <button class="ml-3 btn btn-rose disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Pelanggan" format="csv" />
                <livewire:excel-export model="Pelanggan" format="xlsx" />
                <livewire:excel-export model="Pelanggan" format="pdf" />
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
                            {{ trans('cruds.pelanggan.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.username') }}
                            @include('components.table.sort', ['field' => 'username'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.email') }}
                            @include('components.table.sort', ['field' => 'email'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.nama_lengkap') }}
                            @include('components.table.sort', ['field' => 'nama_lengkap'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.perusahaan') }}
                            @include('components.table.sort', ['field' => 'perusahaan'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.alamat') }}
                            @include('components.table.sort', ['field' => 'alamat'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.nomor_hp') }}
                            @include('components.table.sort', ['field' => 'nomor_hp'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.nomor_whatsapp') }}
                            @include('components.table.sort', ['field' => 'nomor_whatsapp'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.nomor_ktp') }}
                            @include('components.table.sort', ['field' => 'nomor_ktp'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.nomor_virtual_account') }}
                            @include('components.table.sort', ['field' => 'nomor_virtual_account'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.tanggal_pemasangan') }}
                            @include('components.table.sort', ['field' => 'tanggal_pemasangan'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.lokasi_pemasangan') }}
                            @include('components.table.sort', ['field' => 'lokasi_pemasangan'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.reseller') }}
                            @include('components.table.sort', ['field' => 'reseller'])
                        </th>
                        <th>
                            {{ trans('cruds.pelanggan.fields.catatan') }}
                            @include('components.table.sort', ['field' => 'catatan'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pelanggans as $pelanggan)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $pelanggan->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $pelanggan->id }}
                            </td>
                            <td>
                                {{ $pelanggan->username }}
                            </td>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $pelanggan->email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $pelanggan->email }}
                                </a>
                            </td>
                            <td>
                                {{ $pelanggan->nama_lengkap }}
                            </td>
                            <td>
                                {{ $pelanggan->perusahaan }}
                            </td>
                            <td>
                                {{ $pelanggan->alamat }}
                            </td>
                            <td>
                                {{ $pelanggan->nomor_hp }}
                            </td>
                            <td>
                                {{ $pelanggan->nomor_whatsapp }}
                            </td>
                            <td>
                                {{ $pelanggan->nomor_ktp }}
                            </td>
                            <td>
                                {{ $pelanggan->nomor_virtual_account }}
                            </td>
                            <td>
                                {{ $pelanggan->tanggal_pemasangan }}
                            </td>
                            <td>
                                {{ $pelanggan->lokasi_pemasangan }}
                            </td>
                            <td>
                                {{ $pelanggan->reseller }}
                            </td>
                            <td>
                                {{ $pelanggan->catatan }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('pelanggan_show')
                                        <a class="mr-2 btn btn-sm btn-info" href="{{ route('admin.pelanggans.show', $pelanggan) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('pelanggan_edit')
                                        <a class="mr-2 btn btn-sm btn-success" href="{{ route('admin.pelanggans.edit', $pelanggan) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('pelanggan_delete')
                                        <button class="mr-2 btn btn-sm btn-rose" type="button" wire:click="confirm('delete', {{ $pelanggan->id }})" wire:loading.attr="disabled">
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
            {{ $pelanggans->links() }}
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
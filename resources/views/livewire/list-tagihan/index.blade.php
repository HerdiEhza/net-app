<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="w-full form-select sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('list_tagihan_delete')
                <button class="ml-3 btn btn-rose disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="ListTagihan" format="csv" />
                <livewire:excel-export model="ListTagihan" format="xlsx" />
                <livewire:excel-export model="ListTagihan" format="pdf" />
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
                            {{ trans('cruds.listTagihan.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.listTagihan.fields.no_tagihan') }}
                            @include('components.table.sort', ['field' => 'no_tagihan'])
                        </th>
                        <th>
                            {{ trans('cruds.listTagihan.fields.nama_pelanggan') }}
                            @include('components.table.sort', ['field' => 'nama_pelanggan.nama_lengkap'])
                        </th>
                        <th>
                            {{ trans('cruds.listTagihan.fields.alamat_pelanggan') }}
                            @include('components.table.sort', ['field' => 'alamat_pelanggan.alamat'])
                        </th>
                        <th>
                            {{ trans('cruds.listTagihan.fields.produk') }}
                            @include('components.table.sort', ['field' => 'produk.nama_paket'])
                        </th>
                        <th>
                            {{ trans('cruds.listTagihan.fields.harga') }}
                            @include('components.table.sort', ['field' => 'harga.tarif'])
                        </th>
                        <th>
                            {{ trans('cruds.listTagihan.fields.jatuh_tempo') }}
                            @include('components.table.sort', ['field' => 'jatuh_tempo'])
                        </th>
                        <th>
                            {{ trans('cruds.listTagihan.fields.pesan') }}
                            @include('components.table.sort', ['field' => 'pesan'])
                        </th>
                        <th>
                            {{ trans('cruds.listTagihan.fields.status') }}
                            @include('components.table.sort', ['field' => 'status'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($listTagihans as $listTagihan)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $listTagihan->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $listTagihan->id }}
                            </td>
                            <td>
                                {{ $listTagihan->no_tagihan }}
                            </td>
                            <td>
                                @if($listTagihan->namaPelanggan)
                                    <span class="badge badge-relationship">{{ $listTagihan->namaPelanggan->nama_lengkap ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($listTagihan->alamatPelanggan)
                                    <span class="badge badge-relationship">{{ $listTagihan->alamatPelanggan->alamat ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($listTagihan->produk)
                                    <span class="badge badge-relationship">{{ $listTagihan->produk->nama_paket ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($listTagihan->harga)
                                    <span class="badge badge-relationship">{{ $listTagihan->harga->tarif ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $listTagihan->jatuh_tempo }}
                            </td>
                            <td>
                                {{ $listTagihan->pesan }}
                            </td>
                            <td>
                                {{ $listTagihan->status_label }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('list_tagihan_show')
                                        <a class="mr-2 btn btn-sm btn-info" href="{{ route('admin.list-tagihans.show', $listTagihan) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('list_tagihan_edit')
                                        <a class="mr-2 btn btn-sm btn-success" href="{{ route('admin.list-tagihans.edit', $listTagihan) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('list_tagihan_delete')
                                        <button class="mr-2 btn btn-sm btn-rose" type="button" wire:click="confirm('delete', {{ $listTagihan->id }})" wire:loading.attr="disabled">
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
            {{ $listTagihans->links() }}
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
<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="w-full form-select sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('kas_keluar_delete')
                <button class="ml-3 btn btn-rose disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="KasKeluar" format="csv" />
                <livewire:excel-export model="KasKeluar" format="xlsx" />
                <livewire:excel-export model="KasKeluar" format="pdf" />
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
                            {{ trans('cruds.kasKeluar.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.kasKeluar.fields.tanggal_transaksi') }}
                            @include('components.table.sort', ['field' => 'tanggal_transaksi'])
                        </th>
                        <th>
                            {{ trans('cruds.kasKeluar.fields.keterangan') }}
                            @include('components.table.sort', ['field' => 'keterangan'])
                        </th>
                        <th>
                            {{ trans('cruds.kasKeluar.fields.nominal_transaksi') }}
                            @include('components.table.sort', ['field' => 'nominal_transaksi'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kasKeluars as $kasKeluar)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $kasKeluar->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $kasKeluar->id }}
                            </td>
                            <td>
                                {{ $kasKeluar->tanggal_transaksi }}
                            </td>
                            <td>
                                {{ $kasKeluar->keterangan }}
                            </td>
                            <td>
                                {{ $kasKeluar->nominal_transaksi }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('kas_keluar_show')
                                        <a class="mr-2 btn btn-sm btn-info" href="{{ route('admin.kas-keluars.show', $kasKeluar) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('kas_keluar_edit')
                                        <a class="mr-2 btn btn-sm btn-success" href="{{ route('admin.kas-keluars.edit', $kasKeluar) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('kas_keluar_delete')
                                        <button class="mr-2 btn btn-sm btn-rose" type="button" wire:click="confirm('delete', {{ $kasKeluar->id }})" wire:loading.attr="disabled">
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
            {{ $kasKeluars->links() }}
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
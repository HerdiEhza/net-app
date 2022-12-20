<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="w-full form-select sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('paket_delete')
                <button class="ml-3 btn btn-rose disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Paket" format="csv" />
                <livewire:excel-export model="Paket" format="xlsx" />
                <livewire:excel-export model="Paket" format="pdf" />
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
                            {{ trans('cruds.paket.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.paket.fields.id_tagihan') }}
                            @include('components.table.sort', ['field' => 'id_tagihan'])
                        </th>
                        <th>
                            {{ trans('cruds.paket.fields.nama_paket') }}
                            @include('components.table.sort', ['field' => 'nama_paket'])
                        </th>
                        <th>
                            {{ trans('cruds.paket.fields.tarif') }}
                            @include('components.table.sort', ['field' => 'tarif'])
                        </th>
                        <th>
                            {{ trans('cruds.paket.fields.cycle') }}
                            @include('components.table.sort', ['field' => 'cycle'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pakets as $paket)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $paket->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $paket->id }}
                            </td>
                            <td>
                                {{ $paket->id_tagihan }}
                            </td>
                            <td>
                                {{ $paket->nama_paket }}
                            </td>
                            <td>
                                {{ $paket->tarif }}
                            </td>
                            <td>
                                {{ $paket->cycle_label }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('paket_show')
                                        <a class="mr-2 btn btn-sm btn-info" href="{{ route('admin.pakets.show', $paket) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('paket_edit')
                                        <a class="mr-2 btn btn-sm btn-success" href="{{ route('admin.pakets.edit', $paket) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('paket_delete')
                                        <button class="mr-2 btn btn-sm btn-rose" type="button" wire:click="confirm('delete', {{ $paket->id }})" wire:loading.attr="disabled">
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
            {{ $pakets->links() }}
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
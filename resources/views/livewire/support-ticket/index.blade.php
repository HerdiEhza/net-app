<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="w-full form-select sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('support_ticket_delete')
                <button class="ml-3 btn btn-rose disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="SupportTicket" format="csv" />
                <livewire:excel-export model="SupportTicket" format="xlsx" />
                <livewire:excel-export model="SupportTicket" format="pdf" />
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
                            {{ trans('cruds.supportTicket.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.supportTicket.fields.no_tiket') }}
                            @include('components.table.sort', ['field' => 'no_tiket'])
                        </th>
                        <th>
                            {{ trans('cruds.supportTicket.fields.tanggal') }}
                            @include('components.table.sort', ['field' => 'tanggal'])
                        </th>
                        <th>
                            {{ trans('cruds.supportTicket.fields.pelanggan') }}
                            @include('components.table.sort', ['field' => 'pelanggan.nama_lengkap'])
                        </th>
                        <th>
                            {{ trans('cruds.supportTicket.fields.title') }}
                            @include('components.table.sort', ['field' => 'title'])
                        </th>
                        <th>
                            {{ trans('cruds.supportTicket.fields.update') }}
                            @include('components.table.sort', ['field' => 'update'])
                        </th>
                        <th>
                            {{ trans('cruds.supportTicket.fields.status') }}
                            @include('components.table.sort', ['field' => 'status'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($supportTickets as $supportTicket)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $supportTicket->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $supportTicket->id }}
                            </td>
                            <td>
                                {{ $supportTicket->no_tiket }}
                            </td>
                            <td>
                                {{ $supportTicket->tanggal }}
                            </td>
                            <td>
                                @if($supportTicket->pelanggan)
                                    <span class="badge badge-relationship">{{ $supportTicket->pelanggan->nama_lengkap ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $supportTicket->title }}
                            </td>
                            <td>
                                {{ $supportTicket->update }}
                            </td>
                            <td>
                                {{ $supportTicket->status_label }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('support_ticket_show')
                                        <a class="mr-2 btn btn-sm btn-info" href="{{ route('admin.support-tickets.show', $supportTicket) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('support_ticket_edit')
                                        <a class="mr-2 btn btn-sm btn-success" href="{{ route('admin.support-tickets.edit', $supportTicket) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('support_ticket_delete')
                                        <button class="mr-2 btn btn-sm btn-rose" type="button" wire:click="confirm('delete', {{ $supportTicket->id }})" wire:loading.attr="disabled">
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
            {{ $supportTickets->links() }}
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
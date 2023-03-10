<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="w-full form-select sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('push_notification_delete')
                <button class="ml-3 btn btn-rose disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="PushNotification" format="csv" />
                <livewire:excel-export model="PushNotification" format="xlsx" />
                <livewire:excel-export model="PushNotification" format="pdf" />
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
                            {{ trans('cruds.pushNotification.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.pushNotification.fields.waktu_dikirim') }}
                            @include('components.table.sort', ['field' => 'waktu_dikirim'])
                        </th>
                        <th>
                            {{ trans('cruds.pushNotification.fields.judul') }}
                            @include('components.table.sort', ['field' => 'judul'])
                        </th>
                        <th>
                            {{ trans('cruds.pushNotification.fields.isi_notifikasi') }}
                            @include('components.table.sort', ['field' => 'isi_notifikasi'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pushNotifications as $pushNotification)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $pushNotification->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $pushNotification->id }}
                            </td>
                            <td>
                                {{ $pushNotification->waktu_dikirim }}
                            </td>
                            <td>
                                {{ $pushNotification->judul }}
                            </td>
                            <td>
                                {{ $pushNotification->isi_notifikasi }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('push_notification_show')
                                        <a class="mr-2 btn btn-sm btn-info" href="{{ route('admin.push-notifications.show', $pushNotification) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('push_notification_edit')
                                        <a class="mr-2 btn btn-sm btn-success" href="{{ route('admin.push-notifications.edit', $pushNotification) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('push_notification_delete')
                                        <button class="mr-2 btn btn-sm btn-rose" type="button" wire:click="confirm('delete', {{ $pushNotification->id }})" wire:loading.attr="disabled">
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
            {{ $pushNotifications->links() }}
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
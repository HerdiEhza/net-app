<x-admin-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>
    
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.edit') }}
                        {{ trans('cruds.kasKeluar.title_singular') }}:
                        {{ trans('cruds.kasKeluar.fields.id') }}
                        {{ $kasKeluar->id }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('kas-keluar.edit', [$kasKeluar])
            </div>
        </div>
    </div>
</x-admin-layout>
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
                        {{ trans('cruds.paket.title_singular') }}:
                        {{ trans('cruds.paket.fields.id') }}
                        {{ $paket->id }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('paket.edit', [$paket])
            </div>
        </div>
    </div>
</x-admin-layout>
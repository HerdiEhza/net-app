<x-admin-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>

    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.create') }}
                        {{ trans('cruds.kasKeluar.title_singular') }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('kas-keluar.create')
            </div>
        </div>
    </div>
</x-admin-layout>
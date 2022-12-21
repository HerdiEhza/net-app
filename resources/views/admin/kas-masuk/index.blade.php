<x-admin-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>
    
    <div class="row">
        <div class="bg-white card">
            <div class="border-b card-header border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.kasMasuk.title_singular') }}
                        {{ trans('global.list') }}
                    </h6>

                    @can('kas_masuk_create')
                        <a class="btn btn-indigo" href="{{ route('admin.kas-masuks.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.kasMasuk.title_singular') }}
                        </a>
                    @endcan
                </div>
            </div>
            @livewire('kas-masuk.index')

        </div>
    </div>
</x-admin-layout>
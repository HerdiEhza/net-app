<x-admin-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>
    
    <div class="row">
        <div class="bg-white card">
            <div class="border-b card-header border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.listTagihan.title_singular') }}
                        {{ trans('global.list') }}
                    </h6>

                    @can('list_tagihan_create')
                        <a class="btn btn-indigo" href="{{ route('admin.list-tagihans.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.listTagihan.title_singular') }}
                        </a>
                    @endcan
                </div>
            </div>
            @livewire('list-tagihan.index')

        </div>
    </div>
</x-admin-layout>
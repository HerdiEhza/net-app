<x-admin-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>
    
    <div class="row">
        <div class="bg-white card">
            <div class="border-b card-header border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.role.title_singular') }}
                        {{ trans('global.list') }}
                    </h6>

                    @can('role_create')
                        <a class="btn btn-indigo" href="{{ route('admin.roles.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.role.title_singular') }}
                        </a>
                    @endcan
                </div>
            </div>
            @livewire('role.index')

        </div>
    </div>
</x-admin-layout>
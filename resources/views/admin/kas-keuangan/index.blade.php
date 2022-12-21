<x-admin-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>
    
    <div class="bg-white">
        <div class="border-b card-header border-blueGray-200">
            <div class="card-header-container">
                
            </div>
        </div>
        @livewire('kas-keuangan.index')

    </div>
</x-admin-layout>
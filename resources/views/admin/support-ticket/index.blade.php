<x-admin-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>

    <div class="px-[-1.5rem] py-[-2rem]">
        @livewire('support-ticket.index')

    </div>

</x-admin-layout>

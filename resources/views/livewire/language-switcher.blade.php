<div>
    <a class="block text-blueGray-500" href="#" onclick="openDropdown(event,'{{ $this->id }}')">
        <div class="flex items-center">
            <span class="inline-flex items-center justify-center w-12 h-12 text-sm font-bold text-pink-400 uppercase rounded-full md:text-white">
                {{ $currentLanguage }}
            </span>
        </div>
    </a>
    <div class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48" id="{{ $this->id }}">
        @foreach($languages as $language)
            <a wire:click="changeLocale('{{ $language['short_code'] }}')" href="#" class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700 hover:text-indigo-600">
                {{ $language['title'] }}
            </a>
        @endforeach
    </div>
</div>
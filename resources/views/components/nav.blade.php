<header class="fixed top-0 left-0 right-0 h-16 px-4 py-3 md:left-60">
    <div class="flex items-center justify-between">
        <div>
            <button type="button"
                class="flex items-center p-2 font-semibold text-gray-600 transition border border-transparent rounded-lg focus:outline-none hover:text-yellow-600 focus:text-yellow-600 hover:border-yellow-300 focus:border-yellow-300">
                <span
                    class="inline-flex items-center justify-center w-6 h-6 mr-2 text-xs text-gray-600 transition bg-white rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                    </svg>
                </span>
                <span class="text-sm">Archive</span>
            </button>
        </div>
        <div class="text-lg font-bold">Today's Plan</div>
        @if(file_exists(app_path('Http/Livewire/LanguageSwitcher.php')))
            <ul class="flex-col items-center hidden list-none md:flex-row md:flex bg-blueGray-400">
                <livewire:language-switcher />
            </ul>
        @endif
        <div>
            <button type="button"
                class="flex items-center p-2 font-semibold text-gray-600 transition border border-transparent rounded-lg focus:outline-none hover:text-yellow-600 focus:text-yellow-600 hover:border-yellow-300 focus:border-yellow-300">
                <span class="text-sm">This week</span>
                <span
                    class="inline-flex items-center justify-center w-6 h-6 ml-2 text-xs text-gray-600 transition bg-white rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </span>
            </button>
        </div>
    </div>
</header>

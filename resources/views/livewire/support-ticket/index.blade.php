<div class="flex border-t">

    <div class="flex flex-col flex-shrink-0 w-64 bg-gray-50 overflow-hidden border-r border-gray-300 h-[calc(100vh-4.2rem)]">
        <button class="relative flex-shrink-0 text-sm focus:outline-none group">
            <div class="flex items-center justify-between w-full h-16 px-4 border-b border-gray-300 hover:bg-gray-200">
                <span class="font-medium">
                    All Ticket
                </span>
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="absolute z-10 flex-col items-start hidden w-full pb-1 bg-white shadow-lg group-focus:flex">
                <a class="w-full px-4 py-2 text-left bg-gray-300 hover:bg-gray-200" href="#">All Ticket</a>
                <a class="w-full px-4 py-2 text-left hover:bg-gray-300" href="#">Baru</a>
                <a class="w-full px-4 py-2 text-left hover:bg-gray-300" href="#">Sedang Dikerjakan</a>
                <a class="w-full px-4 py-2 text-left hover:bg-gray-300" href="#">Terselesaikan</a>
            </div>
        </button>
        <div class="flex-grow h-0 overflow-auto">
            <div class="px-3 mt-3 ">
                <button type="button" class="hidden w-full lg:flex items-center text-sm leading-6 text-slate-400 rounded-md ring-1 ring-slate-900/10 shadow-sm py-1.5 pl-2 pr-3 hover:ring-slate-300 dark:bg-slate-800 dark:highlight-white/5 dark:hover:bg-slate-700"><svg width="24" height="24" fill="none" aria-hidden="true" class="flex-none mr-3"><path d="m19 19-3.5-3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></circle></svg>Quick search...<span class="flex-none pl-3 ml-auto text-xs font-semibold">Ctrl K</span></button>
            </div>
            <div class="mt-4">
                <div id="messages_list" class="space-y-2">
                    <a class="flex items-center h-10 px-3 text-sm bg-gray-200 hover:bg-gray-300" href="#">
                        <div class="flex justify-center w-4">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <span class="ml-2 font-bold leading-none">Frodo Baggins</span>
                            <span class="ml-2 text-xs leading-none">internet lambat [#T-23]</span>
                        </div>
                        <span
                            class="flex items-center justify-center h-5 px-2 ml-auto text-xs font-medium text-white bg-blue-500 rounded-full">3</span>
                    </a>
                    <a class="flex items-center h-10 px-3 text-sm hover:bg-gray-300" href="#">
                        <div class="flex justify-center w-4">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <span class="ml-2 leading-none">Gandalf The Grey</span>
                            <span class="ml-2 text-xs leading-none">internet lambat [#T-23]</span>
                        </div>
                    </a>
                    <a class="flex items-center h-10 px-3 text-sm hover:bg-gray-300" href="#">
                        <div class="flex justify-center w-4">
                            <span class="w-2 h-2 border-2 border-gray-500 rounded-full"></span>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <span class="ml-2 leading-none text-gray-500">Gimli son of Gloin</span>
                            <span class="ml-2 text-xs leading-none text-gray-400">internet lambat [#T-23]</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col flex-grow h-[calc(100vh-4.2rem)]">
        <div class="flex items-center justify-between flex-shrink-0 h-16 px-4 bg-white border-b border-gray-300">
            <div>
                <h1 class="text-sm font-bold leading-none">internet lambat <span>[#T-23]</span></h1>
                <span class="text-xs leading-none">2022-05-19 13:33</span>
            </div>
            <div>
                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownDefaultRadio" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Baru <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

                <!-- Dropdown menu -->
                <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                    <li>
                        <div class="flex items-center">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">BARU</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">SEDANG DIKERJAKAN</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <input id="default-radio-3" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="default-radio-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">TERSELESAIKAN</label>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-grow overflow-auto">
            <div class="flex px-4 max-w-[75%] py-3">
                <div class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded"></div>
                <div class="ml-2">
                    <div class="-mt-1">
                        <span class="text-sm font-semibold">Frodo Baggins</span>
                        <span class="ml-1 text-xs text-gray-500">01:26</span>
                    </div>
                    <p class="text-sm">apakah internet sedang mengalami kendala ?</p>
                </div>
            </div>

            <div class="flex flex-col items-center mt-2">
                <hr class="w-full">
                <span
                    class="flex items-center justify-center h-6 px-3 mx-auto -mt-3 text-xs font-semibold bg-white border rounded-full">Today</span>
            </div>

            <div class="flex max-w-[75%] right-0 self-end px-4 py-3">
                <div class="mr-2">
                    <div class="-mt-1 text-right">
                        <span class="ml-1 text-xs text-gray-500">01:26</span>
                        <span class="text-sm font-semibold">{{ Auth::user()->name }}</span>
                    </div>
                    <p class="text-sm">Strangers from distant lands, friends of old. You have been summoned here to
                        answer the threat of Mordor. Middle-Earth stands upon the brink of destruction. None can escape
                        it. You will unite or you will fall. Each race is bound to this fate–this one doom. (gestures to
                        the pedestal) Bring forth the Ring, Frodo.
                    </p>
                </div>
                <div class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded"></div>
            </div>

            <div class="flex px-4 max-w-[75%] py-3">
                <div class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded"></div>
                <div class="ml-2">
                    <div class="-mt-1">
                        <span class="text-sm font-semibold">Frodo Baggins</span>
                        <span class="ml-1 text-xs text-gray-500">01:26</span>
                    </div>
                    <p class="text-sm">Middle-Earth stands upon the brink of destruction. None can escape it. You will unite or you will fall. Each race is bound to this fate–this one doom.</p>
                </div>
            </div>

            <div class="flex max-w-[75%] right-0 self-end px-4 py-3">
                <div class="mr-2">
                    <div class="-mt-1 text-right">
                        <span class="ml-1 text-xs text-gray-500">01:26</span>
                        <span class="text-sm font-semibold">{{ Auth::user()->name }}</span>
                    </div>
                    <p class="text-sm">Strangers from distant lands, friends of old. You have been summoned here to
                        answer the threat of Mordor. Middle-Earth stands upon the brink of destruction. None can escape
                        it. You will unite or you will fall. Each race is bound to this fate–this one doom. (gestures to
                        the pedestal) Bring forth the Ring, Frodo.
                    </p>
                </div>
                <div class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded"></div>
            </div>

        </div>
        <div class="h-12 px-4 pb-4 bg-white">
            <div class="flex items-center p-1 border-2 border-gray-300 rounded-sm">
                <button class="flex items-center justify-center flex-shrink w-6 h-6 rounded hover:bg-gray-200">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </button>
                <textarea class="flex-grow px-3 ml-1 text-sm border-l border-gray-300" style="resize: none;"
                    placeholder="Message council-of-elrond" cols="" rows="1"></textarea>
                <button class="flex items-center justify-center flex-shrink w-6 h-6 rounded hover:bg-gray-200">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button class="flex items-center justify-center flex-shrink w-6 h-6 rounded hover:bg-gray-200">
                    <span class="w-4 h-4 -mt-px leading-none">@</span>
                </button>
                <button class="flex items-center justify-center flex-shrink w-6 h-6 rounded hover:bg-gray-200">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button class="flex items-center justify-center flex-shrink w-6 h-6 rounded hover:bg-gray-200">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button class="flex items-center justify-center flex-shrink w-6 h-6 rounded hover:bg-gray-200">
                    <svg class="w-4 h-4 transform rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
        if (!confirm("{{ trans('global.areYouSure') }}")) {
            return
        }
        @this[e.callback](...e.argv)
    })
    </script>
@endpush

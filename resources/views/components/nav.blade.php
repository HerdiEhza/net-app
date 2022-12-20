<nav class="absolute top-0 left-0 z-10 flex items-center w-full p-4 bg-transparent md:flex-row md:flex-nowrap md:justify-start">
    <div class="flex flex-wrap items-center justify-between w-full px-4 mx-auto md:flex-nowrap md:px-10">
        <a class="hidden text-sm font-semibold text-white uppercase lg:inline-block" href="#">
            {{-- Dashboard --}}
        </a>

        {{-- If you use user icon and menu add margin mr-3 to search --}}
        {{-- <form class="flex-row flex-wrap items-center hidden mr-3 md:flex lg:ml-auto"> --}}
        <form class="flex-row flex-wrap items-center hidden md:flex lg:ml-auto">

        </form>



        @if(file_exists(app_path('Http/Livewire/LanguageSwitcher.php')))
            <ul class="flex-col items-center hidden list-none md:flex-row md:flex">
                <livewire:language-switcher />
            </ul>
        @endif

        {{-- User icon and menu --}}
        {{--
        <ul class="flex-col items-center hidden list-none md:flex-row md:flex">
            <a class="block text-blueGray-500" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
                <div class="flex items-center">
                    <span class="inline-flex items-center justify-center w-12 h-12 text-sm text-white rounded-full bg-blueGray-200"><img alt="..." class="w-full align-middle border-none rounded-full shadow-lg" src="https://demos.creative-tim.com/notus-js/assets/img/team-1-800x800.jpg" /></span>
                </div>
            </a>
            <div class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48" id="user-dropdown">
                <a href="#pablo" class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700">Action</a><a href="#pablo" class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700">Another action</a><a href="#pablo" class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700">Something else here</a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a href="#pablo" class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700">Seprated link</a>
            </div>
        </ul>
         --}}
    </div>
</nav>
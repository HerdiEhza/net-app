<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <title>{{ trans('panel.site_title') }}</title>

    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')

    <style>
        /* Only the scroll bar */
        ::-webkit-scrollbar {
            width: .5rem;
            height: .5rem;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, .15);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, .3);
        }
    </style>
</head>

<body class="antialiased text-blueGray-800">

    <noscript>You need to enable JavaScript to run this app.</noscript>

    <div id="app">
        <x-sidebar />

        <div class="flex flex-col">
            <x-nav />

            @if(session('status'))
                <x-alert message="{{ session('status') }}" variant="indigo" role="alert" />
            @endif

            <main class="h-[calc(100vh-4rem)] z-10 mt-16 overflow-auto ml-0 md:ml-60">
                <div class="px-6 py-8">
                    @isset($slot)
                        {{ $slot }}
                    @endisset
                    {{-- @yield('content') --}}
                </div>
            </main>

        </div>

    </div>

    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>

    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    {{-- <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> --}}

    <script>
        /* Sidebar - Side navigation menu on mobile/responsive mode */
        window.toggleNavbar = function (collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
        };

        /* Opens sidebar navigation that contains sub-items */
        window.openSubNav = function (el) {
            el.nextElementSibling.classList.toggle("hidden");
        };

        window.initialSubNavLoad = function () {
            document
                .getElementsByClassName("has-sub sidebar-nav-active")
                .forEach(function (el) {
                    window.openSubNav(el);
                });
        };

        /* Opens sidebar navigation that contains sub-items */
        initialSubNavLoad();

        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: "bottom-start",
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");

            if (dropdownID == "nav-notification-dropdown") {
                fetch("/admin/user-alerts/seen");
            }
        };
    </script>

    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    @livewireScripts
    @yield('scripts')
    @stack('scripts')
    <script>
        function closeAlert(event){
            let element = event.target;
            while(element.nodeName !== "BUTTON"){
                element = element.parentNode;
            }
            element.parentNode.parentNode.removeChild(element.parentNode);
        }
    </script>
</body>

</html>

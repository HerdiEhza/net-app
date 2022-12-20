<aside class="fixed inset-y-0 left-0 hidden h-full max-h-screen bg-gray-100 md:block w-60">
    <div class="flex flex-col h-full">
        <div class="h-16 px-4 py-6 text-center">
            <h1 class="text-xl font-bold leading-none">
                <span class="text-yellow-700">RT / RW Net</span> App
            </h1>
        </div>
        <div class="p-4 h-[calc(100vh-8rem)] overflow-y-auto">
            <nav class="space-y-2">
                <a href="{{ route("admin.home") }}" @click="$event.preventDefault(); open = !open"
                    class="{{ request()->is("admin") ? "sidebar-nav-active" : "sidebar-nav" }} flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white"
                    :class="{'bg-white dark:bg-white': isActive || open}" role="button"
                    aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'"
                >
                    <span aria-hidden="true">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </span>
                    <span class="ml-2 text-sm">
                        {{ trans('global.dashboard') }}
                    </span>
                </a>
                <div x-data="{ isActive: false, open: false}">
                    <!-- active & hover classes 'bg-white dark:bg-white' -->
                    <a href="#" @click="$event.preventDefault(); open = !open"
                        class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white"
                        :class="{'bg-white dark:bg-white': isActive || open}" role="button"
                        aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                        <span aria-hidden="true">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm"> Dashboards </span>
                        <span class="ml-auto" aria-hidden="true">
                            <!-- active class 'rotate-180' -->
                            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </a>
                    <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                        <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                        <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                        <a href="#" role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                            Default
                        </a>
                        <a href="#" role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                            Project Mangement
                        </a>
                        <a href="#" role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                            E-Commerce
                        </a>
                    </div>
                </div>

                <!-- Layouts links -->
                <div x-data="{ isActive: true, open: true}">
                    <!-- active & hover classes 'bg-white dark:bg-white' -->
                    <a href="#" @click="$event.preventDefault(); open = !open"
                        class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white"
                        :class="{'bg-white dark:bg-white': isActive || open}" role="button"
                        aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                        <span aria-hidden="true">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm"> Layouts </span>
                        <span aria-hidden="true" class="ml-auto">
                            <!-- active class 'rotate-180' -->
                            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </a>
                    <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                        <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                        <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                        <a href="#" role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                            Two Columns Sidebar
                        </a>
                        <a href="#" role="menuitem"
                            class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700">
                            Mini + One Columns Sidebar
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="fixed bottom-0 h-16 px-4 w-60">
            <a href="javascript:void(0)" class="flex items-center px-2 py-2 text-gray-600 bg-white rounded-md">
                <img class="w-10 h-10 p-[0.1rem] mr-3 rounded-full ring-2 ring-green-400 dark:ring-green-600"
                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Bordered avatar">
                <div>
                    <h3 class="text-sm font-bold ">Herdi Ehza Saputra</h3>
                    <p class="text-xs">Administrator</p>
                </div>
            </a>
        </div>
    </div>
</aside>
{{-- <nav
    class="relative z-10 flex flex-wrap items-center justify-between px-6 py-4 bg-white shadow-xl md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden md:w-64">
    <div
        class="flex flex-wrap items-center justify-between w-full px-0 mx-auto md:flex-col md:items-stretch md:min-h-full md:flex-nowrap">
        <button
            class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden"
            type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-blueGray-700 whitespace-nowrap"
            href="{{ route('admin.home') }}">
            {{ trans('panel.site_title') }}
        </a>
        <div class="absolute top-0 left-0 right-0 z-40 items-center flex-1 hidden h-auto overflow-x-hidden overflow-y-auto rounded shadow md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none"
            id="example-collapse-sidebar">
            <div class="block pb-4 mb-4 border-b border-solid md:min-w-full md:hidden border-blueGray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-blueGray-700 whitespace-nowrap"
                            href="{{ route('admin.home') }}">
                            {{ trans('panel.site_title') }}
                        </a>
                    </div>
                    <div class="flex justify-end w-6/12">
                        <button type="button"
                            class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden"
                            onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>



            <!-- Divider -->
            <div class="flex md:hidden">
                @if(file_exists(app_path('Http/Livewire/LanguageSwitcher.php')))
                <livewire:language-switcher />
                @endif
            </div>
            <hr class="mb-6 md:min-w-full" />
            <!-- Heading -->

            <ul class="flex flex-col list-none md:flex-col md:min-w-full">
                <li class="items-center">
                    <a href="{{ route("admin.home") }}"
                        class="{{ request()->is("admin") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fas fa-tv"></i>
                        {{ trans('global.dashboard') }}
                    </a>
                </li>

                @can('user_management_access')
                <li class="items-center">
                    <a class="has-sub {{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="#" onclick="window.openSubNav(this)">
                        <i class="fa-fw fas c-sidebar-nav-icon fa-users">
                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="hidden ml-4 subnav">
                        @can('permission_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/permissions*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.permissions.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-unlock-alt">
                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                        @endcan
                        @can('role_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/roles*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.roles.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.users.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-user">
                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan
                @can('paket_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/pakets*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.pakets.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.paket.title') }}
                    </a>
                </li>
                @endcan
                @can('pelanggan_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/pelanggans*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.pelanggans.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.pelanggan.title') }}
                    </a>
                </li>
                @endcan
                @can('laporan_access')
                <li class="items-center">
                    <a class="has-sub {{ request()->is("admin/pembayarans*")||request()->is("admin/tagihans*")||request()->is("admin/lokasi-pemasangans*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="#" onclick="window.openSubNav(this)">
                        <i class="fa-fw fas c-sidebar-nav-icon fa-cogs">
                        </i>
                        {{ trans('cruds.laporan.title') }}
                    </a>
                    <ul class="hidden ml-4 subnav">
                        @can('pembayaran_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/pembayarans*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.pembayarans.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                </i>
                                {{ trans('cruds.pembayaran.title') }}
                            </a>
                        </li>
                        @endcan
                        @can('tagihan_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/tagihans*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.tagihans.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                </i>
                                {{ trans('cruds.tagihan.title') }}
                            </a>
                        </li>
                        @endcan
                        @can('lokasi_pemasangan_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/lokasi-pemasangans*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.lokasi-pemasangans.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                </i>
                                {{ trans('cruds.lokasiPemasangan.title') }}
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan
                @can('list_tagihan_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/list-tagihans*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.list-tagihans.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.listTagihan.title') }}
                    </a>
                </li>
                @endcan
                @can('kas_keuangan_access')
                <li class="items-center">
                    <a class="has-sub {{ request()->is("admin/kas-keluars*")||request()->is("admin/kas-masuks*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="#" onclick="window.openSubNav(this)">
                        <i class="fa-fw fas c-sidebar-nav-icon fa-cogs">
                        </i>
                        {{ trans('cruds.kasKeuangan.title') }}
                    </a>
                    <ul class="hidden ml-4 subnav">
                        @can('kas_keluar_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/kas-keluars*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.kas-keluars.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                </i>
                                {{ trans('cruds.kasKeluar.title') }}
                            </a>
                        </li>
                        @endcan
                        @can('kas_masuk_access')
                        <li class="items-center">
                            <a class="{{ request()->is("admin/kas-masuks*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                                href="{{ route("admin.kas-masuks.index") }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                </i>
                                {{ trans('cruds.kasMasuk.title') }}
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan
                @can('push_notification_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/push-notifications*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.push-notifications.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.pushNotification.title') }}
                    </a>
                </li>
                @endcan
                @can('support_ticket_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/support-tickets*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.support-tickets.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.supportTicket.title') }}
                    </a>
                </li>
                @endcan
                @can('pendaftaran_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/pendaftarans*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.pendaftarans.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.pendaftaran.title') }}
                    </a>
                </li>
                @endcan
                @can('setting_access')
                <li class="items-center">
                    <a class="{{ request()->is("admin/settings*") ? "sidebar-nav-active" : "sidebar-nav" }}"
                        href="{{ route("admin.settings.index") }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                        </i>
                        {{ trans('cruds.setting.title') }}
                    </a>
                </li>
                @endcan

                @if(file_exists(app_path('Http/Controllers/Auth/UserProfileController.php')))
                @can('auth_profile_edit')
                <li class="items-center">
                    <a href="{{ route("profile.show") }}"
                        class="{{ request()->is("profile") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fa-fw c-sidebar-nav-icon fas fa-user-circle"></i>
                        {{ trans('global.my_profile') }}
                    </a>
                </li>
                @endcan
                @endif

                <li class="items-center">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();"
                        class="sidebar-nav">
                        <i class="fa-fw fas fa-sign-out-alt"></i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}

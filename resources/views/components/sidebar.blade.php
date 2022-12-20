<nav class="relative z-10 flex flex-wrap items-center justify-between px-6 py-4 bg-white shadow-xl md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden md:w-64">
    <div class="flex flex-wrap items-center justify-between w-full px-0 mx-auto md:flex-col md:items-stretch md:min-h-full md:flex-nowrap">
        <button class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-blueGray-700 whitespace-nowrap" href="{{ route('admin.home') }}">
            {{ trans('panel.site_title') }}
        </a>
        <div class="absolute top-0 left-0 right-0 z-40 items-center flex-1 hidden h-auto overflow-x-hidden overflow-y-auto rounded shadow md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none" id="example-collapse-sidebar">
            <div class="block pb-4 mb-4 border-b border-solid md:min-w-full md:hidden border-blueGray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-blueGray-700 whitespace-nowrap" href="{{ route('admin.home') }}">
                            {{ trans('panel.site_title') }}
                        </a>
                    </div>
                    <div class="flex justify-end w-6/12">
                        <button type="button" class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden" onclick="toggleNavbar('example-collapse-sidebar')">
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
                    <a href="{{ route("admin.home") }}" class="{{ request()->is("admin") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fas fa-tv"></i>
                        {{ trans('global.dashboard') }}
                    </a>
                </li>

                @can('user_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-users">
                            </i>
                            {{ trans('cruds.userManagement.title') }}
                        </a>
                        <ul class="hidden ml-4 subnav">
                            @can('permission_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/permissions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.permissions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-unlock-alt">
                                        </i>
                                        {{ trans('cruds.permission.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/roles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.roles.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.role.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.users.index") }}">
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
                        <a class="{{ request()->is("admin/pakets*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.pakets.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.paket.title') }}
                        </a>
                    </li>
                @endcan
                @can('pelanggan_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/pelanggans*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.pelanggans.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.pelanggan.title') }}
                        </a>
                    </li>
                @endcan
                @can('laporan_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/pembayarans*")||request()->is("admin/tagihans*")||request()->is("admin/lokasi-pemasangans*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-cogs">
                            </i>
                            {{ trans('cruds.laporan.title') }}
                        </a>
                        <ul class="hidden ml-4 subnav">
                            @can('pembayaran_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/pembayarans*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.pembayarans.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.pembayaran.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('tagihan_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/tagihans*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.tagihans.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.tagihan.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('lokasi_pemasangan_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/lokasi-pemasangans*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.lokasi-pemasangans.index") }}">
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
                        <a class="{{ request()->is("admin/list-tagihans*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.list-tagihans.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.listTagihan.title') }}
                        </a>
                    </li>
                @endcan
                @can('kas_keuangan_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/kas-keluars*")||request()->is("admin/kas-masuks*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-cogs">
                            </i>
                            {{ trans('cruds.kasKeuangan.title') }}
                        </a>
                        <ul class="hidden ml-4 subnav">
                            @can('kas_keluar_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/kas-keluars*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.kas-keluars.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.kasKeluar.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('kas_masuk_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/kas-masuks*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.kas-masuks.index") }}">
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
                        <a class="{{ request()->is("admin/push-notifications*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.push-notifications.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.pushNotification.title') }}
                        </a>
                    </li>
                @endcan
                @can('support_ticket_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/support-tickets*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.support-tickets.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.supportTicket.title') }}
                        </a>
                    </li>
                @endcan
                @can('pendaftaran_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/pendaftarans*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.pendaftarans.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.pendaftaran.title') }}
                        </a>
                    </li>
                @endcan
                @can('setting_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/settings*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.settings.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.setting.title') }}
                        </a>
                    </li>
                @endcan

                @if(file_exists(app_path('Http/Controllers/Auth/UserProfileController.php')))
                    @can('auth_profile_edit')
                        <li class="items-center">
                            <a href="{{ route("profile.show") }}" class="{{ request()->is("profile") ? "sidebar-nav-active" : "sidebar-nav" }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-user-circle"></i>
                                {{ trans('global.my_profile') }}
                            </a>
                        </li>
                    @endcan
                @endif

                <li class="items-center">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="sidebar-nav">
                        <i class="fa-fw fas fa-sign-out-alt"></i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
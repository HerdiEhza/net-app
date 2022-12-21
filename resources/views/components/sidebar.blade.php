<aside class="fixed inset-y-0 left-0 hidden h-full max-h-screen bg-gray-100 md:block w-60">
    <div class="flex flex-col h-full">
        <div class="h-16 px-4 py-6 text-center">
            <h1 class="text-xl font-bold leading-none">
                <span class="text-yellow-700">RT / RW Net</span> App
            </h1>
        </div>
        <div class="p-4 h-[calc(100vh-8rem)] overflow-y-auto">
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route("admin.home") }}"
                            class="{{ request()->is("admin") ? "bg-white dark:bg-white" : "" }} flex items-center w-full p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white"
                        >
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm whitespace-nowrap" sidebar-toggle-item>{{ trans('global.dashboard') }}</span>
                        </a>
                    </li>

                    @can('user_management_access')
                    <li>
                        <button type="button" class="{{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*") ? 'bg-white dark:bg-white' : '' }} flex items-center w-full p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white" aria-controls="user-management-dropdown" data-collapse-toggle="user-management-dropdown">
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm whitespace-nowrap" sidebar-toggle-item>{{ trans('cruds.userManagement.title') }}</span>
                            <span class="ml-auto" aria-hidden="true">
                                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </span>
                        </button>
                        <ul id="user-management-dropdown" class="{{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*") ? '' : 'hidden' }} pl-[1.12rem]">
                            @can('permission_access')
                            <li class="pl-3 border-l {{ request()->is("admin/permissions*") ? "border-gray-400" : "" }}">
                                <a class="block p-2 text-sm transition-colors duration-200 rounded-md {{ request()->is("admin/permissions*") ? "text-gray-700 dark:text-light dark:hover:text-light hover:text-gray-700" : "text-gray-400 dark:text-gray-400 dark:hover:text-light hover:text-gray-700" }}"
                                    href="{{ route("admin.permissions.index") }}">
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                            @endcan
                            @can('role_access')
                            <li class="pl-3 border-l {{ request()->is("admin/roles*") ? "border-gray-400" : "" }}">
                                <a class="block p-2 text-sm transition-colors duration-200 rounded-md {{ request()->is("admin/roles*") ? "text-gray-700 dark:text-light dark:hover:text-light hover:text-gray-700" : "text-gray-400 dark:text-gray-400 dark:hover:text-light hover:text-gray-700" }}"
                                    href="{{ route("admin.roles.index") }}">
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                            @endcan
                            @can('user_access')
                            <li class="pl-3 border-l {{ request()->is("admin/users*") ? "border-gray-400" : "" }}">
                                <a class="block p-2 text-sm transition-colors duration-200 rounded-md {{ request()->is("admin/users*") ? "text-gray-700 dark:text-light dark:hover:text-light hover:text-gray-700" : "text-gray-400 dark:text-gray-400 dark:hover:text-light hover:text-gray-700" }}"
                                    href="{{ route("admin.users.index") }}">
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('paket_access')
                    <li>
                        <a href="{{ route("admin.pakets.index") }}"
                            class="{{ request()->is("admin/pakets*") ? "bg-white dark:bg-white" : "" }} flex items-center w-full p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white"
                        >
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm whitespace-nowrap">
                                {{ trans('cruds.paket.title') }}
                            </span>
                        </a>
                    </li>
                    @endcan

                    @can('pelanggan_access')
                    <li>
                        <a href="{{ route("admin.pelanggans.index") }}"
                            class="{{ request()->is("admin/pelanggans*") ? "bg-white dark:bg-white" : "" }} flex items-center w-full p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white"
                        >
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm whitespace-nowrap">
                                {{ trans('cruds.pelanggan.title') }}
                            </span>
                        </a>
                    </li>
                    @endcan

                    @can('laporan_access')
                    <li>
                        <button type="button" class="{{ request()->is("admin/pembayarans*")||request()->is("admin/tagihans*")||request()->is("admin/lokasi-pemasangans*") ? 'bg-white dark:bg-white' : '' }} flex items-center w-full p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white" aria-controls="laporan-dropdown" data-collapse-toggle="laporan-dropdown">
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm whitespace-nowrap" sidebar-toggle-item>{{ trans('cruds.laporan.title') }}</span>
                            <span class="ml-auto" aria-hidden="true">
                                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </span>
                        </button>
                        <ul id="laporan-dropdown" class="{{ request()->is("admin/pembayarans*")||request()->is("admin/tagihans*")||request()->is("admin/lokasi-pemasangans*") ? '' : 'hidden' }} pl-[1.12rem]">
                            @can('pembayaran_access')
                            <li class="pl-3 border-l {{ request()->is("admin/pembayarans*") ? "border-gray-400" : "" }}">
                                <a class="block p-2 text-sm transition-colors duration-200 rounded-md {{ request()->is("admin/pembayarans*") ? "text-gray-700 dark:text-light dark:hover:text-light hover:text-gray-700" : "text-gray-400 dark:text-gray-400 dark:hover:text-light hover:text-gray-700" }}"
                                    href="{{ route("admin.pembayarans.index") }}">
                                    {{ trans('cruds.pembayaran.title') }}
                                </a>
                            </li>
                            @endcan
                            @can('tagihan_access')
                            <li class="pl-3 border-l {{ request()->is("admin/tagihans*") ? "border-gray-400" : "" }}">
                                <a class="block p-2 text-sm transition-colors duration-200 rounded-md {{ request()->is("admin/tagihans*") ? "text-gray-700 dark:text-light dark:hover:text-light hover:text-gray-700" : "text-gray-400 dark:text-gray-400 dark:hover:text-light hover:text-gray-700" }}"
                                    href="{{ route("admin.tagihans.index") }}">
                                    {{ trans('cruds.tagihan.title') }}
                                </a>
                            </li>
                            @endcan
                            @can('lokasi_pemasangan_access')
                            <li class="pl-3 border-l {{ request()->is("admin/lokasi-pemasangans*") ? "border-gray-400" : "" }}">
                                <a class="block p-2 text-sm transition-colors duration-200 rounded-md {{ request()->is("admin/lokasi-pemasangans*") ? "text-gray-700 dark:text-light dark:hover:text-light hover:text-gray-700" : "text-gray-400 dark:text-gray-400 dark:hover:text-light hover:text-gray-700" }}"
                                    href="{{ route("admin.lokasi-pemasangans.index") }}">
                                    {{ trans('cruds.lokasiPemasangan.title') }}
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('list_tagihan_access')
                    <li>
                        <a href="{{ route("admin.list-tagihans.index") }}"
                            class="{{ request()->is("admin/list-tagihans*") ? "bg-white dark:bg-white" : "" }} flex items-center w-full p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white"
                        >
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm whitespace-nowrap">
                                {{ trans('cruds.listTagihan.title') }}
                            </span>
                        </a>
                    </li>
                    @endcan

                    @can('kas_keuangan_access')
                    <li>
                        <button type="button" class="{{ request()->is("admin/kas-keuangan*") || request()->is("admin/kas-keluars*")||request()->is("admin/kas-masuks*") ? 'bg-white dark:bg-white' : '' }} flex items-center w-full p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white" aria-controls="laporan-kas-dropdown" data-collapse-toggle="laporan-kas-dropdown">
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm whitespace-nowrap" sidebar-toggle-item>{{ trans('cruds.kasKeuangan.title') }}</span>
                            <span class="ml-auto" aria-hidden="true">
                                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </span>
                        </button>
                        <ul id="laporan-kas-dropdown" class="{{ request()->is("admin/kas-keuangan*") || request()->is("admin/kas-keluars*")||request()->is("admin/kas-masuks*") ? '' : 'hidden' }} pl-[1.12rem]">
                            <li class="pl-3 border-l {{ request()->is("admin/kas-keuangan*") ? "border-gray-400" : "" }}">
                                <a class="block p-2 text-sm transition-colors duration-200 rounded-md {{ request()->is("admin/kas-keuangan*") ? "text-gray-700 dark:text-light dark:hover:text-light hover:text-gray-700" : "text-gray-400 dark:text-gray-400 dark:hover:text-light hover:text-gray-700" }}"
                                    href="{{ route("admin.kas-keuangan.index") }}">
                                    Laporan Kas
                                </a>
                            </li>
                            @can('kas_keluar_access')
                            <li class="pl-3 border-l {{ request()->is("admin/kas-keluars*") ? "border-gray-400" : "" }}">
                                <a class="block p-2 text-sm transition-colors duration-200 rounded-md {{ request()->is("admin/kas-keluars*") ? "text-gray-700 dark:text-light dark:hover:text-light hover:text-gray-700" : "text-gray-400 dark:text-gray-400 dark:hover:text-light hover:text-gray-700" }}"
                                    href="{{ route("admin.kas-keluars.index") }}">
                                    {{ trans('cruds.kasKeluar.title') }}
                                </a>
                            </li>
                            @endcan
                            @can('kas_masuk_access')
                            <li class="pl-3 border-l {{ request()->is("admin/kas-masuks*") ? "border-gray-400" : "" }}">
                                <a class="block p-2 text-sm transition-colors duration-200 rounded-md {{ request()->is("admin/kas-masuks*") ? "text-gray-700 dark:text-light dark:hover:text-light hover:text-gray-700" : "text-gray-400 dark:text-gray-400 dark:hover:text-light hover:text-gray-700" }}"
                                    href="{{ route("admin.kas-masuks.index") }}">
                                    {{ trans('cruds.kasMasuk.title') }}
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('push_notification_access')
                    <li>
                        <a href="{{ route("admin.push-notifications.index") }}"
                            class="{{ request()->is("admin/push-notifications*") ? "bg-white dark:bg-white" : "" }} flex items-center w-full p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white"
                        >
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm whitespace-nowrap">
                                {{ trans('cruds.pushNotification.title') }}
                            </span>
                        </a>
                    </li>
                    @endcan

                    @can('support_ticket_access')
                    <li>
                        <a href="{{ route("admin.support-tickets.index") }}"
                            class="{{ request()->is("admin/support-tickets*") ? "bg-white dark:bg-white" : "" }} flex items-center w-full p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white"
                        >
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm whitespace-nowrap">
                                {{ trans('cruds.supportTicket.title') }}
                            </span>
                        </a>
                    </li>
                    @endcan

                    @can('pendaftaran_access')
                    <li>
                        <a href="{{ route("admin.pendaftarans.index") }}"
                            class="{{ request()->is("admin/pendaftarans*") ? "bg-white dark:bg-white" : "" }} flex items-center w-full p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white"
                        >
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm whitespace-nowrap">
                                {{ trans('cruds.pendaftaran.title') }}
                            </span>
                        </a>
                    </li>
                    @endcan

                    @can('setting_access')
                    <li>
                        <a href="{{ route("admin.settings.index") }}"
                            class="{{ request()->is("admin/settings*") ? "bg-white dark:bg-white" : "" }} flex items-center w-full p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-white dark:hover:bg-white"
                        >
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                                </svg>
                            </span>
                            <span class="ml-2 text-sm whitespace-nowrap">
                                {{ trans('cruds.setting.title') }}
                            </span>
                        </a>
                    </li>
                    @endcan

                    {{-- @if(file_exists(app_path('Http/Controllers/Auth/UserProfileController.php')))
                        @can('auth_profile_edit')
                        <li class="items-center">
                            <a href="{{ route("profile.show") }}"
                                class="{{ request()->is("profile") ? "sidebar-nav-active" : "sidebar-nav" }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-user-circle"></i>
                                {{ trans('global.my_profile') }}
                            </a>
                        </li>
                        @endcan
                    @endif --}}
                </ul>
            </nav>
        </div>
        <div class="fixed bottom-0 h-16 px-4 w-60">
            <x-profile-dropdown align="bottom">
                <x-slot name="trigger">
                    <button class="flex items-center w-full px-2 py-2 text-gray-600 bg-white rounded-md">
                        <img class="w-10 h-10 p-[0.1rem] mr-3 rounded-full ring-2 ring-green-400 dark:ring-green-600"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Bordered avatar">
                        <div class="text-left">
                            <h3 class="text-sm font-bold ">{{ Auth::user()->name }}</h3>
                            <p class="text-xs">Administrator</p>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-profile-dropdown>
        </div>
    </div>
</aside>

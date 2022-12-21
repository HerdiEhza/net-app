<div>
    <div class="overflow-hidden ">
        <div class="flex px-2 space-x-1 overflow-x-auto">
            <div class="w-full mt-2 space-y-2">
                <div class="flex justify-between">
                    <p>Kas Masuk</p>
                    <a href="#" class="px-2 py-1 text-sm font-medium text-center text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900">+ Input Pemasukan</a>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-2 py-3 rounded-l-lg">
                                No
                            </th>
                            <th class="px-2 py-3">
                                Tanggal
                            </th>
                            <th class="px-2 py-3">
                                Keterangan
                            </th>
                            <th class="px-2 py-3">
                                Nominal
                            </th>
                            <th class="px-2 py-3 rounded-r-lg">
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-xs bg-white dark:bg-gray-800">
                            <td class="px-2 py-4">
                                1
                            </td>
                            <td class="px-2 py-4">
                                21/12/2022
                            </td>
                            <th class="px-2 py-4 font-medium text-gray-900 dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-2 py-4">
                                IDR 2999
                            </td>
                            <td class="px-2 py-4">
                                <button>1</button>
                                <button>2</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="font-semibold text-gray-900 dark:text-white">
                            <th colspan="3" class="px-2 py-3 text-sm">Total Pemasukan</th>
                            <td colspan="2" class="px-2 py-3 text-xs">IDR 21.000.000.000</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
            <div class="w-full mt-2 space-y-2">
                <div class="flex justify-between">
                    <p>Kas Keluar</p>
                    <a href="#" class="px-2 py-1 text-sm font-medium text-center text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900">+ Input Pengeluaran</a>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-2 py-3 rounded-l-lg">
                                No
                            </th>
                            <th class="px-2 py-3">
                                Tanggal
                            </th>
                            <th class="px-2 py-3">
                                Keterangan
                            </th>
                            <th class="px-2 py-3">
                                Nominal
                            </th>
                            <th class="px-2 py-3 rounded-r-lg">
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-xs bg-white dark:bg-gray-800">
                            <td class="px-2 py-4">
                                1
                            </td>
                            <td class="px-2 py-4">
                                21/12/2022
                            </td>
                            <th class="px-2 py-4 font-medium text-gray-900 dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-2 py-4">
                                IDR 2999
                            </td>
                            <td class="px-2 py-4">
                                <button>1</button>
                                <button>2</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="font-semibold text-gray-900 dark:text-white">
                            <th colspan="3" class="px-2 py-3 text-sm">Total Pengeluaran</th>
                            <td colspan="2" class="px-2 py-3 text-xs">IDR 21.000</td>
                        </tr>
                    </tfoot>
                </table>
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
<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'paket_create',
            ],
            [
                'id'    => 19,
                'title' => 'paket_edit',
            ],
            [
                'id'    => 20,
                'title' => 'paket_show',
            ],
            [
                'id'    => 21,
                'title' => 'paket_delete',
            ],
            [
                'id'    => 22,
                'title' => 'paket_access',
            ],
            [
                'id'    => 23,
                'title' => 'pelanggan_create',
            ],
            [
                'id'    => 24,
                'title' => 'pelanggan_edit',
            ],
            [
                'id'    => 25,
                'title' => 'pelanggan_show',
            ],
            [
                'id'    => 26,
                'title' => 'pelanggan_delete',
            ],
            [
                'id'    => 27,
                'title' => 'pelanggan_access',
            ],
            [
                'id'    => 28,
                'title' => 'laporan_access',
            ],
            [
                'id'    => 29,
                'title' => 'pembayaran_create',
            ],
            [
                'id'    => 30,
                'title' => 'pembayaran_edit',
            ],
            [
                'id'    => 31,
                'title' => 'pembayaran_show',
            ],
            [
                'id'    => 32,
                'title' => 'pembayaran_delete',
            ],
            [
                'id'    => 33,
                'title' => 'pembayaran_access',
            ],
            [
                'id'    => 34,
                'title' => 'tagihan_create',
            ],
            [
                'id'    => 35,
                'title' => 'tagihan_edit',
            ],
            [
                'id'    => 36,
                'title' => 'tagihan_show',
            ],
            [
                'id'    => 37,
                'title' => 'tagihan_delete',
            ],
            [
                'id'    => 38,
                'title' => 'tagihan_access',
            ],
            [
                'id'    => 39,
                'title' => 'lokasi_pemasangan_create',
            ],
            [
                'id'    => 40,
                'title' => 'lokasi_pemasangan_edit',
            ],
            [
                'id'    => 41,
                'title' => 'lokasi_pemasangan_show',
            ],
            [
                'id'    => 42,
                'title' => 'lokasi_pemasangan_delete',
            ],
            [
                'id'    => 43,
                'title' => 'lokasi_pemasangan_access',
            ],
            [
                'id'    => 44,
                'title' => 'list_tagihan_create',
            ],
            [
                'id'    => 45,
                'title' => 'list_tagihan_edit',
            ],
            [
                'id'    => 46,
                'title' => 'list_tagihan_show',
            ],
            [
                'id'    => 47,
                'title' => 'list_tagihan_delete',
            ],
            [
                'id'    => 48,
                'title' => 'list_tagihan_access',
            ],
            [
                'id'    => 49,
                'title' => 'kas_keluar_create',
            ],
            [
                'id'    => 50,
                'title' => 'kas_keluar_edit',
            ],
            [
                'id'    => 51,
                'title' => 'kas_keluar_show',
            ],
            [
                'id'    => 52,
                'title' => 'kas_keluar_delete',
            ],
            [
                'id'    => 53,
                'title' => 'kas_keluar_access',
            ],
            [
                'id'    => 54,
                'title' => 'kas_keuangan_access',
            ],
            [
                'id'    => 55,
                'title' => 'kas_masuk_create',
            ],
            [
                'id'    => 56,
                'title' => 'kas_masuk_edit',
            ],
            [
                'id'    => 57,
                'title' => 'kas_masuk_show',
            ],
            [
                'id'    => 58,
                'title' => 'kas_masuk_delete',
            ],
            [
                'id'    => 59,
                'title' => 'kas_masuk_access',
            ],
            [
                'id'    => 60,
                'title' => 'push_notification_create',
            ],
            [
                'id'    => 61,
                'title' => 'push_notification_edit',
            ],
            [
                'id'    => 62,
                'title' => 'push_notification_show',
            ],
            [
                'id'    => 63,
                'title' => 'push_notification_delete',
            ],
            [
                'id'    => 64,
                'title' => 'push_notification_access',
            ],
            [
                'id'    => 65,
                'title' => 'support_ticket_create',
            ],
            [
                'id'    => 66,
                'title' => 'support_ticket_edit',
            ],
            [
                'id'    => 67,
                'title' => 'support_ticket_show',
            ],
            [
                'id'    => 68,
                'title' => 'support_ticket_delete',
            ],
            [
                'id'    => 69,
                'title' => 'support_ticket_access',
            ],
            [
                'id'    => 70,
                'title' => 'pendaftaran_create',
            ],
            [
                'id'    => 71,
                'title' => 'pendaftaran_edit',
            ],
            [
                'id'    => 72,
                'title' => 'pendaftaran_show',
            ],
            [
                'id'    => 73,
                'title' => 'pendaftaran_delete',
            ],
            [
                'id'    => 74,
                'title' => 'pendaftaran_access',
            ],
            [
                'id'    => 75,
                'title' => 'setting_create',
            ],
            [
                'id'    => 76,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 77,
                'title' => 'setting_show',
            ],
            [
                'id'    => 78,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 79,
                'title' => 'setting_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
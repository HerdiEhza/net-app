<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelanggan extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'pelanggans';

    public $orderable = [
        'id',
        'username',
        'email',
        'nama_lengkap',
        'perusahaan',
        'alamat',
        'nomor_hp',
        'nomor_whatsapp',
        'nomor_ktp',
        'nomor_virtual_account',
        'tanggal_pemasangan',
        'lokasi_pemasangan',
        'reseller',
        'catatan',
    ];

    public $filterable = [
        'id',
        'username',
        'email',
        'nama_lengkap',
        'perusahaan',
        'alamat',
        'nomor_hp',
        'nomor_whatsapp',
        'nomor_ktp',
        'nomor_virtual_account',
        'tanggal_pemasangan',
        'lokasi_pemasangan',
        'reseller',
        'catatan',
    ];

    protected $hidden = [
        'password',
    ];

    protected $dates = [
        'tanggal_pemasangan',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'username',
        'email',
        'password',
        'nama_lengkap',
        'perusahaan',
        'alamat',
        'nomor_hp',
        'nomor_whatsapp',
        'nomor_ktp',
        'nomor_virtual_account',
        'tanggal_pemasangan',
        'lokasi_pemasangan',
        'reseller',
        'catatan',
    ];

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = Hash::needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function getTanggalPemasanganAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setTanggalPemasanganAttribute($value)
    {
        $this->attributes['tanggal_pemasangan'] = $value ? Carbon::createFromFormat(config('project.datetime_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
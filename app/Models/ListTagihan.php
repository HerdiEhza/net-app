<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListTagihan extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const STATUS_SELECT = [
        'paid'   => 'Lunas',
        'unpaid' => 'Belum Lunas',
    ];

    public $table = 'list_tagihans';

    public $orderable = [
        'id',
        'no_tagihan',
        'nama_pelanggan.nama_lengkap',
        'alamat_pelanggan.alamat',
        'produk.nama_paket',
        'harga.tarif',
        'jatuh_tempo',
        'pesan',
        'status',
    ];

    public $filterable = [
        'id',
        'no_tagihan',
        'nama_pelanggan.nama_lengkap',
        'alamat_pelanggan.alamat',
        'produk.nama_paket',
        'harga.tarif',
        'jatuh_tempo',
        'pesan',
        'status',
    ];

    protected $dates = [
        'jatuh_tempo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_pelanggan_id',
        'alamat_pelanggan_id',
        'produk_id',
        'harga_id',
        'jatuh_tempo',
        'pesan',
        'status',
    ];

    public function namaPelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function alamatPelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function produk()
    {
        return $this->belongsTo(Paket::class);
    }

    public function harga()
    {
        return $this->belongsTo(Paket::class);
    }

    public function getJatuhTempoAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setJatuhTempoAttribute($value)
    {
        $this->attributes['jatuh_tempo'] = $value ? Carbon::createFromFormat(config('project.datetime_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getStatusLabelAttribute($value)
    {
        return static::STATUS_SELECT[$this->status] ?? null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
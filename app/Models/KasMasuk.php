<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KasMasuk extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'kas_masuks';

    public $orderable = [
        'id',
        'tanggal_transaksi',
        'keterangan',
        'nominal_transaksi',
    ];

    public $filterable = [
        'id',
        'tanggal_transaksi',
        'keterangan',
        'nominal_transaksi',
    ];

    protected $fillable = [
        'tanggal_transaksi',
        'keterangan',
        'nominal_transaksi',
    ];

    protected $dates = [
        'tanggal_transaksi',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getTanggalTransaksiAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setTanggalTransaksiAttribute($value)
    {
        $this->attributes['tanggal_transaksi'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
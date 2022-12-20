<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SupportTicket extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const STATUS_SELECT = [
        'new'         => 'Baru',
        'on_progress' => 'Sedang Dikerjakan',
        'done'        => 'Selesai',
    ];

    public $table = 'support_tickets';

    public $orderable = [
        'id',
        'no_tiket',
        'tanggal',
        'pelanggan.nama_lengkap',
        'title',
        'update',
        'status',
    ];

    public $filterable = [
        'id',
        'no_tiket',
        'tanggal',
        'pelanggan.nama_lengkap',
        'title',
        'update',
        'status',
    ];

    protected $dates = [
        'tanggal',
        'update',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'no_tiket',
        'tanggal',
        'pelanggan_id',
        'title',
        'update',
        'status',
    ];

    public function getTanggalAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setTanggalAttribute($value)
    {
        $this->attributes['tanggal'] = $value ? Carbon::createFromFormat(config('project.datetime_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function getUpdateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setUpdateAttribute($value)
    {
        $this->attributes['update'] = $value ? Carbon::createFromFormat(config('project.datetime_format'), $value)->format('Y-m-d H:i:s') : null;
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
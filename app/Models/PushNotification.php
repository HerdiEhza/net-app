<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PushNotification extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'push_notifications';

    public $orderable = [
        'id',
        'waktu_dikirim',
        'judul',
        'isi_notifikasi',
    ];

    public $filterable = [
        'id',
        'waktu_dikirim',
        'judul',
        'isi_notifikasi',
    ];

    protected $fillable = [
        'waktu_dikirim',
        'judul',
        'isi_notifikasi',
    ];

    protected $dates = [
        'waktu_dikirim',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getWaktuDikirimAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setWaktuDikirimAttribute($value)
    {
        $this->attributes['waktu_dikirim'] = $value ? Carbon::createFromFormat(config('project.datetime_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
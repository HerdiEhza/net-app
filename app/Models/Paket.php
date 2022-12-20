<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paket extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const CYCLE_SELECT = [
        'monthly' => 'Bulanan',
        'yearly'  => 'Tahunan',
    ];

    public $table = 'pakets';

    public $orderable = [
        'id',
        'id_tagihan',
        'nama_paket',
        'tarif',
        'cycle',
    ];

    public $filterable = [
        'id',
        'id_tagihan',
        'nama_paket',
        'tarif',
        'cycle',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id_tagihan',
        'nama_paket',
        'tarif',
        'cycle',
    ];

    public function getCycleLabelAttribute($value)
    {
        return static::CYCLE_SELECT[$this->cycle] ?? null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
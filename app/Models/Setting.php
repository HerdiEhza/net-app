<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Setting extends Model implements HasMedia
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use InteractsWithMedia;

    public const USE_LOGO_RADIO = [
        '1' => 'Yes',
        '0' => 'No',
    ];

    public const UNIQUE_CODE_SELECT = [
        '1' => 'Yes',
        '0' => 'No',
    ];

    public $table = 'settings';

    public $orderable = [
        'id',
        'nama_usaha',
        'admin_email',
        'nama_usaha_singkat',
        'alamat_usaha',
        'no_hp',
        'no_whatsapp',
        'email_perusahaan',
        'rekening_bank',
        'ppn',
        'tanggal_jatuh_tempo',
        'use_logo',
        'unique_code',
        'biaya_admin',
        'map_center',
        'pesan_wa_tagihan',
        'pesan_tagihan_lunas',
        'teks_login',
        'editor_tagihan',
        'format_print_pos',
    ];

    public $filterable = [
        'id',
        'nama_usaha',
        'admin_email',
        'nama_usaha_singkat',
        'alamat_usaha',
        'no_hp',
        'no_whatsapp',
        'email_perusahaan',
        'rekening_bank',
        'ppn',
        'tanggal_jatuh_tempo',
        'use_logo',
        'unique_code',
        'biaya_admin',
        'map_center',
        'pesan_wa_tagihan',
        'pesan_tagihan_lunas',
        'teks_login',
        'editor_tagihan',
        'format_print_pos',
    ];

    protected $appends = [
        'logo',
    ];

    protected $dates = [
        'tanggal_jatuh_tempo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_usaha',
        'admin_email',
        'nama_usaha_singkat',
        'alamat_usaha',
        'no_hp',
        'no_whatsapp',
        'email_perusahaan',
        'rekening_bank',
        'ppn',
        'tanggal_jatuh_tempo',
        'use_logo',
        'unique_code',
        'biaya_admin',
        'map_center',
        'pesan_wa_tagihan',
        'pesan_tagihan_lunas',
        'teks_login',
        'editor_tagihan',
        'format_print_pos',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $thumbnailWidth  = 50;
        $thumbnailHeight = 50;

        $thumbnailPreviewWidth  = 120;
        $thumbnailPreviewHeight = 120;

        $this->addMediaConversion('thumbnail')
            ->width($thumbnailWidth)
            ->height($thumbnailHeight)
            ->fit('crop', $thumbnailWidth, $thumbnailHeight);
        $this->addMediaConversion('preview_thumbnail')
            ->width($thumbnailPreviewWidth)
            ->height($thumbnailPreviewHeight)
            ->fit('crop', $thumbnailPreviewWidth, $thumbnailPreviewHeight);
    }

    public function getTanggalJatuhTempoAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setTanggalJatuhTempoAttribute($value)
    {
        $this->attributes['tanggal_jatuh_tempo'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getUseLogoLabelAttribute($value)
    {
        return static::USE_LOGO_RADIO[$this->use_logo] ?? null;
    }

    public function getLogoAttribute()
    {
        return $this->getMedia('setting_logo')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }

    public function getUniqueCodeLabelAttribute($value)
    {
        return static::UNIQUE_CODE_SELECT[$this->unique_code] ?? null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
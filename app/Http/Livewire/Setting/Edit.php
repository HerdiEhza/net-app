<?php

namespace App\Http\Livewire\Setting;

use App\Models\Setting;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Setting $setting;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    public function mount(Setting $setting)
    {
        $this->setting = $setting;
        $this->initListsForFields();
        $this->mediaCollections = [
            'setting_logo' => $setting->logo,
        ];
    }

    public function render()
    {
        return view('livewire.setting.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->setting->save();
        $this->syncMedia();

        return redirect()->route('admin.settings.index');
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->setting->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }

    protected function rules(): array
    {
        return [
            'setting.nama_usaha' => [
                'string',
                'min:10',
                'max:50',
                'nullable',
            ],
            'setting.admin_email' => [
                'email:rfc',
                'nullable',
            ],
            'setting.nama_usaha_singkat' => [
                'string',
                'nullable',
            ],
            'setting.alamat_usaha' => [
                'string',
                'nullable',
            ],
            'setting.no_hp' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'setting.no_whatsapp' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'setting.email_perusahaan' => [
                'email:rfc',
                'nullable',
            ],
            'setting.rekening_bank' => [
                'string',
                'nullable',
            ],
            'setting.ppn' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'setting.tanggal_jatuh_tempo' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'setting.use_logo' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['use_logo'])),
            ],
            'mediaCollections.setting_logo' => [
                'array',
                'nullable',
            ],
            'mediaCollections.setting_logo.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'setting.unique_code' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['unique_code'])),
            ],
            'setting.biaya_admin' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'setting.map_center' => [
                'string',
                'nullable',
            ],
            'setting.pesan_wa_tagihan' => [
                'string',
                'nullable',
            ],
            'setting.pesan_tagihan_lunas' => [
                'string',
                'nullable',
            ],
            'setting.teks_login' => [
                'string',
                'nullable',
            ],
            'setting.editor_tagihan' => [
                'string',
                'nullable',
            ],
            'setting.format_print_pos' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['use_logo']    = $this->setting::USE_LOGO_RADIO;
        $this->listsForFields['unique_code'] = $this->setting::UNIQUE_CODE_SELECT;
    }
}
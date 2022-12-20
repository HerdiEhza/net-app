<?php

namespace App\Http\Livewire\PushNotification;

use App\Models\PushNotification;
use Livewire\Component;

class Create extends Component
{
    public PushNotification $pushNotification;

    public function mount(PushNotification $pushNotification)
    {
        $this->pushNotification = $pushNotification;
    }

    public function render()
    {
        return view('livewire.push-notification.create');
    }

    public function submit()
    {
        $this->validate();

        $this->pushNotification->save();

        return redirect()->route('admin.push-notifications.index');
    }

    protected function rules(): array
    {
        return [
            'pushNotification.waktu_dikirim' => [
                'required',
                'date_format:' . config('project.datetime_format'),
            ],
            'pushNotification.judul' => [
                'string',
                'nullable',
            ],
            'pushNotification.isi_notifikasi' => [
                'string',
                'nullable',
            ],
        ];
    }
}
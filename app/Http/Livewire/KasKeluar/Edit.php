<?php

namespace App\Http\Livewire\KasKeluar;

use App\Models\KasKeluar;
use Livewire\Component;

class Edit extends Component
{
    public KasKeluar $kasKeluar;

    public function mount(KasKeluar $kasKeluar)
    {
        $this->kasKeluar = $kasKeluar;
    }

    public function render()
    {
        return view('livewire.kas-keluar.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->kasKeluar->save();

        return redirect()->route('admin.kas-keluars.index');
    }

    protected function rules(): array
    {
        return [
            'kasKeluar.tanggal_transaksi' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'kasKeluar.keterangan' => [
                'string',
                'nullable',
            ],
            'kasKeluar.nominal_transaksi' => [
                'numeric',
                'required',
            ],
        ];
    }
}
<?php

namespace App\Http\Livewire\KasKeluar;

use App\Models\KasKeluar;
use Livewire\Component;

class Create extends Component
{
    public KasKeluar $kasKeluar;

    public function mount(KasKeluar $kasKeluar)
    {
        $this->kasKeluar                    = $kasKeluar;
        $this->kasKeluar->nominal_transaksi = '0';
    }

    public function render()
    {
        return view('livewire.kas-keluar.create');
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
<?php

namespace App\Http\Livewire\KasMasuk;

use App\Models\KasMasuk;
use Livewire\Component;

class Edit extends Component
{
    public KasMasuk $kasMasuk;

    public function mount(KasMasuk $kasMasuk)
    {
        $this->kasMasuk = $kasMasuk;
    }

    public function render()
    {
        return view('livewire.kas-masuk.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->kasMasuk->save();

        return redirect()->route('admin.kas-masuks.index');
    }

    protected function rules(): array
    {
        return [
            'kasMasuk.tanggal_transaksi' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'kasMasuk.keterangan' => [
                'string',
                'nullable',
            ],
            'kasMasuk.nominal_transaksi' => [
                'numeric',
                'required',
            ],
        ];
    }
}
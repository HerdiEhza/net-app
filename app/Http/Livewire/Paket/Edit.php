<?php

namespace App\Http\Livewire\Paket;

use App\Models\Paket;
use Livewire\Component;

class Edit extends Component
{
    public Paket $paket;

    public array $listsForFields = [];

    public function mount(Paket $paket)
    {
        $this->paket = $paket;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.paket.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->paket->save();

        return redirect()->route('admin.pakets.index');
    }

    protected function rules(): array
    {
        return [
            'paket.id_tagihan' => [
                'string',
                'required',
                'unique:pakets,id_tagihan,' . $this->paket->id,
            ],
            'paket.nama_paket' => [
                'string',
                'required',
            ],
            'paket.tarif' => [
                'numeric',
                'nullable',
            ],
            'paket.cycle' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['cycle'])),
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['cycle'] = $this->paket::CYCLE_SELECT;
    }
}
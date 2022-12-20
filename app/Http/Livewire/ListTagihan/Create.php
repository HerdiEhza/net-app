<?php

namespace App\Http\Livewire\ListTagihan;

use App\Models\ListTagihan;
use App\Models\Paket;
use App\Models\Pelanggan;
use Livewire\Component;

class Create extends Component
{
    public ListTagihan $listTagihan;

    public array $listsForFields = [];

    public function mount(ListTagihan $listTagihan)
    {
        $this->listTagihan         = $listTagihan;
        $this->listTagihan->status = 'unpaid';
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.list-tagihan.create');
    }

    public function submit()
    {
        $this->validate();

        $this->listTagihan->save();

        return redirect()->route('admin.list-tagihans.index');
    }

    protected function rules(): array
    {
        return [
            'listTagihan.nama_pelanggan_id' => [
                'integer',
                'exists:pelanggans,id',
                'nullable',
            ],
            'listTagihan.alamat_pelanggan_id' => [
                'integer',
                'exists:pelanggans,id',
                'nullable',
            ],
            'listTagihan.produk_id' => [
                'integer',
                'exists:pakets,id',
                'nullable',
            ],
            'listTagihan.harga_id' => [
                'integer',
                'exists:pakets,id',
                'nullable',
            ],
            'listTagihan.jatuh_tempo' => [
                'nullable',
                'date_format:' . config('project.datetime_format'),
            ],
            'listTagihan.pesan' => [
                'string',
                'nullable',
            ],
            'listTagihan.status' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['status'])),
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['nama_pelanggan']   = Pelanggan::pluck('nama_lengkap', 'id')->toArray();
        $this->listsForFields['alamat_pelanggan'] = Pelanggan::pluck('alamat', 'id')->toArray();
        $this->listsForFields['produk']           = Paket::pluck('nama_paket', 'id')->toArray();
        $this->listsForFields['harga']            = Paket::pluck('tarif', 'id')->toArray();
        $this->listsForFields['status']           = $this->listTagihan::STATUS_SELECT;
    }
}
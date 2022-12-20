<?php

namespace App\Http\Livewire\Pelanggan;

use App\Models\Pelanggan;
use Livewire\Component;

class Create extends Component
{
    public Pelanggan $pelanggan;

    public string $password = '';

    public function mount(Pelanggan $pelanggan)
    {
        $this->pelanggan = $pelanggan;
    }

    public function render()
    {
        return view('livewire.pelanggan.create');
    }

    public function submit()
    {
        $this->validate();
        $this->pelanggan->password = $this->password;
        $this->pelanggan->save();

        return redirect()->route('admin.pelanggans.index');
    }

    protected function rules(): array
    {
        return [
            'pelanggan.username' => [
                'string',
                'required',
                'unique:pelanggans,username',
            ],
            'pelanggan.email' => [
                'email:rfc',
                'required',
                'unique:pelanggans,email',
            ],
            'password' => [
                'string',
                'required',
            ],
            'pelanggan.nama_lengkap' => [
                'string',
                'required',
            ],
            'pelanggan.perusahaan' => [
                'string',
                'nullable',
            ],
            'pelanggan.alamat' => [
                'string',
                'required',
            ],
            'pelanggan.nomor_hp' => [
                'string',
                'required',
            ],
            'pelanggan.nomor_whatsapp' => [
                'string',
                'nullable',
            ],
            'pelanggan.nomor_ktp' => [
                'string',
                'nullable',
            ],
            'pelanggan.nomor_virtual_account' => [
                'string',
                'nullable',
            ],
            'pelanggan.tanggal_pemasangan' => [
                'required',
                'date_format:' . config('project.datetime_format'),
            ],
            'pelanggan.lokasi_pemasangan' => [
                'string',
                'required',
            ],
            'pelanggan.reseller' => [
                'string',
                'nullable',
            ],
            'pelanggan.catatan' => [
                'string',
                'nullable',
            ],
        ];
    }
}
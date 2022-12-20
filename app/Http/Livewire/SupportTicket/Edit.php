<?php

namespace App\Http\Livewire\SupportTicket;

use App\Models\Pelanggan;
use App\Models\SupportTicket;
use Livewire\Component;

class Edit extends Component
{
    public array $listsForFields = [];

    public SupportTicket $supportTicket;

    public function mount(SupportTicket $supportTicket)
    {
        $this->supportTicket = $supportTicket;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.support-ticket.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->supportTicket->save();

        return redirect()->route('admin.support-tickets.index');
    }

    protected function rules(): array
    {
        return [
            'supportTicket.no_tiket' => [
                'string',
                'nullable',
            ],
            'supportTicket.tanggal' => [
                'nullable',
                'date_format:' . config('project.datetime_format'),
            ],
            'supportTicket.pelanggan_id' => [
                'integer',
                'exists:pelanggans,id',
                'nullable',
            ],
            'supportTicket.title' => [
                'string',
                'nullable',
            ],
            'supportTicket.update' => [
                'nullable',
                'date_format:' . config('project.datetime_format'),
            ],
            'supportTicket.status' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['status'])),
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['pelanggan'] = Pelanggan::pluck('nama_lengkap', 'id')->toArray();
        $this->listsForFields['status']    = $this->supportTicket::STATUS_SELECT;
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SupportTicket;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SupportTicketController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('support_ticket_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.support-ticket.index');
    }

    public function create()
    {
        abort_if(Gate::denies('support_ticket_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.support-ticket.create');
    }

    public function edit(SupportTicket $supportTicket)
    {
        abort_if(Gate::denies('support_ticket_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.support-ticket.edit', compact('supportTicket'));
    }

    public function show(SupportTicket $supportTicket)
    {
        abort_if(Gate::denies('support_ticket_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $supportTicket->load('pelanggan');

        return view('admin.support-ticket.show', compact('supportTicket'));
    }
}
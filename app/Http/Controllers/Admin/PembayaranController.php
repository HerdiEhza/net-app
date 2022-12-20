<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PembayaranController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pembayaran_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pembayaran.index');
    }

    public function create()
    {
        abort_if(Gate::denies('pembayaran_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pembayaran.create');
    }

    public function edit(Pembayaran $pembayaran)
    {
        abort_if(Gate::denies('pembayaran_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pembayaran.edit', compact('pembayaran'));
    }

    public function show(Pembayaran $pembayaran)
    {
        abort_if(Gate::denies('pembayaran_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pembayaran.show', compact('pembayaran'));
    }
}
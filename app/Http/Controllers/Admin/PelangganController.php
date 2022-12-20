<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PelangganController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pelanggan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pelanggan.index');
    }

    public function create()
    {
        abort_if(Gate::denies('pelanggan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pelanggan.create');
    }

    public function edit(Pelanggan $pelanggan)
    {
        abort_if(Gate::denies('pelanggan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    public function show(Pelanggan $pelanggan)
    {
        abort_if(Gate::denies('pelanggan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pelanggan.show', compact('pelanggan'));
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LokasiPemasangan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LokasiPemasanganController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('lokasi_pemasangan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.lokasi-pemasangan.index');
    }

    public function create()
    {
        abort_if(Gate::denies('lokasi_pemasangan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.lokasi-pemasangan.create');
    }

    public function edit(LokasiPemasangan $lokasiPemasangan)
    {
        abort_if(Gate::denies('lokasi_pemasangan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.lokasi-pemasangan.edit', compact('lokasiPemasangan'));
    }

    public function show(LokasiPemasangan $lokasiPemasangan)
    {
        abort_if(Gate::denies('lokasi_pemasangan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.lokasi-pemasangan.show', compact('lokasiPemasangan'));
    }
}
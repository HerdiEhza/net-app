<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KasKeluar;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KasKeluarController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kas_keluar_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kas-keluar.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kas_keluar_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kas-keluar.create');
    }

    public function edit(KasKeluar $kasKeluar)
    {
        abort_if(Gate::denies('kas_keluar_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kas-keluar.edit', compact('kasKeluar'));
    }

    public function show(KasKeluar $kasKeluar)
    {
        abort_if(Gate::denies('kas_keluar_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kas-keluar.show', compact('kasKeluar'));
    }
}
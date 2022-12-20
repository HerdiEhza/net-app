<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PendaftaranController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pendaftaran_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pendaftaran.index');
    }

    public function create()
    {
        abort_if(Gate::denies('pendaftaran_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pendaftaran.create');
    }

    public function edit(Pendaftaran $pendaftaran)
    {
        abort_if(Gate::denies('pendaftaran_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pendaftaran.edit', compact('pendaftaran'));
    }

    public function show(Pendaftaran $pendaftaran)
    {
        abort_if(Gate::denies('pendaftaran_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pendaftaran.show', compact('pendaftaran'));
    }
}
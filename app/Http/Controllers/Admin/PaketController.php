<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PaketController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('paket_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paket.index');
    }

    public function create()
    {
        abort_if(Gate::denies('paket_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paket.create');
    }

    public function edit(Paket $paket)
    {
        abort_if(Gate::denies('paket_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paket.edit', compact('paket'));
    }

    public function show(Paket $paket)
    {
        abort_if(Gate::denies('paket_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paket.show', compact('paket'));
    }
}
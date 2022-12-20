<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tagihan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TagihanController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('tagihan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tagihan.index');
    }

    public function create()
    {
        abort_if(Gate::denies('tagihan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tagihan.create');
    }

    public function edit(Tagihan $tagihan)
    {
        abort_if(Gate::denies('tagihan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tagihan.edit', compact('tagihan'));
    }

    public function show(Tagihan $tagihan)
    {
        abort_if(Gate::denies('tagihan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tagihan.show', compact('tagihan'));
    }
}
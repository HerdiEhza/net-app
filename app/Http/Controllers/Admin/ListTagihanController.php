<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ListTagihan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ListTagihanController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('list_tagihan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.list-tagihan.index');
    }

    public function create()
    {
        abort_if(Gate::denies('list_tagihan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.list-tagihan.create');
    }

    public function edit(ListTagihan $listTagihan)
    {
        abort_if(Gate::denies('list_tagihan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.list-tagihan.edit', compact('listTagihan'));
    }

    public function show(ListTagihan $listTagihan)
    {
        abort_if(Gate::denies('list_tagihan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $listTagihan->load('namaPelanggan', 'alamatPelanggan', 'produk', 'harga');

        return view('admin.list-tagihan.show', compact('listTagihan'));
    }
}
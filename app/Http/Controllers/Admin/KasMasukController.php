<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KasMasuk;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KasMasukController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('kas_masuk_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kas-masuk.index');
    }

    public function create()
    {
        abort_if(Gate::denies('kas_masuk_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kas-masuk.create');
    }

    public function edit(KasMasuk $kasMasuk)
    {
        abort_if(Gate::denies('kas_masuk_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kas-masuk.edit', compact('kasMasuk'));
    }

    public function show(KasMasuk $kasMasuk)
    {
        abort_if(Gate::denies('kas_masuk_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.kas-masuk.show', compact('kasMasuk'));
    }
}
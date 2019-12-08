<?php

namespace App\Http\Controllers\Admin;

use App\Beneficiario;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPagoRequest;
use App\Http\Requests\StorePagoRequest;
use App\Http\Requests\UpdatePagoRequest;
use App\Pago;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PagosController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pago_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pagos = Pago::all();

        return view('admin.pagos.index', compact('pagos'));
    }

    public function create()
    {
        abort_if(Gate::denies('pago_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $usuario_cobras = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $beneficiario_pagos = Beneficiario::all()->pluck('ci', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.pagos.create', compact('usuario_cobras', 'beneficiario_pagos'));
    }

    public function store(StorePagoRequest $request)
    {
        $pago = Pago::create($request->all());

        return redirect()->route('admin.pagos.index');
    }

    public function edit(Pago $pago)
    {
        abort_if(Gate::denies('pago_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $usuario_cobras = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $beneficiario_pagos = Beneficiario::all()->pluck('ci', 'id')->prepend(trans('global.pleaseSelect'), '');

        $pago->load('usuario_cobra', 'beneficiario_pago');

        return view('admin.pagos.edit', compact('usuario_cobras', 'beneficiario_pagos', 'pago'));
    }

    public function update(UpdatePagoRequest $request, Pago $pago)
    {
        $pago->update($request->all());

        return redirect()->route('admin.pagos.index');
    }

    public function show(Pago $pago)
    {
        abort_if(Gate::denies('pago_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pago->load('usuario_cobra', 'beneficiario_pago');

        return view('admin.pagos.show', compact('pago'));
    }

    public function destroy(Pago $pago)
    {
        abort_if(Gate::denies('pago_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pago->delete();

        return back();
    }

    public function massDestroy(MassDestroyPagoRequest $request)
    {
        Pago::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

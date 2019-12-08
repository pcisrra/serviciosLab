<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMaquinaRequest;
use App\Http\Requests\StoreMaquinaRequest;
use App\Http\Requests\UpdateMaquinaRequest;
use App\Maquina;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MaquinasController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('maquina_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $maquinas = Maquina::all();

        return view('admin.maquinas.index', compact('maquinas'));
    }

    public function create()
    {
        abort_if(Gate::denies('maquina_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.maquinas.create');
    }

    public function store(StoreMaquinaRequest $request)
    {
        $maquina = Maquina::create($request->all());

        return redirect()->route('admin.maquinas.index');
    }

    public function edit(Maquina $maquina)
    {
        abort_if(Gate::denies('maquina_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.maquinas.edit', compact('maquina'));
    }

    public function update(UpdateMaquinaRequest $request, Maquina $maquina)
    {
        $maquina->update($request->all());

        return redirect()->route('admin.maquinas.index');
    }

    public function show(Maquina $maquina)
    {
        abort_if(Gate::denies('maquina_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.maquinas.show', compact('maquina'));
    }

    public function destroy(Maquina $maquina)
    {
        abort_if(Gate::denies('maquina_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $maquina->delete();

        return back();
    }

    public function massDestroy(MassDestroyMaquinaRequest $request)
    {
        Maquina::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

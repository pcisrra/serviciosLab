<?php

namespace App\Http\Controllers\Admin;

use App\Beneficiario;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProyectoRequest;
use App\Http\Requests\StoreProyectoRequest;
use App\Http\Requests\UpdateProyectoRequest;
use App\Maquina;
use App\Proyecto;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProyectosController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('proyecto_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $proyectos = Proyecto::all();

        return view('admin.proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        abort_if(Gate::denies('proyecto_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientes = Beneficiario::all()->pluck('ci', 'id')->prepend(trans('global.pleaseSelect'), '');

        $maquina_asignadas = Maquina::all()->pluck('codigo', 'id')->prepend(trans('global.pleaseSelect'), '');

        $usuario_aceptas = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $usuario_cargos = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.proyectos.create', compact('clientes', 'maquina_asignadas', 'usuario_aceptas', 'usuario_cargos'));
    }

    public function store(StoreProyectoRequest $request)
    {
        $proyecto = Proyecto::create($request->all());

        return redirect()->route('admin.proyectos.index');
    }

    public function edit(Proyecto $proyecto)
    {
        abort_if(Gate::denies('proyecto_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientes = Beneficiario::all()->pluck('ci', 'id')->prepend(trans('global.pleaseSelect'), '');

        $maquina_asignadas = Maquina::all()->pluck('codigo', 'id')->prepend(trans('global.pleaseSelect'), '');

        $usuario_aceptas = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $usuario_cargos = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $proyecto->load('cliente', 'maquina_asignada', 'usuario_acepta', 'usuario_cargo');

        return view('admin.proyectos.edit', compact('clientes', 'maquina_asignadas', 'usuario_aceptas', 'usuario_cargos', 'proyecto'));
    }

    public function update(UpdateProyectoRequest $request, Proyecto $proyecto)
    {
        $proyecto->update($request->all());

        return redirect()->route('admin.proyectos.index');
    }

    public function show(Proyecto $proyecto)
    {
        abort_if(Gate::denies('proyecto_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $proyecto->load('cliente', 'maquina_asignada', 'usuario_acepta', 'usuario_cargo');

        return view('admin.proyectos.show', compact('proyecto'));
    }

    public function destroy(Proyecto $proyecto)
    {
        abort_if(Gate::denies('proyecto_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $proyecto->delete();

        return back();
    }

    public function massDestroy(MassDestroyProyectoRequest $request)
    {
        Proyecto::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

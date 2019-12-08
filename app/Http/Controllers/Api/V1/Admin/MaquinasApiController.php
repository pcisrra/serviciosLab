<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMaquinaRequest;
use App\Http\Requests\UpdateMaquinaRequest;
use App\Http\Resources\Admin\MaquinaResource;
use App\Maquina;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MaquinasApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('maquina_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MaquinaResource(Maquina::all());
    }

    public function store(StoreMaquinaRequest $request)
    {
        $maquina = Maquina::create($request->all());

        return (new MaquinaResource($maquina))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Maquina $maquina)
    {
        abort_if(Gate::denies('maquina_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MaquinaResource($maquina);
    }

    public function update(UpdateMaquinaRequest $request, Maquina $maquina)
    {
        $maquina->update($request->all());

        return (new MaquinaResource($maquina))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Maquina $maquina)
    {
        abort_if(Gate::denies('maquina_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $maquina->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

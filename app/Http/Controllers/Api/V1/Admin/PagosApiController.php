<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePagoRequest;
use App\Http\Requests\UpdatePagoRequest;
use App\Http\Resources\Admin\PagoResource;
use App\Pago;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PagosApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pago_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PagoResource(Pago::with(['usuario_cobra', 'beneficiario_pago'])->get());
    }

    public function store(StorePagoRequest $request)
    {
        $pago = Pago::create($request->all());

        return (new PagoResource($pago))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Pago $pago)
    {
        abort_if(Gate::denies('pago_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PagoResource($pago->load(['usuario_cobra', 'beneficiario_pago']));
    }

    public function update(UpdatePagoRequest $request, Pago $pago)
    {
        $pago->update($request->all());

        return (new PagoResource($pago))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Pago $pago)
    {
        abort_if(Gate::denies('pago_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pago->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

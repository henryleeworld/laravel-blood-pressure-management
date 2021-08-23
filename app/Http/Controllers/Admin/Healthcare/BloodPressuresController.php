<?php

namespace App\Http\Controllers\Admin\Healthcare;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBloodPressureRequest;
use App\Http\Requests\StoreBloodPressureRequest;
use App\Http\Requests\UpdateBloodPressureRequest;
use App\Models\BloodPressure;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class BloodPressuresController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('blood_pressure_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bloodPressures = BloodPressure::all();

        return view('admin.healthcare.blood-pressures.index', compact('bloodPressures'));
    }

    public function create()
    {
        abort_if(Gate::denies('blood_pressure_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bloodPressures = BloodPressure::all()->pluck('id', 'user_id', 'measured_in', 'measured_at', 'diastolic_pressure', 'systolic_pressure', 'pulse_pressure', 'remark');

        return view('admin.healthcare.blood-pressures.create', compact('bloodPressures'));
    }

    public function store(StoreBloodPressureRequest $request)
    {
        $bloodPressure = BloodPressure::create($request->all());
        return redirect()->route('admin.healthcare.blood-pressures.index');
    }

    public function edit(BloodPressure $bloodPressure)
    {
        abort_if(Gate::denies('blood_pressure_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bloodPressures = BloodPressure::select(['id', 'user_id', 'measured_in', 'measured_at', 'diastolic_pressure', 'systolic_pressure', 'pulse_pressure', 'remark'])->findOrFail($bloodPressure->id);
        return view('admin.healthcare.blood-pressures.edit', compact('bloodPressures'));
    }

    public function update(UpdateBloodPressureRequest $request, BloodPressure $bloodPressure)
    {
        $bloodPressure->update($request->all());

        return redirect()->route('admin.healthcare.blood-pressures.index');
    }

    public function show(BloodPressure $bloodPressure)
    {
        abort_if(Gate::denies('blood_pressure_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.healthcare.blood-pressures.show', compact('bloodPressure'));
    }

    public function destroy(BloodPressure $bloodPressure)
    {
        abort_if(Gate::denies('blood_pressure_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bloodPressure->delete();

        return back();
    }

    public function massDestroy(MassDestroyBloodPressureRequest $request)
    {
        BloodPressure::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

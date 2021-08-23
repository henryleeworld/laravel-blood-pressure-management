@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.blood_pressure.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.healthcare.blood-pressures.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.title') . trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $bloodPressure->user_id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blood_pressure.fields.measured_in') }}
                        </th>
                        <td>
                            {{ $bloodPressure->measured_in }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blood_pressure.fields.measured_at') }}
                        </th>
                        <td>
                            {{ $bloodPressure->measured_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blood_pressure.fields.diastolic_pressure') }}
                        </th>
                        <td>
                            {{ $bloodPressure->diastolic_pressure }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blood_pressure.fields.systolic_pressure') }}
                        </th>
                        <td>
                            {{ $bloodPressure->systolic_pressure }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blood_pressure.fields.pulse_pressure') }}
                        </th>
                        <td>
                            {{ $bloodPressure->pulse_pressure }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blood_pressure.fields.remark') }}
                        </th>
                        <td>
                            {{ $bloodPressure->remark }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.healthcare.blood-pressures.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
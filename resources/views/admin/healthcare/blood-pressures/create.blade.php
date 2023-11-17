@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.blood_pressure.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.healthcare.blood-pressures.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="required" for="user_id">{{ trans('cruds.user.title') . trans('cruds.user.fields.id') }}</label>
                <input class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" type="text" name="user_id" id="user_id" value="{{ old('user_id', '') }}" required>
                @if($errors->has('user_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user_id') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.id_helper') }}</span>
            </div>
            <div class="mb-3">
                <label class="required" for="measured_in">{{ trans('cruds.blood_pressure.fields.measured_in') }}</label>
                <input class="form-control {{ $errors->has('measured_in') ? 'is-invalid' : '' }}" type="text" name="measured_in" id="measured_in" value="{{ old('measured_in', '') }}" required>
                @if($errors->has('measured_in'))
                    <div class="invalid-feedback">
                        {{ $errors->first('measured_in') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blood_pressure.fields.measured_in_helper') }}</span>
            </div>
            <div class="mb-3">
                <label class="required" for="measured_at">{{ trans('cruds.blood_pressure.fields.measured_at') }}</label>
                <input class="form-control {{ $errors->has('measured_at') ? 'is-invalid' : '' }}" type="text" name="measured_at" id="measured_at" value="{{ old('measured_at', '') }}" required>
                @if($errors->has('measured_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('measured_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blood_pressure.fields.measured_at_helper') }}</span>
            </div>
            <div class="mb-3">
                <label class="required" for="diastolic_pressure">{{ trans('cruds.blood_pressure.fields.diastolic_pressure') }}</label>
                <input class="form-control {{ $errors->has('diastolic_pressure') ? 'is-invalid' : '' }}" type="number" name="diastolic_pressure" id="diastolic_pressure" value="{{ old('diastolic_pressure', '') }}" required>
                @if($errors->has('diastolic_pressure'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diastolic_pressure') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blood_pressure.fields.diastolic_pressure_helper') }}</span>
            </div>
            <div class="mb-3">
                <label class="required" for="systolic_pressure">{{ trans('cruds.blood_pressure.fields.systolic_pressure') }}</label>
                <input class="form-control {{ $errors->has('systolic_pressure') ? 'is-invalid' : '' }}" type="number" name="systolic_pressure" id="systolic_pressure" value="{{ old('systolic_pressure', '') }}" required>
                @if($errors->has('systolic_pressure'))
                    <div class="invalid-feedback">
                        {{ $errors->first('systolic_pressure') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blood_pressure.fields.systolic_pressure_helper') }}</span>
            </div>
            <div class="mb-3">
                <label class="required" for="pulse_pressure">{{ trans('cruds.blood_pressure.fields.pulse_pressure') }}</label>
                <input class="form-control {{ $errors->has('pulse_pressure') ? 'is-invalid' : '' }}" type="number" name="pulse_pressure" id="pulse_pressure" value="{{ old('pulse_pressure', '') }}" required>
                @if($errors->has('pulse_pressure'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pulse_pressure') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blood_pressure.fields.pulse_pressure_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="remark">{{ trans('cruds.blood_pressure.fields.remark') }}</label>
                <input class="form-control {{ $errors->has('remark') ? 'is-invalid' : '' }}" type="text" name="remark" id="remark" value="{{ old('remark', '') }}">
                @if($errors->has('remark'))
                    <div class="invalid-feedback">
                        {{ $errors->first('remark') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.blood_pressure.fields.remark_helper') }}</span>
            </div>
            <div class="mb-0">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" integrity="sha512-/Ae8qSd9X8ajHk6Zty0m8yfnKJPlelk42HTJjOHDWs1Tjr41RfsSkceZ/8yyJGLkxALGMIYd5L2oGemy/x1PLg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (app()->getLocale() == 'zh_TW')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.zh-TW.min.js" integrity="sha512-0f3PeNxyzEd6Rz2tRTRa4ibD2y85wb35+CbpoTVLWBJggW4twGgeVXtEJKVKhkGjjcTMZPIofxbCNyO9pUg47w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js" integrity="sha512-2xXe2z/uA+2SyT/sTSt9Uq4jDKsT0lV4evd3eoE/oxKih8DSAsOF6LUb+ncafMJPAimWAXdu9W+yMXGrCVOzQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endif
<script>
$(function () {
    $('#measured_in').datepicker({
        format: 'yyyy-mm-dd',
        clearBtn: true,
        todayHighlight: true,
        zIndexOffset: 30,
        language: "{{ str_replace('_', '-', app()->getLocale()) }}",
    });
    $('#measured_at').timepicker({
        icons: {
            up: 'fas fa-chevron-up',
            down: 'fas fa-chevron-down'
        },
        template: 'dropdown',
        showInputs: true,
        showMeridian: false,
    });
});
</script>
@endsection
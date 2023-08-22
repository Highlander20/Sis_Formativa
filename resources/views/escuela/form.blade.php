<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('facultad') }}
            {{ Form::select('facultad_id', $facultades, $escuela->facultad_id, ['class' => 'form-control' . ($errors->has('facultad_id') ? ' is-invalid' : ''), 'placeholder' => 'Facultad Id']) }}
            {!! $errors->first('facultad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_escuela') }}
            {{ Form::text('nombre_esc', $escuela->nombre_esc, ['class' => 'form-control' . ($errors->has('nombre_esc') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Esc']) }}
            {!! $errors->first('nombre_esc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $escuela->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>

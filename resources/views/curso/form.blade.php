<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('escuela') }}
            {{ Form::select('escuela_id', $escuelas, $curso->escuela_id, ['class' => 'form-control' . ($errors->has('escuela_id') ? ' is-invalid' : ''), 'placeholder' => 'Escuela Id']) }}
            {!! $errors->first('escuela_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_curso') }}
            {{ Form::text('nombre_cur', $curso->nombre_cur, ['class' => 'form-control' . ($errors->has('nombre_cur') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cur']) }}
            {!! $errors->first('nombre_cur', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $curso->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>

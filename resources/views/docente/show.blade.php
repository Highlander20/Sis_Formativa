@extends('layouts.app')

@section('template_title')
    {{ $docente->name ?? "{{ __('Show') Docente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('docentes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Doc:</strong>
                            {{ $docente->nombre_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $docente->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $docente->grado }}
                        </div>
                        <div class="form-group">
                            <strong>Profesion:</strong>
                            {{ $docente->profesion }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $docente->email }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $docente->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $docente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $docente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Curso Id:</strong>
                            {{ $docente->curso_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

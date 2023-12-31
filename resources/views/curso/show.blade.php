@extends('layouts.app')

@section('template_title')
    {{ $curso->name ?? "{{ __('Show') Curso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Curso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cursos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Cur:</strong>
                            {{ $curso->nombre_cur }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $curso->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Escuela Id:</strong>
                            {{ $curso->escuela_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? "{{ __('Show') Proyecto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Pro:</strong>
                            {{ $proyecto->nombre_pro }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $proyecto->duracion }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $proyecto->autor }}
                        </div>
                        <div class="form-group">
                            <strong>Docente Id:</strong>
                            {{ $proyecto->docente_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

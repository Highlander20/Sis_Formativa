@extends('layouts.app')

@section('template_title')
    {{ $escuela->name ?? "{{ __('Show') Escuela" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Escuela</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('escuelas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Esc:</strong>
                            {{ $escuela->nombre_esc }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $escuela->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Facultad Id:</strong>
                            {{ $escuela->facultad_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

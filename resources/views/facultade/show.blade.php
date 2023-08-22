@extends('layouts.app')

@section('template_title')
    {{ $facultade->name ?? "{{ __('Show') Facultade" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Facultade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facultades.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Fac:</strong>
                            {{ $facultade->nombre_fac }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $facultade->codigo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

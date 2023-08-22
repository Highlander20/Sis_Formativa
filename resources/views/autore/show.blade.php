@extends('layouts.app')

@section('template_title')
    {{ $autore->name ?? "{{ __('Show') Autore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Autore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('autores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Aut:</strong>
                            {{ $autore->nombre_aut }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $autore->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $autore->email }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $autore->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $autore->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

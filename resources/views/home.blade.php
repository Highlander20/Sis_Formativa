@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">{{ __('INVESTIGACION FORMATIVA') }}</div>

                <div>
                    <a><img src="{{ asset('img/unu.png') }}" class="rounded float-start" alt="..." style="width: 200px; height: 200px; border: 2px solid rgb(25, 0, 255)"></a>

                    <a><img src="{{ asset('img/logo1.png') }}" class="rounded float-end" alt="..." style="width: 200px; height: 200px; border: 2px solid rgb(17, 0, 255)"></a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

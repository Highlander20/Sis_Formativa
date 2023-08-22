@extends('layouts.app')

@section('template_title')
    Escuela
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Escuelas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('escuelas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre Escuela</th>
										<th>Codigo</th>
										<th>Su Facultad</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($escuelas as $escuela)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $escuela->nombre_esc }}</td>
											<td>{{ $escuela->codigo }}</td>
											<td>{{ $escuela->facultade->nombre_fac }}</td>

                                            <td>
                                                <form action="{{ route('escuelas.destroy',$escuela->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('escuelas.show',$escuela->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('escuelas.edit',$escuela->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $escuelas->links() !!}
            </div>
        </div>
    </div>
@endsection

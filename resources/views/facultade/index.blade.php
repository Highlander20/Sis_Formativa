@extends('layouts.app')

@section('template_title')
    Facultade
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Facultades') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('facultades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Nombre Facultades</th>
										<th>Codigo</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facultades as $facultade)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $facultade->nombre_fac }}</td>
											<td>{{ $facultade->codigo }}</td>

                                            <td>
                                                <form action="{{ route('facultades.destroy',$facultade->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('facultades.show',$facultade->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('facultades.edit',$facultade->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $facultades->links() !!}
            </div>
        </div>
    </div>
@endsection

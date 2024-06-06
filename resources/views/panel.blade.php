@extends('layouts.admin')

@section('template_title')
    Mi panel
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Mi panel</span>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-4">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('panel') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row padding-1 p-1">
                                <div class="col-md-12">
                                    
                                    <div class="form-group mb-2 mb20">
                                        <label for="name" class="form-label">{{ __('Name') }}</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', Auth::user()->name ) }}" id="name" placeholder="Name">
                                        {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="email" class="form-label">{{ __('Email') }}</label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', Auth::user()->email) }}" id="email" placeholder="Email">
                                        {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="form-group mb-2 mb20">
                                        <label for="password" class="form-label">{{ __('password') }}</label>
                                        <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="" id="password" placeholder="password">
                                        {!! $errors->first('password', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                            
                                </div>
                                <div class="col-md-12 mt20 mt-2">
                                    <button type="submit" class="btn btn-primary">{{ __('Actualizar') }}</button>
                                    <a href="https://kalculadora-production.up.railway.app/" class="btn btn-danger">Volver</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
    
                                <span id="card_title">
                                    {{ __('User') }}
                                </span>
    
                                <div class="float-right">
                                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                      {{ __('Crear nuevo') }}
                                    </a>
                                  </div>
         
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success m-4">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
    
                        <div class="card-body bg-white">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
                                            
                                            <th>Name</th>
                                            <th>Email</th>
    
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
    
                                                <td>
                                                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('users.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <script>
            $(function () {
                                    $("#example1").DataTable({
                                        "pageLength": 10,
                                        "language": {
                                            "emptyTable": "No hay información",
                                            "info": "Mostrando _START_ a _END_ de _TOTAL_ ",
                                            "infoEmpty": "Mostrando 0 a 0 de 0 ",
                                            "infoFiltered": "(Filtrado de _MAX_ total)",
                                            "infoPostFix": "",
                                            "thousands": ",",
                                            "lengthMenu": "Mostrar _MENU_ ",
                                            "loadingRecords": "Cargando...",
                                            "processing": "Procesando...",
                                            "search": "Buscador:",
                                            "zeroRecords": "Sin resultados encontrados",
                                            "paginate": {
                                                "first": "Primero",
                                                "last": "Ultimo",
                                                "next": "Siguiente",
                                                "previous": "Anterior"
                                            }
                                        },
                                        "responsive": true, "lengthChange": true, "autoWidth": false,
                                        buttons: [{
                                            extend: 'collection',
                                            text: 'Reportes',
                                            orientation: 'landscape',
                                            buttons: [{
                                                text: 'Copiar',
                                                extend: 'copy',
                                            }, {
                                                extend: 'pdf'
                                            },{
                                                extend: 'csv'
                                            },{
                                                extend: 'excel'
                                            },{
                                                text: 'Imprimir',
                                                extend: 'print'
                                            }
                                            ]
                                        },
                                            {
                                                extend: 'colvis',
                                                text: 'Visor de columnas',
                                            }
                                        ],
                                    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                                });      </script>
    
    

            
        </div>
    </section>
@endsection

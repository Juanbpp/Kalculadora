@extends('layouts.admin')

@section('template_title')
    Registro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('registros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Dni</th>
										<th>Telefono</th>
										<th>Impuesto</th>
										<th>Id Net</th>
										<th>Id Convergente</th>
										<th>Id Tv</th>
										<th>Id Descuento</th>
										<th>Id Adicional 1</th>
										<th>Id Adicional 2</th>
										<th>Id Adicional 3</th>
										<th>Id Adicional 4</th>
										<th>Id Adicional 5</th>
										<th>Cantidad Adicional 1</th>
										<th>Cantidad Adicional 2</th>
										<th>Cantidad Adicional 3</th>
										<th>Cantidad Adicional 4</th>
										<th>Cantidad Adicional 5</th>
										<th>Id Movil 1</th>
										<th>Id Movil 2</th>
										<th>Id Movil 3</th>
										<th>Id Movil 4</th>
										<th>Id Movil 5</th>
										<th>Cantidad Movil 1</th>
										<th>Cantidad Movil 2</th>
										<th>Cantidad Movil 3</th>
										<th>Cantidad Movil 4</th>
										<th>Cantidad Movil 5</th>
										<th>Descuento Movil 1</th>
										<th>Descuento Movil 2</th>
										<th>Descuento Movil 3</th>
										<th>Descuento Movil 4</th>
										<th>Descuento Movil 5</th>
										<th>Pvp</th>
										<th>Codificacion</th>
										<th>Observaciones</th>
										<th>Id Codificacion</th>
										<th>Id User</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registros as $registro)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            
											<td>{{ $registro->DNI }}</td>
											<td>{{ $registro->telefono }}</td>
											<td>{{ $registro->impuesto }}</td>
											<td>{{ $registro->id_net }}</td>
											<td>{{ $registro->id_convergente }}</td>
											<td>{{ $registro->id_tv }}</td>
											<td>{{ $registro->id_descuento }}</td>
											<td>{{ $registro->id_adicional_1 }}</td>
											<td>{{ $registro->id_adicional_2 }}</td>
											<td>{{ $registro->id_adicional_3 }}</td>
											<td>{{ $registro->id_adicional_4 }}</td>
											<td>{{ $registro->id_adicional_5 }}</td>
											<td>{{ $registro->cantidad_adicional_1 }}</td>
											<td>{{ $registro->cantidad_adicional_2 }}</td>
											<td>{{ $registro->cantidad_adicional_3 }}</td>
											<td>{{ $registro->cantidad_adicional_4 }}</td>
											<td>{{ $registro->cantidad_adicional_5 }}</td>
											<td>{{ $registro->id_movil_1 }}</td>
											<td>{{ $registro->id_movil_2 }}</td>
											<td>{{ $registro->id_movil_3 }}</td>
											<td>{{ $registro->id_movil_4 }}</td>
											<td>{{ $registro->id_movil_5 }}</td>
											<td>{{ $registro->cantidad_movil_1 }}</td>
											<td>{{ $registro->cantidad_movil_2 }}</td>
											<td>{{ $registro->cantidad_movil_3 }}</td>
											<td>{{ $registro->cantidad_movil_4 }}</td>
											<td>{{ $registro->cantidad_movil_5 }}</td>
											<td>{{ $registro->descuento_movil_1 }}</td>
											<td>{{ $registro->descuento_movil_2 }}</td>
											<td>{{ $registro->descuento_movil_3 }}</td>
											<td>{{ $registro->descuento_movil_4 }}</td>
											<td>{{ $registro->descuento_movil_5 }}</td>
											<td>{{ $registro->pvp }}</td>
											<td>{{ $registro->codificacion }}</td>
											<td>{{ $registro->observaciones }}</td>
											<td>{{ $registro->id_codificacion }}</td>
											<td>{{ $registro->id_user }}</td>

                                            <td>
                                                <form action="{{ route('registros.destroy',$registro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registros.show',$registro->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('registros.edit',$registro->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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


@endsection

@extends('layouts.admin')

@section('template_title')
    Mi panel
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
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
                                    {{ __('Registro') }}
                                </span>
    
                            </div>
                        </div>
    
                        <div class="card-body bg-white">
                            <div class="table-responsive">
                                <table>
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
                                            
                                            <th>Dni</th>
                                            <th>Telefono</th>
                                            <th>Impuesto</th>
                                            <th>Pvp</th>
                                            <th>Codificacion</th>
                                            <th>Observaciones</th>
                                            <th>Id Codificacion</th>
                                            <th>Creado</th>
    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($registros as $registro)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                
                                                <td>{{ $registro->DNI }}</td>
                                                <td>{{ $registro->telefono }}</td>
                                                <td>{{ $registro->impuesto }}</td>
                                                <td>{{ $registro->pvp }}</td>
                                                <td>{{ $registro->codificacion }}</td>
                                                <td>{{ $registro->observaciones }}</td>
                                                <td>{{ $registro->id_codificacion }}</td>
                                                <td>{{ $registro->created_at }}</td>
    
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        
    
    </section>
@endsection

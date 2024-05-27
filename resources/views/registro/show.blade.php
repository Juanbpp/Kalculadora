@extends('layouts.admin')

@section('template_title')
    {{ $registro->name ?? __('Mostrar') . " " . __('Registro') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('registros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Dni:</strong>
                            {{ $registro->DNI }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $registro->telefono }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Impuesto:</strong>
                            {{ $registro->impuesto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Net:</strong>
                            {{ $registro->id_net }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Convergente:</strong>
                            {{ $registro->id_convergente }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Tv:</strong>
                            {{ $registro->id_tv }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Descuento:</strong>
                            {{ $registro->id_descuento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Adicional 1:</strong>
                            {{ $registro->id_adicional_1 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Adicional 2:</strong>
                            {{ $registro->id_adicional_2 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Adicional 3:</strong>
                            {{ $registro->id_adicional_3 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Adicional 4:</strong>
                            {{ $registro->id_adicional_4 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Adicional 5:</strong>
                            {{ $registro->id_adicional_5 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad Adicional 1:</strong>
                            {{ $registro->cantidad_adicional_1 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad Adicional 2:</strong>
                            {{ $registro->cantidad_adicional_2 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad Adicional 3:</strong>
                            {{ $registro->cantidad_adicional_3 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad Adicional 4:</strong>
                            {{ $registro->cantidad_adicional_4 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad Adicional 5:</strong>
                            {{ $registro->cantidad_adicional_5 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Movil 1:</strong>
                            {{ $registro->id_movil_1 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Movil 2:</strong>
                            {{ $registro->id_movil_2 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Movil 3:</strong>
                            {{ $registro->id_movil_3 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Movil 4:</strong>
                            {{ $registro->id_movil_4 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Movil 5:</strong>
                            {{ $registro->id_movil_5 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad Movil 1:</strong>
                            {{ $registro->cantidad_movil_1 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad Movil 2:</strong>
                            {{ $registro->cantidad_movil_2 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad Movil 3:</strong>
                            {{ $registro->cantidad_movil_3 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad Movil 4:</strong>
                            {{ $registro->cantidad_movil_4 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad Movil 5:</strong>
                            {{ $registro->cantidad_movil_5 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descuento Movil 1:</strong>
                            {{ $registro->descuento_movil_1 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descuento Movil 2:</strong>
                            {{ $registro->descuento_movil_2 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descuento Movil 3:</strong>
                            {{ $registro->descuento_movil_3 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descuento Movil 4:</strong>
                            {{ $registro->descuento_movil_4 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descuento Movil 5:</strong>
                            {{ $registro->descuento_movil_5 }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pvp:</strong>
                            {{ $registro->pvp }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Codificacion:</strong>
                            {{ $registro->codificacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Observaciones:</strong>
                            {{ $registro->observaciones }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Codificacion:</strong>
                            {{ $registro->id_codificacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id User:</strong>
                            {{ $registro->id_user }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

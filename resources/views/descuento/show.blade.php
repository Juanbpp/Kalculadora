@extends('layouts.admin')

@section('template_title')
    {{ $descuento->name ?? __('Show') . " " . __('Descuento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Descuento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('descuentos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Tipo:</strong>
                            {{ $descuento->tipo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descuento:</strong>
                            {{ $descuento->descuento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Precio:</strong>
                            {{ $descuento->importe }}
                        </div>
     
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

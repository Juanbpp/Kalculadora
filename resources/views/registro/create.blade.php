@extends('layouts.admin')

@section('template_title')
    {{ __('Crear') }} Registro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Registro</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('registros.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('registro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <center><a href="/yoigo"><img src="{{ url('/dist/img/yoigo2.png') }}" width="80%"></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <center><a href="/masmovil"><img src="{{ url('/dist/img/masmovil2.png') }}" width="80%"></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <center><a href="/movistar"><img src="{{ url('/dist/img/movistar2.png') }}" width="80%"></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <center><a href="/vodafone"><img src="{{ url('/dist/img/vodafone2.png') }}" width="80%"></a>
                </div>
            </div>


        </div>


        <div class="row">

            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <center><a href="/orange"><img src="{{ url('/dist/img/orange2.png') }}" width="80%"></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <center><a href="/jazztel"><img src="{{ url('/dist/img/jazztel2.png') }}" width="80%"></a>
                </div>
            </div>

        </div>
    </div>
</div>   
@endsection

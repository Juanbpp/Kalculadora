@extends('layouts.admin')

@section('content')
    <div class="container" onload="javascript:cambio()">
        <form id="formulario"name="formulario" method="POST" action="{{ route('jazztel') }}" role="form"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success m-4">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col">
                                        <label for="DNI"> DNI </label>
                                        <input type="text" name="DNI"
                                            class="form-control @error('DNI') is-invalid @enderror" value=""
                                            id="DNI" placeholder="DNI" onchange="javascript:cambio()">
                                        {!! $errors->first('DNI', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}

                                        <label for="telefono"> Telefono </label>
                                        <input type="text" name="telefono"
                                            class="form-control @error('telefono') is-invalid @enderror" value=""
                                            id="telefono" placeholder="Telefono" onchange="javascript:cambio()">
                                        {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                    <div class="col">
                                        <label for="Nombre"> Nombre </label>
                                        <input type="text" class="form-control" id="Nombre" name="nombre"
                                            onchange="javascript:cambio()" />
                                        <label for="impuesto"> impuesto </label>

                                        <select class="form-control" id="impuesto" name="impuesto"
                                            onchange="javascript:cambio()">
                                            <option value="IVA">IVA</option>
                                            <option value="IGIC">IGIC</option>
                                            <option value="IPSI Ceuta">IPSI Ceuta</option>
                                            <option value="IPSI Melilla">IPSI Melilla</option>
                                        </select><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <center>Paquete
                                        </div>
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col">
                                                    <center><i class="bi bi-telephone"></i> & <i class="bi bi-router"></i>
                                                        <select size="1" id="internet"
                                                            onchange="javascript:cambioInternet(),cambio()">
                                                            <option selected value="0">Seleccione uno ...</option>
                                                            @foreach ($productosnet as $producto)
                                                                <option value="{{ $producto->precio }}"
                                                                    codigo="{{ $producto->id }}">
                                                                    {{ $producto->producto }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <input type="hidden" name="id_net" id="id_net">
                                                </div>
                                                <div class="col">
                                                    <i class="bi bi-phone"></i>
                                                    <select size="1" id="convergente"
                                                        onchange="javascript:cambioConvergente(),cambio()">
                                                        <option selected value="0">Seleccione uno ...</option>
                                                        @foreach ($productosconvergente as $producto)
                                                            <option value="{{ $producto->precio }}"
                                                                codigo="{{ $producto->id }}">
                                                                {{ $producto->producto }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <input type="hidden" name="id_convergente" id="id_convergente">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col">
                                                    <center><i class="bi bi-tv"></i> Tv
                                                        <select size="1" id="tv"
                                                            onchange="javascript:cambio()">
                                                            <option selected value="0">Seleccione uno ...</option>
                                                            @foreach ($productostv as $producto)
                                                                <option value="{{ $producto->precio }}"
                                                                    codigo="{{ $producto->id }}">
                                                                    {{ $producto->producto }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <input type="hidden" name="id_tv" id="id_tv">
                                                </div>
                                                <div class="col">
                                                    <i class="bi bi-percent"></i>
                                                    <select size="1" id="descuento" onchange="javascript:cambio()">
                                                        <option selected value="0">Seleccione uno ...</option>
                                                        @foreach ($descuentos as $producto)
                                                            <option value="{{ $producto->importe }}"
                                                                tipo="{{ $producto->tipo }}" codigo="{{ $producto->id }}">
                                                                {{ $producto->descuento }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <input type="hidden" name="id_descuento" id="id_descuento">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-group">
                                                @foreach ($productosadicionales as $producto)
                                                    <div class="card">
                                                        <center>
                                                            <div class="card-header">{{ $producto->producto }}</div>
                                                            <div class="card-body">
                                                                <div>
                                                                    <select size="1"
                                                                        id="adicional_{{ $loop->iteration }}"
                                                                        name="cantidad_adicional_{{ $loop->iteration }}"
                                                                        onchange="javascript:cambio()">
                                                                        <option selected value="0">0</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                    </select> &nbsp;&nbsp;
                                                                    <input type="hidden"
                                                                        id="vadicional_{{ $loop->iteration }}"
                                                                        size="1" onchange="javascript:cambio()"
                                                                        disabled />
                                                                    <input type="hidden"
                                                                        id="iadicional_{{ $loop->iteration }}"
                                                                        size="1" value="{{ $producto->precio }}" />
                                                                    <input type="hidden"
                                                                        id="tadicional_{{ $loop->iteration }}"
                                                                        size="1"
                                                                        value="{{ $producto->producto }}" />
                                                                    <input type="hidden"
                                                                        name="id_adicional_{{ $loop->iteration }}"
                                                                        size="1" value="{{ $producto->id }}" />
                                                                </div>
                                                            </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div><br>

                                </div>
                            </div><br>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-group">
                                            @foreach ($productosmoviles as $producto)
                                                <div class="card">
                                                    <center>
                                                        <div class="card-header">{{ $producto->producto }}</div>
                                                        <div class="card-body">
                                                            <select size="1" id="movil_{{ $loop->iteration }}"
                                                                name="cantidad_movil_{{ $loop->iteration }}"
                                                                onchange="javascript:cambio()">
                                                                <option selected value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select> &nbsp;
                                                            <input type="hidden" id="vmovil_{{ $loop->iteration }}"
                                                                size="1" disabled>
                                                            <input type="hidden" id="imovil_{{ $loop->iteration }}"
                                                                size="1" value="{{ $producto->precio }}" />
                                                            <input type="hidden" id="tmovil_{{ $loop->iteration }}"
                                                                size="1" value="{{ $producto->producto }}" />
                                                            <input type="hidden" name="id_movil_{{ $loop->iteration }}"
                                                                size="1" value="{{ $producto->id }}" />
                                                        </div>
                                                        <div>
                                                            <i class="bi bi-percent"></i>
                                                            <select size="1" id="dmovil_{{ $loop->iteration }}"
                                                                onchange="javascript:cambio()">
                                                                <option selected value="0">%</option>
                                                                @foreach ($descuentos as $producto)
                                                                    <option value="{{ $producto->importe }}"
                                                                        tipo="{{ $producto->tipo }}"
                                                                        codigo="{{ $producto->id }}">
                                                                        {{ $producto->descuento }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <input type="hidden"
                                                                name="descuento_movil_{{ $loop->iteration }}"
                                                                id="descuento_movil_{{ $loop->iteration }}"
                                                                size="1" /><br><br>
                                                        </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><br><br>
                            </div>
                            <div class="col-md-12">



                                <div class="card">
                                    <div class="card-header">
                                        <center>Contratado
                                    </div>
                                    <center>
                                        <div class="card-body">
                                            <h4 class="card">
                                                <center>Total a pagar
                                            </h4>
                                            <input type="hidden" name="pvp" id="pvp" />
                                            <input type="hidden" name="codificacion" id="resultado3" />
                                            <textarea name="resultado2" id="resultado2" rows="8" cols="50" disabled>
                                                </textarea>
                                            <br><br>Codificacion:
                                            <select size="1" id="final" onchange="javascript:cambio()">
                                                <option selected value="0">Seleccione uno ...</option>
                                                @foreach ($codificaciones as $codificacion)
                                                    <option value="{{ $codificacion->id }}">
                                                        {{ $codificacion->codificacion }}
                                                    </option>
                                                @endforeach
                                            </select><br><br>
                                            Observaciones: <input type="text" name="observaciones"
                                                id="observaciones" /><br><br>
                                            <input type="hidden" name="id_user" id="id_user"
                                                value="{{ auth()->user()->id }}" /><br><br>
                                            <input type="hidden" name="id_codificacion" id="id_codificacion" />
                                            <button onclick="javascript:cambio(),submit()" class="btn btn-primary">
                                                ENVIAR
                                            </button>

                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
@endsection

<script>
    function cambio(e) {
        var importe = 0;
        var v_internet = Number(document.getElementById('internet').value);
        var v_convergente = Number(document.getElementById('convergente').value);
        var v_tv = Number(document.getElementById('tv').value);
        var t_adicional = "";
        var t_movil = "";
        const descuento = document.getElementById('descuento'),
            option = descuento.options[descuento.selectedIndex],
            valor = Number(option.value),
            tipo = option.getAttribute('tipo'),
            descuento_paquete = option.getAttribute('codigo');
        texto = descuento.options[descuento.selectedIndex].text;
        if (tipo == "porcentaje") {
            importe = importe + (v_internet + v_convergente + v_tv) * (1 - valor);
        } else {
            importe = importe + (v_internet + v_convergente + v_tv) - valor;
        }
        if (v_convergente > 0) {
            const select_convergente = document.getElementById('convergente'),
                opcion_convergente = select_convergente.options[select_convergente.selectedIndex].text;
            var t_convergente = " " + opcion_convergente;
        } else {
            var t_convergente = "";

        }

        if (v_tv > 0) {
            const select_tv = document.getElementById('tv'),
                opcion_tv = select_tv.options[select_tv.selectedIndex].text;
            var t_tv = " " + opcion_tv;
        } else {
            var t_tv = "";

        }
        if (valor == 0) {
            var t_descuento = "";
        } else {
            var t_descuento = " descuento de " + texto;
        }

        if (document.getElementById('internet').value == 0) {
            var t_internet = ""
        } else {
            const select = document.getElementById('internet'),
                opcion = select.options[select.selectedIndex].text;
            var t_internet = "El fijo es " + opcion + t_convergente + t_tv + t_descuento + t_adicional;
        }

        var t_adicional = "";
        var select_adicional = $('select[id^=adicional]');
        for (let i = 1; i < select_adicional.length + 1; i++) {
            var adicional = Number(document.getElementById('adicional_' + i).value);
            var iadicional = Number(document.getElementById('iadicional_' + i).value);
            importe = importe + ((adicional) * (iadicional));
        }
        var total_adicional = 0;
        for (let i = 1; i < select_adicional.length + 1; i++) {
            var adicional = Number(document.getElementById('adicional_' + i).value);
            total_adicional = total_adicional + adicional;
            if (adicional > 0) {
                t_adicional = t_adicional + " " + adicional + " " + document.getElementById('tadicional_' + i).value;
            }
        }
        if (total_adicional > 0) {
            t_adicional = "\n adicional " + t_adicional;
        } else {
            t_adicional = "";
        }

        var t_movil = "";
        var select_movil = $('select[id^=movil]');
        for (let i = 1; i < select_movil.length + 1; i++) {
            var movil = Number(document.getElementById('movil_' + i).value);
            var imovil = Number(document.getElementById('imovil_' + i).value);
            const dmovil = document.getElementById('dmovil_' + i),
                option = dmovil.options[dmovil.selectedIndex],
                valor = Number(option.value),
                tipo = option.getAttribute('tipo');
            if (tipo == "porcentaje") {
                importe = importe + ((imovil) * (1 - valor)) * movil;
            } else {
                importe = importe + ((imovil) - valor) * movil;
            }

        }
        for (let i = 1; i < select_movil.length + 1; i++) {
            var movil = Number(document.getElementById('movil_' + i).value);
            var imovil = Number(document.getElementById('imovil_' + i).value);
            const dmovil = document.getElementById('dmovil_' + i),
                option = dmovil.options[dmovil.selectedIndex],
                valor = Number(option.value),
                tipo = option.getAttribute('codigo');
            document.getElementById('descuento_movil_' + i).value = tipo;
        }
        var total_movil = 0;
        for (let i = 1; i < select_movil.length + 1; i++) {
            var movil = Number(document.getElementById('movil_' + i).value);
            total_movil = total_movil + movil;
            if (movil > 0) {
                const dmovil = document.getElementById('dmovil_' + i);
                texto_movil = " con descuento " + dmovil.options[dmovil.selectedIndex].text;
                if (texto_movil == "%") {
                    texto_movil = "";
                };
                t_movil = t_movil + " " + movil + " " + document.getElementById('tmovil_' + i).value + " " +
                    texto_movil;
            }
        }
        if (total_movil > 0) {
            t_movil = "\n movil " + t_movil;
        } else {
            t_movil = "";
        }




        impuesto = document.getElementById('impuesto').value;
        if (impuesto == "IGIC") {
            importe = (importe / 1.21) * 1.07;
            importe = importe.toFixed(2);
        } else if (impuesto == "IPSI Ceuta") {
            importe = (importe / 1.21) * 1.08;
            importe = importe.toFixed(2);
        } else if (impuesto == "IPSI Melilla") {
            importe = (importe / 1.21) * 1.10;
            importe = importe.toFixed(2);
        } else {
            importe = importe.toFixed(2);
        }


        const id_internet = document.getElementById('internet'),
            option_internet = id_internet.options[id_internet.selectedIndex],
            valor_internet = Number(option_internet.value),
            codigo_internet = option_internet.getAttribute('codigo');
        document.getElementById('id_net').value = codigo_internet;
        const id_convergente = document.getElementById('convergente'),
            option_convergente = id_convergente.options[id_convergente.selectedIndex],
            valor_convergente = Number(option_convergente.value),
            codigo_convergente = option_convergente.getAttribute('codigo');
        document.getElementById('id_convergente').value = codigo_convergente;
        const id_tv = document.getElementById('tv'),
            option_tv = id_tv.options[id_tv.selectedIndex],
            valor_tv = Number(option_tv.value),
            codigo_tv = option_tv.getAttribute('codigo');
        document.getElementById('id_tv').value = codigo_tv;
        const id_descuento = document.getElementById('descuento'),
            option_descuento = id_descuento.options[id_descuento.selectedIndex],
            valor_descuento = Number(option_descuento.value),
            codigo_descuento = option_descuento.getAttribute('codigo');
        document.getElementById('id_descuento').value = codigo_descuento;
        const id_codificacion = document.getElementById('final'),
            option_codificacion = id_codificacion.options[id_codificacion.selectedIndex],
            valor_codificacion = Number(option_codificacion.value),
            codigo_codificacion = option_codificacion.getAttribute('codigo');
        if (option_codificacion.text == "Seleccione uno ...") {
            texto_codificacion = "";
        } else {
            texto_codificacion = "\n Codificacion: " + option_codificacion.text;
        }
        var nombre = "Identificador: " + document.getElementById('DNI').value + "\n";
        var telefono = "Telefono: " + document.getElementById('telefono').value + "\n";

        document.getElementById('id_codificacion').value = valor_codificacion;
        document.getElementById('pvp').value = importe;
        document.getElementById('resultado3').value = nombre + telefono + t_internet + t_adicional + t_movil +
            " total a pagar " + importe + " con " + impuesto + " " + texto_codificacion;
        document.getElementById('resultado2').value = nombre + telefono + t_internet + t_adicional + t_movil +
            " total a pagar " + importe + " con " + impuesto + " " + texto_codificacion;

    }

    function cambioInternet(e) {
        document.getElementById('convergente').selectedIndex = "0";
        document.getElementById('tv').selectedIndex = "0";
        if (document.getElementById('internet').value < 15) {
            document.getElementById('convergente').disabled = true;
            document.getElementById('tv').disabled = true;
            document.getElementById('descuento').disabled = true;
            document.getElementById('descuento').selectedIndex = "0";
            var select_adicional = $('select[id^=adicional]');
            for (let i = 1; i < select_adicional.length + 1; i++) {
                document.getElementById('adicional_' + i).disabled = true;
                document.getElementById('adicional_' + i).selectedIndex = "0";
            }
        } else {
            document.getElementById('convergente').disabled = false;
            document.getElementById('tv').disabled = false;
            document.getElementById('descuento').disabled = false;
            var select_adicional = $('select[id^=adicional]');
            for (let i = 1; i < select_adicional.length + 1; i++) {
                document.getElementById('adicional_' + i).disabled = false;
            }
        }

    }

    function cambioConvergente(e) {
        document.getElementById('tv').selectedIndex = "0";
        document.getElementById('descuento').selectedIndex = "0";
    }
</script>

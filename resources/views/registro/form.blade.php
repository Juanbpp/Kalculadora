<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="d_n_i" class="form-label">{{ __('Dni') }}</label>
            <input type="text" name="DNI" class="form-control @error('DNI') is-invalid @enderror" value="{{ old('DNI', $registro?->DNI) }}" id="d_n_i" placeholder="Dni">
            {!! $errors->first('DNI', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $registro?->telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="impuesto" class="form-label">{{ __('Impuesto') }}</label>
            <input type="text" name="impuesto" class="form-control @error('impuesto') is-invalid @enderror" value="{{ old('impuesto', $registro?->impuesto) }}" id="impuesto" placeholder="Impuesto">
            {!! $errors->first('impuesto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_net" class="form-label">{{ __('Id Net') }}</label>
            <input type="text" name="id_net" class="form-control @error('id_net') is-invalid @enderror" value="{{ old('id_net', $registro?->id_net) }}" id="id_net" placeholder="Id Net">
            {!! $errors->first('id_net', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_convergente" class="form-label">{{ __('Id Convergente') }}</label>
            <input type="text" name="id_convergente" class="form-control @error('id_convergente') is-invalid @enderror" value="{{ old('id_convergente', $registro?->id_convergente) }}" id="id_convergente" placeholder="Id Convergente">
            {!! $errors->first('id_convergente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_tv" class="form-label">{{ __('Id Tv') }}</label>
            <input type="text" name="id_tv" class="form-control @error('id_tv') is-invalid @enderror" value="{{ old('id_tv', $registro?->id_tv) }}" id="id_tv" placeholder="Id Tv">
            {!! $errors->first('id_tv', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_descuento" class="form-label">{{ __('Id Descuento') }}</label>
            <input type="text" name="id_descuento" class="form-control @error('id_descuento') is-invalid @enderror" value="{{ old('id_descuento', $registro?->id_descuento) }}" id="id_descuento" placeholder="Id Descuento">
            {!! $errors->first('id_descuento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_adicional_1" class="form-label">{{ __('Id Adicional 1') }}</label>
            <input type="text" name="id_adicional_1" class="form-control @error('id_adicional_1') is-invalid @enderror" value="{{ old('id_adicional_1', $registro?->id_adicional_1) }}" id="id_adicional_1" placeholder="Id Adicional 1">
            {!! $errors->first('id_adicional_1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_adicional_2" class="form-label">{{ __('Id Adicional 2') }}</label>
            <input type="text" name="id_adicional_2" class="form-control @error('id_adicional_2') is-invalid @enderror" value="{{ old('id_adicional_2', $registro?->id_adicional_2) }}" id="id_adicional_2" placeholder="Id Adicional 2">
            {!! $errors->first('id_adicional_2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_adicional_3" class="form-label">{{ __('Id Adicional 3') }}</label>
            <input type="text" name="id_adicional_3" class="form-control @error('id_adicional_3') is-invalid @enderror" value="{{ old('id_adicional_3', $registro?->id_adicional_3) }}" id="id_adicional_3" placeholder="Id Adicional 3">
            {!! $errors->first('id_adicional_3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_adicional_4" class="form-label">{{ __('Id Adicional 4') }}</label>
            <input type="text" name="id_adicional_4" class="form-control @error('id_adicional_4') is-invalid @enderror" value="{{ old('id_adicional_4', $registro?->id_adicional_4) }}" id="id_adicional_4" placeholder="Id Adicional 4">
            {!! $errors->first('id_adicional_4', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_adicional_5" class="form-label">{{ __('Id Adicional 5') }}</label>
            <input type="text" name="id_adicional_5" class="form-control @error('id_adicional_5') is-invalid @enderror" value="{{ old('id_adicional_5', $registro?->id_adicional_5) }}" id="id_adicional_5" placeholder="Id Adicional 5">
            {!! $errors->first('id_adicional_5', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_adicional_1" class="form-label">{{ __('Cantidad Adicional 1') }}</label>
            <input type="text" name="cantidad_adicional_1" class="form-control @error('cantidad_adicional_1') is-invalid @enderror" value="{{ old('cantidad_adicional_1', $registro?->cantidad_adicional_1) }}" id="cantidad_adicional_1" placeholder="Cantidad Adicional 1">
            {!! $errors->first('cantidad_adicional_1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_adicional_2" class="form-label">{{ __('Cantidad Adicional 2') }}</label>
            <input type="text" name="cantidad_adicional_2" class="form-control @error('cantidad_adicional_2') is-invalid @enderror" value="{{ old('cantidad_adicional_2', $registro?->cantidad_adicional_2) }}" id="cantidad_adicional_2" placeholder="Cantidad Adicional 2">
            {!! $errors->first('cantidad_adicional_2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_adicional_3" class="form-label">{{ __('Cantidad Adicional 3') }}</label>
            <input type="text" name="cantidad_adicional_3" class="form-control @error('cantidad_adicional_3') is-invalid @enderror" value="{{ old('cantidad_adicional_3', $registro?->cantidad_adicional_3) }}" id="cantidad_adicional_3" placeholder="Cantidad Adicional 3">
            {!! $errors->first('cantidad_adicional_3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_adicional_4" class="form-label">{{ __('Cantidad Adicional 4') }}</label>
            <input type="text" name="cantidad_adicional_4" class="form-control @error('cantidad_adicional_4') is-invalid @enderror" value="{{ old('cantidad_adicional_4', $registro?->cantidad_adicional_4) }}" id="cantidad_adicional_4" placeholder="Cantidad Adicional 4">
            {!! $errors->first('cantidad_adicional_4', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_adicional_5" class="form-label">{{ __('Cantidad Adicional 5') }}</label>
            <input type="text" name="cantidad_adicional_5" class="form-control @error('cantidad_adicional_5') is-invalid @enderror" value="{{ old('cantidad_adicional_5', $registro?->cantidad_adicional_5) }}" id="cantidad_adicional_5" placeholder="Cantidad Adicional 5">
            {!! $errors->first('cantidad_adicional_5', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_movil_1" class="form-label">{{ __('Id Movil 1') }}</label>
            <input type="text" name="id_movil_1" class="form-control @error('id_movil_1') is-invalid @enderror" value="{{ old('id_movil_1', $registro?->id_movil_1) }}" id="id_movil_1" placeholder="Id Movil 1">
            {!! $errors->first('id_movil_1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_movil_2" class="form-label">{{ __('Id Movil 2') }}</label>
            <input type="text" name="id_movil_2" class="form-control @error('id_movil_2') is-invalid @enderror" value="{{ old('id_movil_2', $registro?->id_movil_2) }}" id="id_movil_2" placeholder="Id Movil 2">
            {!! $errors->first('id_movil_2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_movil_3" class="form-label">{{ __('Id Movil 3') }}</label>
            <input type="text" name="id_movil_3" class="form-control @error('id_movil_3') is-invalid @enderror" value="{{ old('id_movil_3', $registro?->id_movil_3) }}" id="id_movil_3" placeholder="Id Movil 3">
            {!! $errors->first('id_movil_3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_movil_4" class="form-label">{{ __('Id Movil 4') }}</label>
            <input type="text" name="id_movil_4" class="form-control @error('id_movil_4') is-invalid @enderror" value="{{ old('id_movil_4', $registro?->id_movil_4) }}" id="id_movil_4" placeholder="Id Movil 4">
            {!! $errors->first('id_movil_4', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_movil_5" class="form-label">{{ __('Id Movil 5') }}</label>
            <input type="text" name="id_movil_5" class="form-control @error('id_movil_5') is-invalid @enderror" value="{{ old('id_movil_5', $registro?->id_movil_5) }}" id="id_movil_5" placeholder="Id Movil 5">
            {!! $errors->first('id_movil_5', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_movil_1" class="form-label">{{ __('Cantidad Movil 1') }}</label>
            <input type="text" name="cantidad_movil_1" class="form-control @error('cantidad_movil_1') is-invalid @enderror" value="{{ old('cantidad_movil_1', $registro?->cantidad_movil_1) }}" id="cantidad_movil_1" placeholder="Cantidad Movil 1">
            {!! $errors->first('cantidad_movil_1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_movil_2" class="form-label">{{ __('Cantidad Movil 2') }}</label>
            <input type="text" name="cantidad_movil_2" class="form-control @error('cantidad_movil_2') is-invalid @enderror" value="{{ old('cantidad_movil_2', $registro?->cantidad_movil_2) }}" id="cantidad_movil_2" placeholder="Cantidad Movil 2">
            {!! $errors->first('cantidad_movil_2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_movil_3" class="form-label">{{ __('Cantidad Movil 3') }}</label>
            <input type="text" name="cantidad_movil_3" class="form-control @error('cantidad_movil_3') is-invalid @enderror" value="{{ old('cantidad_movil_3', $registro?->cantidad_movil_3) }}" id="cantidad_movil_3" placeholder="Cantidad Movil 3">
            {!! $errors->first('cantidad_movil_3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_movil_4" class="form-label">{{ __('Cantidad Movil 4') }}</label>
            <input type="text" name="cantidad_movil_4" class="form-control @error('cantidad_movil_4') is-invalid @enderror" value="{{ old('cantidad_movil_4', $registro?->cantidad_movil_4) }}" id="cantidad_movil_4" placeholder="Cantidad Movil 4">
            {!! $errors->first('cantidad_movil_4', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_movil_5" class="form-label">{{ __('Cantidad Movil 5') }}</label>
            <input type="text" name="cantidad_movil_5" class="form-control @error('cantidad_movil_5') is-invalid @enderror" value="{{ old('cantidad_movil_5', $registro?->cantidad_movil_5) }}" id="cantidad_movil_5" placeholder="Cantidad Movil 5">
            {!! $errors->first('cantidad_movil_5', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descuento_movil_1" class="form-label">{{ __('Descuento Movil 1') }}</label>
            <input type="text" name="descuento_movil_1" class="form-control @error('descuento_movil_1') is-invalid @enderror" value="{{ old('descuento_movil_1', $registro?->descuento_movil_1) }}" id="descuento_movil_1" placeholder="Descuento Movil 1">
            {!! $errors->first('descuento_movil_1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descuento_movil_2" class="form-label">{{ __('Descuento Movil 2') }}</label>
            <input type="text" name="descuento_movil_2" class="form-control @error('descuento_movil_2') is-invalid @enderror" value="{{ old('descuento_movil_2', $registro?->descuento_movil_2) }}" id="descuento_movil_2" placeholder="Descuento Movil 2">
            {!! $errors->first('descuento_movil_2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descuento_movil_3" class="form-label">{{ __('Descuento Movil 3') }}</label>
            <input type="text" name="descuento_movil_3" class="form-control @error('descuento_movil_3') is-invalid @enderror" value="{{ old('descuento_movil_3', $registro?->descuento_movil_3) }}" id="descuento_movil_3" placeholder="Descuento Movil 3">
            {!! $errors->first('descuento_movil_3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descuento_movil_4" class="form-label">{{ __('Descuento Movil 4') }}</label>
            <input type="text" name="descuento_movil_4" class="form-control @error('descuento_movil_4') is-invalid @enderror" value="{{ old('descuento_movil_4', $registro?->descuento_movil_4) }}" id="descuento_movil_4" placeholder="Descuento Movil 4">
            {!! $errors->first('descuento_movil_4', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descuento_movil_5" class="form-label">{{ __('Descuento Movil 5') }}</label>
            <input type="text" name="descuento_movil_5" class="form-control @error('descuento_movil_5') is-invalid @enderror" value="{{ old('descuento_movil_5', $registro?->descuento_movil_5) }}" id="descuento_movil_5" placeholder="Descuento Movil 5">
            {!! $errors->first('descuento_movil_5', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pvp" class="form-label">{{ __('Pvp') }}</label>
            <input type="text" name="pvp" class="form-control @error('pvp') is-invalid @enderror" value="{{ old('pvp', $registro?->pvp) }}" id="pvp" placeholder="Pvp">
            {!! $errors->first('pvp', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codificacion" class="form-label">{{ __('Codificacion') }}</label>
            <input type="text" name="codificacion" class="form-control @error('codificacion') is-invalid @enderror" value="{{ old('codificacion', $registro?->codificacion) }}" id="codificacion" placeholder="Codificacion">
            {!! $errors->first('codificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $registro?->observaciones) }}" id="observaciones" placeholder="Observaciones">
            {!! $errors->first('observaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_codificacion" class="form-label">{{ __('Id Codificacion') }}</label>
            <input type="text" name="id_codificacion" class="form-control @error('id_codificacion') is-invalid @enderror" value="{{ old('id_codificacion', $registro?->id_codificacion) }}" id="id_codificacion" placeholder="Id Codificacion">
            {!! $errors->first('id_codificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_user" class="form-label">{{ __('Id User') }}</label>
            <input type="text" name="id_user" class="form-control @error('id_user') is-invalid @enderror" value="{{ old('id_user', $registro?->id_user) }}" id="id_user" placeholder="Id User">
            {!! $errors->first('id_user', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="created_at" class="form-label">{{ __('created_at') }}</label>
            <input type="text" name="created_at" class="form-control @error('created_at') is-invalid @enderror" value="{{ old('created_at', $registro?->created_at) }}" id="created_at" placeholder="Creado">
            {!! $errors->first('created_at', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Ejecutar') }}</button>
    </div>
</div>
<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="tipo" class="form-label">{{ __('Tipo') }}</label>
            <select name="tipo" id="tipo">
                <option value="">Seleccionar</option>
                <option {{ $descuento?->tipo == 'entero' ? 'selected':'' }}>Entero</option>
                <option {{ $descuento?->tipo == 'porcentaje' ? 'selected':'' }}>Porcentaje</option>
            </select>
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descuento" class="form-label">{{ __('Descuento') }}</label>
            <input type="text" name="descuento" class="form-control @error('descuento') is-invalid @enderror" value="{{ old('descuento', $descuento?->descuento) }}" id="descuento" placeholder="Descuento">
            {!! $errors->first('descuento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="importe" class="form-label">{{ __('importe') }}</label>
            <input type="text" name="importe" class="form-control @error('importe') is-invalid @enderror" value="{{ old('importe', $descuento?->importe) }}" id="importe" placeholder="importe">
            {!! $errors->first('importe', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
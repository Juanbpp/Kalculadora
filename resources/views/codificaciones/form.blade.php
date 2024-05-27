<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="codificaciones" class="form-label">{{ __('Codificaciones') }}</label>
            <input type="text" name="codificaciones" class="form-control @error('codificaciones') is-invalid @enderror" value="{{ old('codificaciones', $codificacion->codificacion) }}" id="codificaciones" placeholder="Codificaciones">
            {!! $errors->first('codificaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
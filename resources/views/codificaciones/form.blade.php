<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="codificacion" class="form-label">{{ __('Codificacion') }}</label>
            <input type="text" name="codificacion" class="form-control @error('codificacion') is-invalid @enderror" value="{{ old('codificacion', $codificacion->codificacion) }}" id="codificacion" placeholder="Codificacion">
            {!! $errors->first('codificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
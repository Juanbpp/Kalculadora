<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_marca" class="form-label">{{ __('Id Marca') }}</label>
            <input type="text" name="id_marca" class="form-control @error('id_marca') is-invalid @enderror" value="{{ old('id_marca', $producto?->id_marca) }}" id="id_marca" placeholder="Id Marca">
            {!! $errors->first('id_marca', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_tipo" class="form-label">{{ __('Id Tipo') }}</label>
            <input type="text" name="id_tipo" class="form-control @error('id_tipo') is-invalid @enderror" value="{{ old('id_tipo', $producto?->id_tipo) }}" id="id_tipo" placeholder="Id Tipo">
            {!! $errors->first('id_tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="producto" class="form-label">{{ __('Producto') }}</label>
            <input type="text" name="producto" class="form-control @error('producto') is-invalid @enderror" value="{{ old('producto', $producto?->producto) }}" id="producto" placeholder="Producto">
            {!! $errors->first('producto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $producto?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Ejecutar') }}</button>
    </div>
</div>
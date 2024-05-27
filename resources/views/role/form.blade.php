<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="rol" class="form-label">{{ __('Rol') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $role?->name) }}" id="name" placeholder="Rol">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <h2 class="h3">Lista permisos</h2>
        @foreach ($permissions as $permission)
            <div>
                <label> 
                    {!! Form::checkbox('$permission[]', $permission->id, null, ['class'=>'mr-1']) !!}
                    {{$permission->descripcion}}
                </label>
            </div>
            @endforeach

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
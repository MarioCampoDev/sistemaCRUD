<h1>{{$modo}} empleado</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
<input type="text" class="form-control" name="nombre" value="{{isset($empleado->nombre)?$empleado->nombre:old('nombre')}}" id="nombre">
</div>
<div class="form-group">
<input type="text" class="form-control" name="apellidoPaterno" value="{{isset($empleado->apellidoPaterno)?$empleado->apellidoPaterno:old('apellidoPaterno')}}" id="apellidoPaterno">
</div>
<div class="form-group">
<input type="text" class="form-control" name="apellidoMaterno" value="{{isset($empleado->apellidoMaterno)?$empleado->apellidoMaterno:old('apellidoMaterno')}}" id="apellidoMaterno">
</div>
<div class="form-group">
<input type="text" class="form-control" name="email" value="{{isset($empleado->email)?$empleado->email:old('email')}}" id="email">
@if (isset($empleado->foto))
    <img src="{{asset('storage').'/'.$empleado->foto}}" class="img-thumbnail img-fluid" width="100" alt="">
@endif
</div>
<div class="form-group">
<input type="file" class="form-control" name="foto" value="" id="foto">
</div>
<input type="submit" class="btn btn-success" value="{{$modo}} Datos">
<a class="btn btn-primary" href="{{url('empleado/')}}">Regresar</a>
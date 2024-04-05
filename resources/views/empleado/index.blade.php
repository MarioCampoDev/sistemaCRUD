@extends('layouts.app')

@section('content')
<div class="container">
  @if (Session::has('mensaje'))
    <div class="alert alert-success" role="alert">
    {{Session::get('mensaje')}}
  </div>
  @endif
<a href="{{url('empleado/create')}}" class="btn btn-success">Registrar nuevo empleado</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Foto</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Email</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td><img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->foto}}" width="100" alt=""></td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->apellidoPaterno}}</td>
            <td>{{$empleado->apellidoMaterno}}</td>
            <td>{{$empleado->email}}</td>
            <td><a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar</a> | 
                <form action="{{url('/empleado/'.$empleado->id)}}" class="d-inline" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar este usuario?')" value="Borrar">
                </form>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  {{$empleados->links()}}
</div>
@endsection
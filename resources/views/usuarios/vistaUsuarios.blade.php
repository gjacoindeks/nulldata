@extends('usuarios.master')

@section('contenido')

<h2 class="sub-header">Usuarios</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Fecha Nacimiento</th>
                  <th>domicilio</th>
                  <th>alias</th>
                </tr>
              </thead>
              @foreach($usuarios as $usuario)
              <tbody>
                <tr>
                  <td>{{$usuario->nombre}}</td>
                  <td>{{$usuario->email}}</td>
                  <td>{{$usuario->fnac}}</td>
                  <td>{{$usuario->domicilio}}</td>
                  <td>{{$usuario->alias}}</td>
                </tr>
                
              </tbody>
              @endforeach
            </table>
          </div>

@stop
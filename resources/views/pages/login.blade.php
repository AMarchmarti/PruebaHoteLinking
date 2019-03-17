@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1>{{ $title }}</h1>
    <p>Gracias por visitarnos, por favor introduce su email y contraseña para acceder. <br> 
      En caso de no estar registrado por favor, le invitamos a que se registre.<br></p>
      <p><a class="btn btn-primary btn-lg" href="/offers" role="button">Login</a> <a class="btn btn-succes btn-lg" href="/register" role="button">Register</a></p>
@endsection
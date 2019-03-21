@extends('layouts.app')
@section('navbar')
<nav class="navbar navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link h3" style="font-family:arial;">Escolha um Gato</a>
        </li>
    <li class="nav-item">
        <a class="nav-link h5" href="/">Home</a>
      </li>
      <li class="nav-brand">
        <a class="nav-link h5" href="robson">Robson Garfield</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h5" href="astolfo">Astolfo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h5" href="gerome">Gerome</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h5" href="tirulipa">Tirulipa</a>
      </li>
    </ul>
  </div>
</nav>
@endsection
@section('nav')
Exercicio dos Gatos
@endsection
@section('conteudo')
<p> Nome: {{$nomeDoGato}}<br></p>
<p> Idade: {{$idadeDoGato}}<br></p>
<p> Massa: {{$massaDoGato}}<br></p>
<p> Dono: {{$donoDoGato}}<br></p>
@endsection
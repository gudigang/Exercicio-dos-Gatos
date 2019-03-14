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
        <a class="nav-link h5" href="home">Home</a>
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
    </ul>
  </div>
</nav>
@endsection
@section('nav')
Exercicio dos Gatos
@endsection
@section('conteudo')
                <?php

                    class gatinho{

                        public $nome;
                        public $idade;
                        public $raca;
                        public $peso;
                        public $acao1;
                        public $acao2;
                        public $acao3;
                        public $acao4;
                        public $acao5;

                        public function ImprimirNome(){
                            echo "$this->nome<br>";
                        }

                        public function ImprimirIdade(){
                            echo "$this->idade<br>";
                        }

                        public function ImprimirRaca(){
                            echo "$this->raca<br>";
                        }

                        public function ImprimirPeso(){
                            echo "$this->peso<br>";
                        }

                        public function ImprimirAcoes(){
                            echo "$this->acao1<br>$this->acao2<br>$this->acao3<br>$this->acao4<br>$this->acao5<br>";
                        }
                    }
                    
                        echo "<br>";
                        $gato = new gatinho();
                        $gato->nome="Astolfo";
                        $gato->idade=9;
                        $gato->raca="Siamês";
                        $gato->peso=7;
                        $gato->acao1="Comer";
                        $gato->acao2="Dormir";
                        $gato->acao3="Miar";
                        $gato->acao4="Andar";
                        $gato->acao5="Brincar";
                        $gato->ImprimirNome();
                        $gato->ImprimirIdade();
                        $gato->ImprimirRaca();
                        $gato->ImprimirPeso();
                        $gato->ImprimirAcoes();

                ?>
@endsection
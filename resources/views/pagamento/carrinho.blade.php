@extends('layouts.app')
@php
    $image = 'https://media.discordapp.net/attachments/945334195461447791/1129585612979195974/98177127_p0.jpg';
    $outraVariavel = "
    <div class='card' style='width: 250px;'>
        <img src='{$image}'  class='card-img-top' alt='Imagem'>
        <div class='card-body'>
            <h5 class='card-title'>Nome do Card 1</h5>
            <p class='card-text'>Valor do Card 1</p>
        </div>
    </div>";
@endphp

<style>
    .hr{
        border: 10px solid black;
    }   
</style>

@section('content')

    {{-- <div class="content-wrapper"> --}}
    <section class="content">
        <div class="container-fluid">
            <!-- Primeira linha com 4 cards -->
            <div class="row">
                <div class="col-12 text-center m-2">
                    <h2>Cursos adicionado no carrinho</h2>
                </div>
                @foreach ($cursos as $curso)
                <div class="col-md-3 mb-1">
                    <div class="card text-center" style="width: 250px;">
                        <img src="{{ asset('curso/' . $curso->img) }}" class="card-img-top" alt="Imagem">
                        <div class="card-body">
                            <h5 class="card-title">{{$curso->nome}}</h5>
                            <p class="card-text">{{$curso->pagamento}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
    <div>
        <a href="#" class="btn btn-success m-1">Finalizar Pagamentos</a>
        <a href="{{ route('cursoHome') }}"class="btn btn-info m-1">Adicionar Mais Coisas ao Carrinho</a>
    </div>
@endsection

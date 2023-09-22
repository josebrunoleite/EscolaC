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
                <div class="col-12 text-center mt-1">
                    <h2>Cursos Recomendados</h2>
                </div>
                <div class="col-md-2 mb-1">
                    <div class="card" style="width: 250px;">
                        <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                        <div class="card-body">
                            <h5 class="card-title">Nome do Card 1</h5>
                            <p class="card-text">Valor do Card 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-1">
                    <div class="card" style="width: 250px;">
                        <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                        <div class="card-body">
                            <h5 class="card-title">Nome do Card 1</h5>
                            <p class="card-text">Valor do Card 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-1">
                    <div class="card" style="width: 250px;">
                        <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                        <div class="card-body">
                            <h5 class="card-title">Nome do Card 1</h5>
                            <p class="card-text">Valor do Card 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-1">
                    <div class="card" style="width: 250px;">
                        <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                        <div class="card-body">
                            <h5 class="card-title">Nome do Card 1</h5>
                            <p class="card-text">Valor do Card 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-1">
                    <div class="card" style="width: 250px;">
                        <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                        <div class="card-body">
                            <h5 class="card-title">Nome do Card 1</h5>
                            <p class="card-text">Valor do Card 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-1">
                    <div class="card" style="width: 250px;">
                        <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                        <div class="card-body">
                            <h5 class="card-title">Nome do Card 1</h5>
                            <p class="card-text">Valor do Card 1</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <!-- Título e segunda linha com 6 cards -->
            <div class="row mt-4">
                <div class="col-12">
                    <h2>Cursos Disponveis</h2>
                </div>
                <div class="col-md-2">
                    <div class="col-md-2 mb-1">
                        <div class="card" style="width: 250px;">
                            <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Card 1</h5>
                                <p class="card-text">Valor do Card 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-2 mb-1">
                        <div class="card" style="width: 250px;">
                            <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Card 1</h5>
                                <p class="card-text">Valor do Card 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-2 mb-1">
                        <div class="card" style="width: 250px;">
                            <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Card 1</h5>
                                <p class="card-text">Valor do Card 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-2 mb-1">
                        <div class="card" style="width: 250px;">
                            <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Card 1</h5>
                                <p class="card-text">Valor do Card 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-2 mb-1">
                        <div class="card" style="width: 250px;">
                            <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Card 1</h5>
                                <p class="card-text">Valor do Card 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-2 mb-1">
                        <div class="card" style="width: 250px;">
                            <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Card 1</h5>
                                <p class="card-text">Valor do Card 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-2 mb-1">
                        <div class="card" style="width: 250px;">
                            <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Card 1</h5>
                                <p class="card-text">Valor do Card 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-2 mb-1">
                        <div class="card" style="width: 250px;">
                            <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Card 1</h5>
                                <p class="card-text">Valor do Card 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-2 mb-1">
                        <div class="card" style="width: 250px;">
                            <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Card 1</h5>
                                <p class="card-text">Valor do Card 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-2 mb-1">
                        <div class="card" style="width: 250px;">
                            <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Card 1</h5>
                                <p class="card-text">Valor do Card 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-2 mb-1">
                        <div class="card" style="width: 250px;">
                            <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Card 1</h5>
                                <p class="card-text">Valor do Card 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-2 mb-1">
                        <div class="card" style="width: 250px;">
                            <img src="{{ $image }}" class="card-img-top" alt="Imagem">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Card 1</h5>
                                <p class="card-text">Valor do Card 1</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- </div> --}}
@endsection

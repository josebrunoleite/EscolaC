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
    .hr {
        border: 10px solid black;
    }

    .custom-card {
        min-width: 10rem;
        max-width: 30rem;
        border: 1px solid #ccc;
        border-radius: 10px;
        transition: transform 0.2s;
    }

    .custom-card:hover {
        transform: translateY(-5px);
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }
</style>

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>

    {{-- <div class="content-wrapper"> --}}
    <section class="content">
        <div class="container-fluid">
            <!-- Primeira linha com 4 cards -->

            <div class="container-fluid">
                <div class="col-12 text-center">
                    <h2>Cursos Recomendados</h2>
                </div>


                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-body-secondary">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>


        </div>

        <hr>

        <!-- Título e segunda linha com 6 cards -->
        <h2 class="text-center">Aba de Cursos</h2>
        <div class="text-center">
            <h1>Cursos Disponiveis</h1>
          </div>
            <div class="card-columns">
                @for ($i = 0; $i < 3; $i++)
              <div class="card">
                <a href="#">
                <img class="card-img-top"  src="{{$image}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium ad alias, aliquid amet aspernatur atque culpa cum debitis dicta doloremque, dolorum ea eos et excepturi explicabo facilis harum illo impedit incidunt laborum laudantium...
                  </p>
{{--                   <p class="card-text"><small class="text-muted"><i class="fas fa-eye"></i>1000<i class="far fa-user"></i>admin<i class="fas fa-calendar-alt"></i>Jan 20, 2018</small></p>
 --}}              </div>
                </a>
            </div>
            @endfor




              
            </div>
          </div>

        </div>
        </div>
    </section>

    {{-- </div> --}}
@endsection

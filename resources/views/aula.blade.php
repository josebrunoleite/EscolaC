@extends('layouts.app')
 <style>


        .container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }


        .content {
            width: 75%;
            padding: 20px;
        }

        .video {
            width: 100%;
            height: auto;
        }
    </style>
@section('content')
    <div class="container d-flex justify-content-bebetween">
        <div class="sidebar">
            <h2>Aulas</h2>
            <ul>
                <li><a href="#">Aula 1 - Introdução</a></li>
                <li><a href="#">Aula 2 - Programação Básica</a></li>
                <li><a href="#">Aula 3 - Estruturas de Controle</a></li>
                <li><a href="#">Aula 4 - Funções</a></li>
                <!-- Adicione mais aulas aqui -->
            </ul>
        </div>
        <div class="content">
            <h1>Aula 1 - Introdução</h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/toH7eTXOKug?si=gU-kFsiHlr-gEpaf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="comments">
                <h3>Comentários</h3>
                <form>
                    <textarea placeholder="Digite seu comentário aqui"></textarea>
                    <button type="submit">Comentar</button>
                </form>
                <div class="comment">
                    <p><strong>Usuário 1:</strong> Ótima aula, aprendi muito!</p>
                </div>
                <div class="comment">
                    <p><strong>Usuário 2:</strong> Gostaria de mais exemplos práticos.</p>
                </div>
                <!-- Adicione mais comentários aqui -->
            </div>
        </div>
    </div>
@endsection
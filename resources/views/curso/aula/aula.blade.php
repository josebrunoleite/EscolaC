@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Aulas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .sidebar {
            width: 25%;
            background-color: #f4f4f4;
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

        .comments {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
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
            <video class="video" controls>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2ZMFGPGGrwY?si=x1qwFdKuy2duOgRr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                Seu navegador não suporta vídeo HTML5.
            </video>
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
</body>
</html>

@section('content')



@endsection
@extends('layouts.app')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center" style="height: 100%; margin: 0 auto;">
                <div class="col-md-6">
                    <!-- Formulário -->
                    
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Adicionar Nova Prova</h3>
                        </div>
                        <form role="form" action="submit" method="post">
                            <div class="card-body">
                                <!-- Aula -->
                                <div class="form-group">
                                    <label for="nomeAula">Titulo da Prova</label>
                                    <input type="text" class="form-control" id="nomeAula" placeholder="Digite o nome da aula">
                                </div>
                                <!-- Vídeo -->
                                <div class="form-group">
                                    <label for="linkVideo">Questão</label>
                                    <input type="text" class="form-control" id="questao" placeholder="Insira o titulo da questão">
                                </div>
                                <!-- Descrição -->
                                <div class="form-group">
                                    <label for="summernote">Conteúdo</label>
                                    <textarea class="form-control" id="summernote" name="conteudo"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="linkVideo">Resposta</label>
                                    <input type="text" class="form-control" id="linkVideo" placeholder="Qual é a reposta correta">
                                </div>
                                <div class="form-group">
                                    <label for="comentarioAutor">Comentário do Autor</label>
                                    <textarea class="form-control" id="comentarioAutor" rows="4" placeholder="Digite o comentário do autor"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
@section("styles")
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">

{{-- <script>
    $(document).ready(function() {
        $('#conteudoSummernote').summernote({
            height: 300, // Altura do editor
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'picture', 'table', 'hr']],
                ['view', ['fullscreen', 'codeview']],
            ],
        });
    });
</script> --}}
<script>
    $('.summernote').summernote({
  height: 150,   //set editable area's height
  codemirror: { // codemirror options
    theme: 'monokai'
  }
});
</script>
@endsection
@extends('layouts.app')
@section('Styles')
    <link href="/node_modules/bootstrap4-duallistbox/dist/bootstrap-duallistbox.min.css" rel="stylesheet">
    <script src="/node_modules/bootstrap4-duallistbox/dist/jquery.bootstrap-duallistbox.min.js"></script>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center" style="height: 100%; margin: 0 auto;">
                <div class="col-md-6">
                    <!-- Formulário -->

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Adicionar Curso</h3>
                        </div>
                        @if (session('error'))
                            <div class="card-header card-color-sucess">
                                <h3 class="card-title">{{ session('error') }}</h3>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="card-header card-color-sucess">
                                <h3 class="card-title">{{ session('success') }}</h3>
                            </div>
                        @endif
                        <form role="form" action="{{ route('Curso.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <!-- name -->
                                <div class="form-group">
                                    <label for="nomeAula">Nome do Curso</label>
                                    <input type="text" name="curso" class="form-control" id="nomeAula"
                                        placeholder="Digite o nome da aula">
                                </div>
                                
                                <!-- valor-->
                                <div class="form-group">
                                    <label for="linkVideo">Valor</label>
                                    <input type="text" name="valor" class="form-control" id="Valor"
                                        placeholder="Insira o titulo da questão">
                                </div>
                                <!-- Descrição -->
                                <div class="form-group">
                                    <label for="exampleSelect">Selecione uma opção do tipo:</label>
                                    <select class="form-control" name="tipo" id="tipo">
                                        <option value="Eletronica">Eletronica</option>
                                        <option value="Robotica">Robotica</option>
                                        <option value="Analise de Sistema">Analise de Sistema</option>
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="linkVideo">Resposta</label>
                                    <input type="text" name="resposta" class="form-control" id="resposta"
                                        placeholder="Qual é a reposta correta">
                                </div> --}}
                                <div class="form-group">
                                    <label for="linkVideo">Duração Media</label>
                                    <input type="text" name="duracio" class="form-control" id="duracio"
                                        placeholder="Insira o titulo da questão">
                                </div>
                                <input type="disable" id="selectedData" name="selectedData">
                                <!-- Referencia -->
                                <div class="form-group">
                                    <label for="linkVideo">Referencia</label>
                                    <input type="text" name="referencia" class="form-control" id="referencia"
                                        placeholder="Insira o titulo da questão">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="comentarioAutor">Comentário do Autor</label>
                                    <textarea class="form-control"  id="comentarioAutor" rows="4" placeholder="Digite o comentário do autor"></textarea>
                                </div> --}}
                            </div>
                            <div class="form-group">
                                <label for="imagem">Imagem</label>
                                <input type="file" name="imagem" class="form-control-file" id="imagem">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id="btnSalvar">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div class="">
                        <select multiple="multiple" name="duallistbox_permissions[]" id="provaAula">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                            <option value="option4">Option 4</option>
                            <option value="option5">Option 5</option>
                            <option value="option6" selected="selected">Option 6</option>
                            <option value="option7">Option 7</option>
                            <option value="option8">Option 8</option>
                            <option value="option9">Option 9</option>
                            <option value="option0">Option 10</option>
                        </select>
                        <button id="btnSalvar" type="submit">Salvar</button>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-duallistbox.css') }}">
    <script src="{{ asset('js/jquery.bootstrap-duallistbox.js') }}"></script>
    <script>
        jQuery(function($) {
            // Inicialize o Dual Listbox no elemento com ID 'test'
            var duallist = $('#provaAula').bootstrapDualListbox();
        });

        $(document).ready(function() {
            $('#btnSalvar').on('click', function() {
                var selectedValues = $('#provaAula').val();
                var selectedData = {
                    selectedValues: selectedValues
                };
                var selectedJson = JSON.stringify(selectedData);
                $('#selectedData').val(selectedJson);
                $('form').submit();
            });
        });
    </script>
@endsection

<style>
    button.move,
    button.remove {
        display: none;
    }

    .btn-group {
        width: 100%;
    }

    button.moveall,
    button.removeall {
        background-color: #ececec;
        width: inherit;
    }
</style>

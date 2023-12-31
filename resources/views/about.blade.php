@extends('layouts.app')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0 text-center">
                Desbravando o Futuro com Conhecimento Online
            </h1>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center fw-bold fs-3">
                                Um pouco sobre nossa historia

                            </h5>

                            <p class="card-text text-center fw-bold">
                                Conheça a história de quatro jovens universitários apaixonados tecnologia que estão
                                determinados a fazer a diferença. Não irei dizer que é uma inovação, mas eles estão lançando
                                um site de aulas online que promete revolucionar a maneira como aprendemos.
                            </p>
                            <p class="card-text text-center fw-bold">
                                Combinando seus talentos individuais e experiências acadêmicas, essa equipe jovem e dinâmica
                                está criando uma plataforma educacional que abrange diversas áreas de conhecimento. Embora a
                                oferta seja ampla e diversificada, o coração do projeto estará voltado para a área da
                                programação, já como eles estão iniciando no mundo da Ciência da Computação, então o maior
                                conhecimento deles é na área de programação.
                            </p>
                            <p class="card-text text-center fw-bold">
                                Eles acreditam que a educação não deve ser limitada por barreiras geográficas ou
                                financeiras. Seu objetivo é tornar o aprendizado acessível a todos, em qualquer lugar. A
                                plataforma fornecerá aulas de alta qualidade ministradas por especialistas em suas
                                respectivas áreas, criando oportunidades para alunos de todas as idades e níveis de
                                habilidade.
                            </p>
                            <p class="card-text text-center fw-bold">
                                O que torna esse projeto verdadeiramente inovador é o compromisso de oferecer uma
                                experiência de aprendizado interativa e envolvente. Com recursos inovadores, interações em
                                tempo real e uma comunidade de aprendizes, eles estão criando um ambiente educacional que
                                vai além das simples aulas online, estão criando uma ambiente que abraça seus usuários,
                                independente da idade ou qual o sonho dessa pessoa.
                            </p>
                            <p class="card-text text-center fw-bold">
                                Esses quatro estão tentando ter uma visão visionária, acreditam que o aprendizado é a chave
                                para um futuro melhor, e estão determinados a transformar essa crença em realidade. Esteja
                                pronto para fazer parte dessa jornada emocionante enquanto eles desbravam o futuro com
                                conhecimento online.
                            </p>
                            <p class="subtitle text-center fw-bold">
                                Logo abaixo você podera ver a nossa equipe e o que cada uma faz, contando um pouco de sua
                                historia e afins
                            </p>
                            <table>
                                <tr>
                                    <td><img width="300" height="150"
                                            src='https://cdn.discordapp.com/attachments/954712125916463144/1156409644139429888/Jose.jpg?ex=6514dde8&is=65138c68&hm=d889b8cdd4a2b6f23e0313e17c40874442ec65af0d36a7f274404198fba7c8ea&' />
                                    </td>
                                    <td class="fw-bold">
                                        José Bruno Leite é a mente atrás dos códigos, podemos dizer que ele é o admin
                                        do site e banco de dados, é capaz de absorver as ideias que lhe são passadas e
                                        transformar em código, mas é claro que ele não fica sozinho nessa, até porque quando
                                        falamos da parte de código ele vira o chefe e sempre da um norte para os outros
                                        integrantes do grupo ensinando-os a como programar eficientemente.
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td><img width="300" height="150"
                                            src='https://cdn.discordapp.com/attachments/954712125916463144/1156409644391079966/Geovani.jpg?ex=6514dde8&is=65138c68&hm=91448ab83252b5060d1d4301adc4e795bcd41259ed6393b517109af7f8aef06b&' />
                                    </td>
                                    <td class="fw-bold">
                                        Geovani Cordeiro, ele é responsavel pela parte da documentação do site, antes de
                                        qualquer coisa ser adicionada, ele acrescenta primeiro na documentação para depois
                                        passar os outros integrantes para que cada um faça sua parte e não fique perdido.
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td><img width="300" height="150"
                                            src='https://cdn.discordapp.com/attachments/954712125916463144/1156409643829035110/Joao.jpg?ex=6514dde8&is=65138c68&hm=4ddf811cdf6fdc6db591ce13a4b675b766d4e003d5e3e509fa7db3cdcedd7dcd&' />
                                    </td>
                                    <td class="fw-bold">
                                        João Lucas, Ele é o manda-chuva do time, ele é responsavel também por comandar o
                                        grupo e não deixa-los perdidos em o que deve fazer, mas ele não só manda, ele também
                                        está com a mão na massa, seja com a parte de documentação ou da parte do código.
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td><img width="300" height="150"
                                            src='https://cdn.discordapp.com/attachments/954712125916463144/1156409246016098314/Ricardo.jpg?ex=6514dd89&is=65138c09&hm=ca1019f99dc0a785788dffef404e05ad96381b8d083ed5d065dc9189b652448b&' />
                                    </td>
                                    <td class="fw-bold">
                                        Ricardo Ramos, foi responsavel pela experiência do usuario, logo, e nome do site, ele é o Zé faz tudo,
                                        qualquer coisa que derem pra ele, mesmo com dificuldades não vai desistir e tentará entender como
                                        se faz as coisas, criativo para dar ideias.
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

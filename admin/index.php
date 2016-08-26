<!-- cabecalhho -->
<?php include 'cabecalho.php'; ?>
<!-- fim cabecalho -->

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" title="Live Chat"><i class="glyphicon glyphicon-comment fa-2x" aria-hidden="true"><span class="badge">2</span></i></a></li>
                <li><a href="#" title="Aniversariantes do mês"><i class="fa fa-birthday-cake fa-2x"
                                                                  aria-hidden="true"><span class="badge">1</span></i></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><i class="fa fa-user fa-2x"></i> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Minha Conta</a></li>
                        <li><a href="#">Trocar Senha</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-sm-3">


            <!-- Inicio do menu de navegacao lateral -->

            <div class="panel panel-default panel-admin">
                <div id="colGroup1" role="tab" class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-target="#colListGroup1" aria-expanded="false"
                           aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-user"></span>
                            Gerenciar Usuarios
                        </a>
                    </h4>
                </div>


                <div role="tabpanel" class="panel-collapse collapse" id="colListGroup1" aria-expanded="false">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="">Chat</a></li>
                        <li class="list-group-item"><a href="">Home</a></li>
                        <li class="list-group-item"><a href="">Portifolio</a></li>
                        <li class="list-group-item"><a href="">Servicos</a></li>
                        <li class="list-group-item"><a href="">Quem Somos</a></li>
                    </ul>
                    <div class="panel-footer"></div>
                </div>
            </div>

            <div class="panel panel-default panel-admin">
                <div id="colGroup2" role="tab" class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-target="#colListGroup2" aria-expanded="false"
                           aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-wrench"></span>
                            Gerenciar Servicos
                        </a>
                    </h4>
                </div>

                <div role="tabpanel" class="panel-collapse collapse" id="colListGroup2" aria-expanded="false">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="">Chat</a></li>
                        <li class="list-group-item"><a href="">Home</a></li>
                        <li class="list-group-item"><a href="">Portifolio</a></li>
                        <li class="list-group-item"><a href="">Servicos</a></li>
                        <li class="list-group-item"><a href="">Quem Somos</a></li>
                    </ul>
                    <div class="panel-footer"></div>
                </div>
            </div>

            <div class="panel panel-default panel-admin">
                <div id="colGroup3" role="tab" class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-target="#colListGroup3" aria-expanded="false"
                           aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-briefcase"></span>
                            Gerenciar Portifolio
                        </a>
                    </h4>
                </div>

                <div role="tabpanel" class="panel-collapse collapse" id="colListGroup3" aria-expanded="false">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="">Chat</a></li>
                        <li class="list-group-item"><a href="">Home</a></li>
                        <li class="list-group-item"><a href="">Portifolio</a></li>
                        <li class="list-group-item"><a href="">Servicos</a></li>
                        <li class="list-group-item"><a href="">Quem Somos</a></li>
                    </ul>
                    <div class="panel-footer"></div>
                </div>
            </div>

            <div class="panel panel-default panel-admin">
                <div id="colGroup3" role="tab" class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-target="#colListGroup3" aria-expanded="false"
                           aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-th-large"></span>
                            Gerenciar Quem Somos
                        </a>
                    </h4>
                </div>

                <div role="tabpanel" class="panel-collapse collapse" id="colListGroup3" aria-expanded="false">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="">Chat</a></li>
                        <li class="list-group-item"><a href="">Home</a></li>
                        <li class="list-group-item"><a href="">Portifolio</a></li>
                        <li class="list-group-item"><a href="">Servicos</a></li>
                        <li class="list-group-item"><a href="">Quem Somos</a></li>
                    </ul>
                    <div class="panel-footer"></div>
                </div>
            </div>

            <div class="panel panel-default panel-admin">
                <div id="colGroup3" role="tab" class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-target="#colListGroup3" aria-expanded="false"
                           aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-globe"></span>
                            Gerenciar Localizacao
                        </a>
                    </h4>
                </div>

                <div role="tabpanel" class="panel-collapse collapse" id="colListGroup3" aria-expanded="false">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="">Chat</a></li>
                        <li class="list-group-item"><a href="">Home</a></li>
                        <li class="list-group-item"><a href="">Portifolio</a></li>
                        <li class="list-group-item"><a href="">Servicos</a></li>
                        <li class="list-group-item"><a href="">Quem Somos</a></li>
                    </ul>
                    <div class="panel-footer"></div>
                </div>
            </div>

            <div class="panel panel-default panel-admin">
                <div id="colGroup3" role="tab" class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-target="#colListGroup3" aria-expanded="false"
                           aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-file"></span>
                            Gerenciar Artigos
                        </a>
                    </h4>
                </div>

                <div role="tabpanel" class="panel-collapse collapse" id="colListGroup3" aria-expanded="false">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="">Chat</a></li>
                        <li class="list-group-item"><a href="">Home</a></li>
                        <li class="list-group-item"><a href="">Portifolio</a></li>
                        <li class="list-group-item"><a href="">Servicos</a></li>
                        <li class="list-group-item"><a href="">Quem Somos</a></li>
                    </ul>
                    <div class="panel-footer"></div>
                </div>
            </div>

            <!-- Fim do menu de navegacao lateral -->
        </div>
        <div class="col-md-9">
            <div class="estilo_painel">
                <div class="estilo_painel_int">

                    <ul class="nav nav-pills">
                        <li class=""><a href="">Mensagens<span class="badge">10</span></a></li>
                        <li class=""><a href="">Tarefas<span class="badge">2</span></a></li>
                        <li class=""><a href="">Aniversariantes<span class="badge">1</span></a></li>
                    </ul>

                    <div class="well well-sm">
                        <h2>Seja bem vindo usuario!</h2>
                        <p>Utilize o menu ao lado para navegar pelo painel administrativo</p>
                    </div>


                    <div class="row">
                        <div class="col-sm-4">
                            <h4>Ultimos artigos</h4>
                            <ul>
                                <li>Artigo 1</li>
                                <li>Artigo 2</li>
                                <li>Artigo 3</li>
                            </ul>
                            <a href="" class="btn btn-primary btn-block">Novo artigo</a>
                        </div>

                        <div class="col-sm-4">
                            <h4>Ultimos acessos</h4>
                            <ul>
                                <li>Acesso 1</li>
                                <li>Acesso 2</li>
                                <li>Acesso 3</li>
                            </ul>
                            <a href="" class="btn btn-primary btn-block">Novo acesso</a>
                        </div>

                        <div class="col-sm-4">
                            <h4>Ultimos Posts</h4>
                            <ul>
                                <li>Post 1</li>
                                <li>Post 2</li>
                                <li>Post 3</li>
                            </ul>
                            <a href="" class="btn btn-primary btn-block">Novo post</a>
                        </div>

                    </div>


                </div>
            </div>
        </div>




        <!-- footer --->
        <?php include 'rodape.php'; ?>
        <!-- fim footer -->
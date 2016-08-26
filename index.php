<!-- cabecalhho -->
<?php include 'cabecalho.php'; ?>
<!-- fim cabecalho -->

<div class="divslider">

    <!-- Slider da aplicacao -->
    <div id="sliderprincipal" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#sliderprincipal" data-slide-to="0" class="active"></li>
            <li data-target="#sliderprincipal" data-slide-to="1"></li>
            <li data-target="#sliderprincipal" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/sliders/foto1.jpg" class="img-responsive" alt="...">
                <div class="carousel-caption">
                    <h3>Foto 1</h3>
                    <p>Descricao da foto</p>
                </div>
            </div>
            <div class="item">
                <img src="img/sliders/foto2.jpg" class="img-responsive" alt="...">
                <div class="carousel-caption">
                    <h3>Foto 2</h3>
                    <p>Descricao da foto</p>
                </div>
            </div>
            <div class="item">
                <img src="img/sliders/foto3.jpg" class="img-responsive" alt="...">
                <div class="carousel-caption">
                    <h3>Foto 3</h3>
                    <p>Descricao da foto</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#sliderprincipal" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#sliderprincipal" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Fim Slider da aplicacao -->
</div>


<!-- Servicos -->
<section id="servicos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <h1>Servicos
                        <small>conheca oque fazemos</small>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
                <div><img src="img/civel.jpg" class="img-responsive img-circle"></div>
                <h4>Direito Civil</h4>
                <p>descricao do servico apresentado. texto texto texto texto texto texto</p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
                <div><img src="img/penal.png" class="img-responsive img-circle"></div>
                <h4>Direito Penal</h4>
                <p>descricao do servico apresentado. texto texto texto texto texto texto</p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
                <div><img src="img/trabalho.jpg" class="img-responsive img-circle"></div>
                <h4>Direito do Trabalho</h4>
                <p>descricao do servico apresentado. texto texto texto texto texto texto</p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
                <div><img src="img/consumidor.png" class="img-responsive img-circle"></div>
                <h4>Direito do Consumidor</h4>
                <p>descricao do servico apresentado. texto texto texto texto texto texto</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center btn-todos">
                <a href="servicos.php" class="btn btn-default btn-lg">Veja todos nossos servicos</a>
            </div>
        </div>
    </div>
</section>
<!-- Fim Servicos -->

<!-- Portifolio -->
<section id="portifolio" class="div_colorida">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <h1>Portifolio
                        <small>conheca nossos trabalhos</small>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row portifolio-row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="portifolio_item">
                    <div><img src="img/foto2.jpg" class="img-responsive grayscale"></div>
                    <h4>Agrale</h4>

                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="portifolio_item">
                    <div><img src="img/foto2.jpg" class="img-responsive grayscale"></div>
                    <h4>Azaléia</h4>

                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="portifolio_item">
                    <div><img src="img/foto2.jpg" class="img-responsive grayscale"></div>
                    <h4>Gerdau</h4>

                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="portifolio_item">
                    <div><img src="img/foto2.jpg" class="img-responsive grayscale"></div>
                    <h4>Grendene</h4>

                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-xs-12 text-center btn-todos">
                <a href="portifolio.php" class="btn btn-default btn-lg">Veja o portifolio completo</a>
            </div>
        </div>
    </div>
</section>
<!-- Fim Portifolio -->

<!-- Quem somos -->
<section id="quemsomos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <h1>Quem Somos
                        <small>conheca nossa historia</small>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 row-quemSomos">
                <div class="col-sm-8 text-right">
                    <h4>Texto sobre a empresa</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        In consequat, orci id volutpat varius, odio nulla condimentum mauris,
                        in pharetra purus neque ac magna. Praesent consectetur ex eget hendrerit vehicula.
                        Mauris sit amet metus et mi suscipit aliquam ac in nibh. In euismod urna nec lectus.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        In consequat, orci id volutpat varius, odio nulla condimentum mauris,
                        in pharetra purus neque ac magna. Praesent consectetur ex eget hendrerit vehicula.
                        Mauris sit amet metus et mi suscipit aliquam ac in nibh. In euismod urna nec lectus.
                    </p>
                </div>
                <div class="col-sm-4">
                    <img src="img/foto.jpg" class="img-responsive img-rounded quemSomos-img">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="col-sm-4">
                    <img src="img/foto.jpg" class="img-responsive img-rounded quemSomos-img">
                </div>
                <div class="col-sm-8 text-left">
                    <h4>Missão da empresa</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        In consequat, orci id volutpat varius, odio nulla condimentum mauris,
                        in pharetra purus neque ac magna. Praesent consectetur ex eget hendrerit vehicula.
                        Mauris sit amet metus et mi suscipit aliquam ac in nibh. In euismod urna nec lectus.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        In consequat, orci id volutpat varius, odio nulla condimentum mauris,
                        in pharetra purus neque ac magna. Praesent consectetur ex eget hendrerit vehicula.
                        Mauris sit amet metus et mi suscipit aliquam ac in nibh. In euismod urna nec lectus.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center btn-todos">
                <a href="quemsomos.php" class="btn btn-default btn-lg">Veja mais</a>
            </div>
        </div>



    </div>
</section>
<!-- FimQuem somos -->

<!-- Nossa equipe -->
<section id="nossa-equipe" class="div_colorida">
    <div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-header">
                <h1>Nossa Equipe
                    <small>conheça nossos colaboradores</small>
                </h1>
            </div>
        </div>
    </div>

    <div class="row nossaEquipe-item">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
            <div><img src="img/foto.jpg" class="img-responsive img-circle"></div>
            <h4>Colaborador 1</h4>
            <p>Breve descriãço do colaborador.</p>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
            <div><img src="img/foto.jpg" class="img-responsive img-circle"></div>
            <h4>Colaborador 2</h4>
            <p>Breve descriãço do colaborador.</p>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
            <div><img src="img/foto.jpg" class="img-responsive img-circle"></div>
            <h4>Colaborador 3</h4>
            <p>Breve descriãço do colaborador.</p>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
            <div><img src="img/foto.jpg" class="img-responsive img-circle"></div>
            <h4>Colaborador 4</h4>
            <p>Breve descriãço do colaborador.</p>
        </div>
    </div>
    </div>
</section>
<!-- Fim nossa equipe -->

<!-- Localizacao -->
<section id="localizacao">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <h1>Localizacao
                        <small>veja onde estamos</small>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1037.8085226721903!2d-51.15935127075266!3d-30.03356683783013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197795847e9b75%3A0xdef6118e72f8063b!2sR.+S%C3%A3o+Leopoldo%2C+429+-+Vila+Jardim%2C+Porto+Alegre+-+RS%2C+91330-690!5e1!3m2!1spt-BR!2sbr!4v1470322356006"
                        width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Fim Localizacao -->

<!-- Contato -->
<section id="contato" class="div_colorida">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <h1>Contato
                        <small>mande suas duvidas</small>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row contato">
            <div class="col-xs-12">
                <p class="bg-success aviso">
                    Preencha o formulário abaixo para entrar em contato conosco!
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <form name="frmContato" id="frmContato">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="nome" id="nome"
                                       placeholder="Qual é seu nome?" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="email" id="email"
                                       placeholder="Qual o seu email?" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="telefon" id="telefonr"
                                       placeholder="Qual o seu telefone?" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group contato">
                                <textarea class="form-control input-lg" name="mensagem" id="mensagem"
                                          placeholder="Sua mensagem!" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-success">Envio realizado</div>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-default btn-lg">Enviar Formulário</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Fim Contato -->


<!-- footer --->
<?php include 'rodape.php'; ?>
<!-- fim footer -->
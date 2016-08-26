<!-- cabecalhho -->
<?php include 'admin/cabecalho.php'; ?>
<!-- fim cabecalho -->

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
    </div>
</nav>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-xs-12">
            <div class="form-login">
                <h3>Efetue Login</h3>
                <label class="sr-only" for="emailInput">E-mail:</label>
                <input type="email" name="emailInput" id="emailInput" class="form-control input-lg" placeholder="E-mail" required />

                <label class="sr-only" for="senhalInput">Senha:</label>
                <input type="password" name="senhaInput" id="senhaInput" class="form-control input-lg" placeholder="Senha" required />

                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    <span class="glyphicon glyphicon-ok-sign"></span>
                    Logar
                </button>
            </div>
        </div>
    </div>
</div>

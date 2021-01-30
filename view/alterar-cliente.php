<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema bancário</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="https://img.icons8.com/cotton/64/000000/money.png" />
</head>

<body>
    <!--MENU-->
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="../index.php">
            Sistema bancário
        </a>
        <a class="navbar-brand" href="cadastro-cliente.php">
            Cadastar cliente
        </a>
        <a class="navbar-brand" href="lista-clientes.php">
            Listar clientes
        </a>
        <a class="navbar-brand" href="cadastro-conta.php">
            Cadastar contas
        </a>
        <a class="navbar-brand" href="lista-contas.php">
            Listar contas
        </a>
        <a class="navbar-brand">
            Gerar relatório
        </a>
    </nav>

    <!--FORMULARIO-->
    <main role="main">
        <div class="jumbotron">
            <?php
            require_once '../classes/autoload.inc.php';

            $id = $_GET['nro_pessoa'];

            $dao = new PessoaDAO();
            $prop = $dao->buscar($id);
            ?>
            <div class="container">
                <form method="post" action="../database/db-alterar-pessoa.php">
                    <input type="hidden" name="nro_pessoa" value="<?php echo $prop['nro_pessoa']; ?>">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" value="<?php echo $prop['nome'] ?>" name="nome" class="form-control" id="nome" placeholder="Nome" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="cpf">CPF</label> 
                                <input type="text"  value="<?php echo $prop['cpf'] ?>" name="cpf" class="form-control" id="cpf" placeholder="CPF" autocomplete="off">
                                <small>Por favor, digite apenas os números.</small>
                            </div>
                            <div class="col">
                                <label for="rg">RG</label>
                                <input type="text" value="<?php echo $prop['rg'] ?>" name="rg" class="form-control" id="rg" placeholder="RG" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="enviar" class="btn btn-success">Alterar cliente</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container">
        <p>&copy; Copyright 2019</p>
    </footer>
</body>

</html>
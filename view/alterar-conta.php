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

            $id = $_GET['nro_conta'];

            $dao = new ContaDAO();
            $prop = $dao->buscar($id);
            ?>
            <div class="container">
                <form method="post" action="../database/db-alterar-conta.php">
                    <input type="hidden" id="nro_conta" name="nro_conta" value="<?php echo $prop['nro_conta']; ?>">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="saldo">Saldo</label>
                                <input id="saldo" value="<?php echo $prop['saldo'] ?>" class="form-control" placeholder="Ex. 1200,00" autocomplete="off">
                            </div>
                            <div class="col">
                                <label for="limite">Limite</label>
                                <input id="limite" value="<?php echo $prop['limite'] ?>" class="form-control" placeholder="Ex. 2000,00" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="agencia">Agência</label>
                        <input id="agencia" value="<?php echo $prop['nro_agencia'] ?>" class="form-control" placeholder="Ex. 1" autocomplete="off" disabled="true">
                        <small>Digite o código da agência.</small>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="enviar" class="btn btn-success" onClick="alertaCadastro()">Cadastrar conta</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script type="text/javascript">
        function alertaCadastro() {
            alert("Alteração realizada com sucesso.");
        }
    </script>
    <footer class="container">
        <p>&copy; Copyright 2019</p>
    </footer>
</body>

</html>
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
    <main role="main">
        <div class="jumbotron">
            <article>
                <section class="jumbotron">

                    <!-- TABELA -->
                    <table class="table table-striped">
                        <thead>
                            <tr class="bg-success">
                                <th scope="col">Cliente</th>
                                <th scope="col">Agência</th>
                                <th scope="col">Saldo</th>
                                <th scope="col">Limite</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once '../classes/autoload.inc.php';

                            $conta = new ContaDAO();
                            $lista = $conta->listar();


                            foreach ($lista as $key => $value) {
                            ?>
                                <tr>
                                    <td scope="row"><?php echo $value['nro_pessoa']; ?></td>
                                    <td><?php echo $value['nro_agencia']; ?></td>
                                    <td>R$ <?php echo $value['saldo']; ?></td>
                                    <td>R$ <?php echo $value['limite']; ?></td>
                                    <td>
                                        <a href="alterar-conta.php?nro_conta=<?php echo $value['nro_conta']; ?>" class="btn btn-warning">E</a>
                                        <a href="../database/db-remover-conta.php?nro_conta=<?php echo $value['nro_conta']; ?>" class="btn btn-danger">R</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </section>
            </article>
        </div>
    </main>
    <footer class="container">
        <p>&copy; Copyright 2019</p>
    </footer>
</body>
</html>
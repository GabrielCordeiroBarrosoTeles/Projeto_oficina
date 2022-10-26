
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesq p/ Placa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
    <div class="d-flex" id="wrapper">
    <!-- SIDEBAR-->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading">
                <img src="logo.png">
                <span>Oficina</span>
            </div>
            <div class="list-group list-group-flush border-right">
                <a href="painel_area_funcionario.php" class="list-group-item list-group-item-action"><i class="fas fa-home"></i>Inicio</a>
                <a href="cad_ordem_servico.php" class="list-group-item list-group-item-action"><i class="fas fa-users"></i>Cad Ordem Serviço</a>
                <a href="pesquisa_os_com_cpf.php" class="list-group-item list-group-item-action"><i class="fas fa-sitemap"></i>Pesq OS com CPF</a>
                <a href="pesquisa_os_com_placa.php" class="list-group-item list-group-item-action"><i class="fas fa-sitemap"></i>Pesq por Placa</a>
                <a href="painel_administrador_pesq_data.php" class="list-group-item list-group-item-action"><i class="far fa-chart-bar"></i>Relatório do dia</a>
                 <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-users"></i>Listar OS</a>
            </div>  
        </div>
        <!-- CONTEÚDO -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light" id="son-navbar">
                <span id="menu-toggle" class="mr-auto"><img src="img/img_administrador.png" title="Administrador" class="mx-auto d-block"></span>
                <a  class="navbar-brand" href="#" id="navbar-site-title">Painel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#son-navbar-collapse"aria-controls="son-navbar-collapse" aria-expanded="false" aria-label="Exibe toda navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>   
                <div class="collapse navbar-collapse" id="son-navbar-collapse">
                    <form class="form-inline" id="navbar-search-form">
                        <input type="text" class="form-control form-field son-form-field" placeholder="Pesquisar" id="navbar-search-field">
                    </form>
                    <div id="navbar-profile" class="ml-auto">
                        <span>
                            <a href="sair.php">
                                Sair
                            </a>
                        </span>
                    </div>
                </div>
            </nav>
            <center>            

            </center>
            <hr>
            <center>
                <h2>
                    <img src="img/logo_baixinho.png" width="20%">
                    <br>
                   Lista de Serviços
                </h2>
            </center>
            <center>
                <form  action="pesquisa_os_com_placa.php" method="post">
                    Placa veículo:
                    <br>
                    <input type="text" name="placa">
                    <br>
                    <br>
                    <button type="submit"  class="btn btn-primary"> Consultar </button>                
                </form>
            </center>
            <br>
            <br>            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"><center>NOME</center></th>
                        <th scope="col"><center>CPF</center></th>
                        <th scope="col"><center>Telefone</center></th>
                        <th scope="col"><center>Placa</center></th>
                        <th scope="col"><center>Veículo</center></th>
                        <th scope="col"><center>Peças</center></th>
                        <th scope="col"><center>Serviço</center></th>
                        <th scope="col"><center>Data</center></th>
                        <th scope="col"><center>Detalhes</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include './conexao.php';        
                        $placa = $_POST['placa'];  
                        $sql = "SELECT * FROM ordemservico WHERE placa='$placa'";
                        $resultado = mysqli_query($con, $sql);
                        while($x = mysqli_fetch_array($resultado)){
                            echo '    
                                <tbody>
                                    <tr>
                                        <td>        '.$x['nome_cliente'].'</td>
                                        <td><center>'.$x['cpf'].'</td>
                                        <td> <center>'.$x['telefone'].'</td>
                                        <td> <center>'.$x['placa'].'</td>
                                        <td><center>'.$x['modelo'].' </td>
                                        <td><center>R$'.$x['valor_pecas'].' </td>
                                        <td><center>R$ '.$x['valor_mao_de_obra'].'</td>
                                        <td><center>R$ '.$x['data_entrega'].'</td>
                                        <td><a href="#">Ver mais...</a></td>
                                    </tr>
                            ';}
                    ?> 
                </tbody>
            </table>
        </div>
    </div>
    <!-- SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- JS do Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $("#menu-toggle").click(function(event) {
            event.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
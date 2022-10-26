<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAD OS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <script> 
        function soma() {
            form.valor_pecas.value = 
                (form.valor_1.value*1)+ 
                (form.valor_2.value*1)+ 
                (form.valor_3.value*1)+
                (form.valor_4.value*1)+
                (form.valor_5.value*1)+
                (form.valor_6.value*1)+
                (form.valor_7.value*1)+
                (form.valor_8.value*1);
        
              }
    </script>
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
                <span id="menu-toggle" class="mr-auto">
                  <img src="img/img_administrador.png" title="Administrador" class="mx-auto d-block">
                </span>
                <a  class="navbar-brand" href="#" id="navbar-site-title"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#son-navbar-collapse" aria-controls="son-navbar-collapse" aria-expanded="false" aria-label="Exibe toda navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>   
                <div class="collapse navbar-collapse" id="son-navbar-collapse">
                    <form class="form-inline" id="navbar-search-form"></form>
                    <div id="navbar-profile" class="ml-auto">
                        <span>
                            <a href="sair.php">Sair</a>
                        </span>
                    </div>
                </div>
            </nav>
            <center>            
                <form name="form" action="recebe.php" method="post" >
            </center>
            <center>
              <h2>
                <img src="img/os.png" width="100px">
                Cadastro de OS
              </h2>
              <hr>
              <h4>Dados do Cliente</h4>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">Nome do Cliente:</label>
                      <input type="text" name="nome_cliente" class="form-control" id="inputEmail4">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="inputPassword4">CPF</label>
                      <input type="text" name="cpf" class="form-control" id="inputPassword4">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">Telefone:</label>
                      <input type="text" name="telefone" class="form-control" id="inputEmail4" placeholder="(DDD) + Número" style="padding-left: 10px">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="inputPassword4">E-mail</label>
                      <input type="email" name="email"class="form-control" id="inputPassword4">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputCity">Rua</label>
                      <input type="text" name="rua" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-2">
                      <label for="inputZip">Nº</label>
                      <input type="text"name="numero" placeholder="Nº mais complemento" class="form-control" id="inputZip">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="inputState">Bairro</label>
                      <select id="inputState"name="bairro" class="form-control">
                          <option selected>Selecione...</option>
                          <option value="Conceição">Conceição</option>
                          <option value="Conceição">Conceição</option>
                          <option value="Conceição">Conceição</option>
                      </select>
              </div>
        </div> 
        <h4>Dados do Veículo</h4>
        <div class="form-row" style="padding-left: 12%">
            <div class="form-group col-md-2">
                <label for="inputZip">Nº da Placa</label>
                <input type="text" name="placa" class="form-control" id="inputZip" maxlength="7">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Marca</label>
                <input type="text" name="marca"class="form-control" id="inputZip">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Modelo</label>
                <input type="text" name="modelo"class="form-control" id="inputZip">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Quilometragem /KM</label>
                <input type="text" name="quilometragem" class="form-control" id="inputZip">
            </div>
            <div class="form-group col-md-2">
                <label for="inputState">Ano de fabricação</label>
                <select id="inputState"name="ano_fabricacao" class="form-control">
                    <option selected>Selecione...</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1997">1998</option>
                    <option value="1997">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2008">2009</option>
                    <option value="2008">2010</option>
                    <option value="2008">2011</option>
                    <option value="2008">2012</option>
                    <option value="2008">2013</option>
                    <option value="2008">2014</option>
                    <option value="2008">2015</option>
                    <option value="2008">2016</option>
                    <option value="2008">2017</option>
                    <option value="2008">2018</option>
                    <option value="2008">2019</option>
                    <option value="2008">2020</option>
                    <option value="2008">2021</option>
                    <option value="2008">2022</option>
                    <option value="2008">2023</option>
                    <option value="2008">2024</option>  
                </select>              
            </div>              
        </div> 
        <br>
        <h4>Troca de Peças</h4>
        <div class="form-row" style="padding-left: 25%">
            <div class="form-group col-md-6">
                <label for="inputCity">Descrição</label>
                <input type="text" name="descricao_1"class="form-control" id="inputCity" placeholder="Descrição 01">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Valor </label>
                <input type="text" name="valor_1"class="form-control" id="inputZip" placeholder="R$">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="descricao_2" class="form-control" id="inputCity" placeholder="Descrição 02">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="valor_2" class="form-control" id="inputZip" placeholder="R$">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="descricao_3"class="form-control" id="inputCity" placeholder="Descrição 03">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="valor_3"class="form-control" id="inputZip" placeholder="R$">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="descricao_4"class="form-control" id="inputCity" placeholder="Descrição 04"> 
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="valor_4"class="form-control" id="inputZip" placeholder="R$">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="descricao_5"class="form-control" id="inputCity" placeholder="Descrição 05">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="valor_5"class="form-control" id="inputZip" placeholder="R$">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="descricao_6"class="form-control" id="inputCity" placeholder="Descrição 06">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="valor_6"class="form-control" id="inputZip" placeholder="R$">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="descricao_7"class="form-control" id="inputCity" placeholder="Descrição 07">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="valor_7"class="form-control" id="inputZip" placeholder="R$">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="descricao_8"class="form-control" id="inputCity" placeholder="Descrição 08">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="valor_8"class="form-control" id="inputZip" placeholder="R$">
            </div>
        </div>
        <input style="color: black; font-size: 18px;border-radius: 10px; background:yellow; padding:  10px;"type="button"onclick="soma()" value="Calcular Valor das Peças">
        <div class="form-group col-md-2">
            Total
            <input type="text" name="valor_pecas" readonly class="form-control" id="inputZip" placeholder="R$"> 
        </div>
        <h4>Mão de Obra </h4>
        <div class="form-row" style="padding-left: 25%">
            <div class="form-group col-md-6">
                <input type="text" name="desc_mao_de_obra"class="form-control" id="inputCity" placeholder="Descrição 01">
            </div>
            <div class="form-group col-md-2">
                <input type="text"name="valor_mao_de_obra" class="form-control" id="inputZip" placeholder="R$">
            </div>
        </div>
        <center>
            <div class="form-row" style="padding-left: 30%">
                <div>
                    <label for="inputZip">Data Atual</label>
                    <input type="date" name="data_atual"class="form-control" id="inputZip" maxlength="7">
                </div>
                <div>
                    <label for="inputZip">Data de Entrega</label>
                    <input type="date" name="data_entrega"class="form-control" id="inputZip">
                </div>
            </div>
        </center>
        <br>               
        <button type="submit" class="btn btn-primary">Cadastrar OS</button>
        <hr>
        CH - Desenvolvimento de Sistemas (88)9.9915-5630
        <hr>
    </div>
    <hr>
    <br>
    <br>
    <br>
                </form>
            </center>
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
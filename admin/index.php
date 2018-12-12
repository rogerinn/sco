<!DOCTYPE html>
<html lang="pt">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SGO -ND">
    <meta name="author" content="Rogério Sandro Pereira Junior>> rogeriosandro@hotmail.com">

    <!-- Title Page-->
    <title>SGO-NG</title>

    <!-- Fontfaces CSS-->
      <link rel="icon" type="image/png" href="../image/logo.png"/>
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="../css/bootstrap-theme.css" rel="stylesheet" media="all">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet" media="all">
    <link href="../css/bootstrap.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="../css/text.css" rel="stylesheet" media="all">
    <link href="css/main_2.css" rel="stylesheet" media="all">
    <link href="css/main_3.css" rel="stylesheet" media="all">
    <script src="vendor/jquery-3.2.1.min.js"></script>
      <script src="vendor/jquery-1.8.3.min.js"></script>
    <!-- Bootstrap JS-->
        <!--MASCARA INPUT -->
    <script src="vendor/mostrar.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>   
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="vendor/jquery.mask.js"></script>
    <script src="vendor/jquery.mask.min.js"></script>   
    <script>
    jQuery(function($){
        $("#data").mask("00/00/0000");
        $("#data1").mask("00/00/0000");   
        $("#data_visita").mask("00/00/0000");    
        $("#data_registro").mask("00/00/0000");            
        $("#horario").mask("00:00");             
        $("#horario_registro").mask("00:00");            
        $("#data_visita1").mask("00/00/0000");    
        $("#horario1").mask("00:00");                  
        $("#cpf").mask("000.000.000-00");
        $("#cpf1").mask("000.000.000-00");
        $("#cpf_registro").mask("000.000.000-00");        
        $("#telefone").mask("(00) 0 0000-0000");
        $("#telefone1").mask("(00) 0 0000-0000");
        $("#cep").mask("00000-000");
    });
    </script>
</script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                          <img src="../image/logo.jpeg" alt="SCO"  class="image_logo_cell"/>
                                                <H3>SGO </H3>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Ferramentas</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                   <a href="#" onclick="Mudar('painel_master')">Cadastrar masters</a>
                                </li>
                                <li>
                                    <a href="#" onclick="Mudar('painel_cordenadores')">Cadastro cordenadores</a>
                                </li>
                                <li>
                                    <a href="#"  onclick="Mudar('painel_solicitantes')">Cadastro solicitantes</a>
                                </li> 
                                <li>
                                    <a href="#" onclick="Mudar('painel_ocorrencias')">Ocorrencias</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../image/logo.jpeg" alt="SCO"  class="image_logo"/>
                </a>
                <H3>SGO</H3>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Ferramentas</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#" onclick="Mudar('painel_master')" >Cadastrar masters</a>
                                </li>
                                <li>
                                    <a href="#" onclick="Mudar('painel_cordenadores')" >Cadastro cordenadores </a>
                                </li>
                                 <li>
                                    <a href="#"  onclick="Mudar('painel_solicitantes')" >Cadastro solicitantes</a>
                                </li>
                                <li>
                                    <a href="#" onclick="Mudar('painel_ocorrencias')">Ocorrencias</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                        <div class="content">
                                            <p class='name"'>Olá administrador</p>
                                        </div>
                                        <div>
                                        <form method="post" action="../ferramentas_comom/sair.php">
                                        <button class="sair">
                                            Sair
                                        </button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                </div>
                            </div>
                        </div>
                        <div id="painel_master" class="panel panel-default" >
                                <div class="panel-heading">Painel de cadastro
                                    <br /> 
                                </div>
                                <form action="?cad=sHASIOHIAOJHSOIhioahsdiohioadasda1s56d1as5d4as8d1a8sd4a89" method="post" onsubmit="return validar()" enctype="multipart/form-data">
                                    <div class="panel-body">
                                        <div class="text_painel">
                                            <h4>Dados pessoais<h4>
                                                <br />
                                                         <input type="text" class="form-control border" placeholder="Nome Completo" aria-describedby="sizing-addon3" name="nome" required value >
                                                         <br/>
                                                        <input type="tel" class="form-control border"  placeholder="Data Nascimento" aria-describedby="sizing-addon3" name="data_nascimento" id="data"  required value>
                                                         <br/>
                                                                <div class="dropdown">
                                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >
                                                                                Sexo
                                                                         <span class="caret"></span>
                                                                        </button>
                                                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" required value>
                                                                    <li><input type="radio" name="sexo" value="masculino" id="masculino" /> <label>Masculino</label></li>
                                                                    <li><input type="radio" name="sexo" value="feminino"   id="feminino"/> <label>Feminino</label></li>
                                                                </ul>          
                                                             </div>        
                                                             <hr>
                                                                <div class="dropdown">
                                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                                Nacionalidade
                                                                         <span class="caret"></span>
                                                                        </button>
                                                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                                    <li><input type="checkbox" name="nacionalidade" value="brasileira"/> <label>Brasileira</label></li>
                                                                    <li><input type="checkbox" name="nacionalidade" value="outra"/> <label>Outra</label></li>
                                                                </ul>          
                                                             </div>                                               
                                                         <br/>
                                                         <input type="tel" class="form-control border" placeholder="CPF" aria-describedby="sizing-addon3"  name="cpf" id="cpf" required value>
                                                         <br/>
                                                         <input type="text" class="form-control border" placeholder="Estado civil" aria-describedby="sizing-addon3" name="estado_civil"  required value>
                                                         <br>
                                                         <input type="text" class="form-control border" placeholder="Cargo profissional"  name="cargo_profissional"  required value>
                                                         <hr>
                                                          <h4>Contato<h4>
                                                            <br/>
                                                         <input type="tel" class="form-control border" placeholder="Telefone-Celular" aria-describedby="sizing-addon3" name="telefone_celular" id="telefone"  required value>
                                                         <br/>
                                                         <input type="tel" class="form-control border" placeholder="Telefone" aria-describedby="sizing-addon3" name="telefone" id="telefone1"  required value>
                                                         <br/>
                                                         <input type="email" class="form-control border" placeholder="Email" aria-describedby="sizing-addon3" name="email"  required value>
                                                         <hr>
                                                         <h4>Endereço<h4>
                                                            <br>
                                                        <input type="text" class="form-control border" placeholder="Cidade" aria-describedby="sizing-addon3" name="cidade"  required value>
                                                        <br>
                                                        <input type="text" class="form-control border" placeholder="Bairro" aria-describedby="sizing-addon3" name="bairro"  required value>
                                                         <br/>
                                                         <input type="text" class="form-control border" placeholder="Estado" aria-describedby="sizing-addon3" name="estado"  required value>
                                                         <br/>
                                                         <input type="tel" class="form-control border" placeholder="CEP" aria-describedby="sizing-addon3" name="cep" id="cep" required value>
                                                         <hr>
                                                         <h4>Senha para acesso</h4>
                                                         <br>
                                                         <input type="password" class="form-control border" placeholder="Senha" aria-describedby="sizing-addon3" name="senha"  required value>
                                                         <hr>
                                                         <center>
                                                         <h4>Anexo foto biometria<h4>
                                                         <label id="file" name="imagem" for='selecao-arquivo'>Selecionar um arquivo &#187;</label>
                                                         <input id='selecao-arquivo' type='file' name="imagem">
                                                        </center>
                                                         <hr>
                                                            <?php 
                                                            $link_cad = $_GET['cad'];
                                                            switch ($link_cad) {
                                                             case "sHASIOHIAOJHSOIhioahsdiohioadasda1s56d1as5d4as8d1a8sd4a89":
                                                            include "cadastro_script/master_script.php";
                                                            break;
                                                        }
                                                            ?>
                                                         <p id="error_sexo_nacionalidade"><?php echo "$msg1"; ?></p>
                                                         <hr>
                                                        <button class="btn_cad">Cadastrar</button>
                                                        </form>
                                                        <input type="submit"  class="btn_close" onclick="Mudar('painel_cordenadores')" value="Sair">
                                                        <br>
                                                        <hr>                                                        
                                                        </div>
                                                       </div>
                                                       </div>
                                <div id="painel_cordenadores" class="panel panel-default" >
                                <div class="panel-heading">Painel de cadastro
                                    <br /> 
                                </div>
                                <form action="?cad=dhashduahsuidhuadye7w773173817891dshdhausdausi" method="post" onsubmit="return validar()" enctype="multipart/form-data">
                                    <div class="panel-body">
                                        <div class="text_painel">
                                            <h4>Dados pessoais<h4>
                                                <br />
                                                         <input type="text" class="form-control border" placeholder="Nome Completo" aria-describedby="sizing-addon3" name="nome" required value >
                                                         <br/>
                                                        <input type="tel" class="form-control border"  placeholder="Data Nascimento" aria-describedby="sizing-addon3" name="data_nascimento" id="data"  required value>
                                                         <br/>
                                                                <div class="dropdown">
                                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >
                                                                                Sexo
                                                                         <span class="caret"></span>
                                                                        </button>
                                                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" required value>
                                                                    <li><input type="radio" name="sexo" value="masculino" id="masculino" /> <label>Masculino</label></li>
                                                                    <li><input type="radio" name="sexo" value="feminino"   id="feminino"/> <label>Feminino</label></li>
                                                                </ul>          
                                                             </div>        
                                                             <hr>
                                                                <div class="dropdown">
                                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                                Nacionalidade
                                                                         <span class="caret"></span>
                                                                        </button>
                                                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                                    <li><input type="checkbox" name="nacionalidade" value="brasileira"/> <label>Brasileira</label></li>
                                                                    <li><input type="checkbox" name="nacionalidade" value="outra"/> <label>Outra</label></li>
                                                                </ul>          
                                                             </div>                                               
                                                         <br/>
                                                         <input type="tel" class="form-control border" placeholder="CPF" aria-describedby="sizing-addon3"  name="cpf" id="cpf" required value>
                                                         <br/>
                                                         <input type="text" class="form-control border" placeholder="Estado civil" aria-describedby="sizing-addon3" name="estado_civil"  required value>
                                                         <br>
                                                         <input type="text" class="form-control border" placeholder="Cargo profissional"  name="cargo_profissional"  required value>
                                                         <hr>
                                                          <h4>Contato<h4>
                                                            <br/>
                                                         <input type="tel" class="form-control border" placeholder="Telefone-Celular" aria-describedby="sizing-addon3" name="telefone_celular" id="telefone"  required value>
                                                         <br/>
                                                         <input type="tel" class="form-control border" placeholder="Telefone" aria-describedby="sizing-addon3" name="telefone" id="telefone1"  required value>
                                                         <br/>
                                                         <input type="email" class="form-control border" placeholder="Email" aria-describedby="sizing-addon3" name="email"  required value>
                                                         <hr>
                                                         <h4>Endereço<h4>
                                                            <br>
                                                        <input type="text" class="form-control border" placeholder="Cidade" aria-describedby="sizing-addon3" name="cidade"  required value>
                                                        <br>
                                                        <input type="text" class="form-control border" placeholder="Bairro" aria-describedby="sizing-addon3" name="bairro"  required value>
                                                         <br/>
                                                         <input type="text" class="form-control border" placeholder="Estado" aria-describedby="sizing-addon3" name="estado"  required value>
                                                         <br/>
                                                         <input type="tel" class="form-control border" placeholder="CEP" aria-describedby="sizing-addon3" name="cep" id="cep" required value>
                                                         <hr>
                                                         <h4>Senha para acesso</h4>
                                                         <br>
                                                         <input type="password" class="form-control border" placeholder="Senha" aria-describedby="sizing-addon3" name="senha"  required value>
                                                         <hr>
                                                         <center>
                                                         <h4>Anexo foto biometria<h4>
                                                         <label id="file" name="imagem" for='selecao-arquivo'>Selecionar um arquivo &#187;</label>
                                                         <input id='selecao-arquivo' type='file' name="imagem">
                                                         </center>
                                                         <hr>
                                                            <?php 
                                                            $link_cad = $_GET['cad'];
                                                            switch ($link_cad) {
                                                             case "dhashduahsuidhuadye7w773173817891dshdhausdausi":
                                                            include "cadastro_script/cordenador_script.php";
                                                            break;
                                                        }
                                                            ?>
                                                         <p id="error_sexo_nacionalidade"><?php echo "$msg1"; ?></p>
                                                         <hr>
                                                        <button class="btn_cad">Cadastrar</button>
                                                        </form>
                                                        <input type="submit"  class="btn_close" onclick="Mudar('painel_cordenadores')" value="Sair">
                                                        <br>
                                                        <hr>                                                        
                                                        </div>
                                                       </div>
                                                       </div>
                                                        <div id="painel_solicitantes" class="panel panel-default" >
                                                        <div class="panel-heading">Painel de cadastro
                                                         <br /> 
                                                        </div>
                                                        <div class="panel panel-default">
                                                          <div class="panel-body">
                                                            <h4>Cadastro solicitantes</h4>
                                                            <br>
                                                            <input type="text" class="form-control border1" placeholder="Nº descriminação" aria-describedby="sizing-addon3" required value>
                                                            <input type="tel" class="form-control border1" placeholder="Data" aria-describedby="sizing-addon3"   id="data_registro" required value>
                                                            <input type="tel" class="form-control border1" placeholder="Horário" aria-describedby="sizing-addon3"   id="horario_registro" required value>
                                                            <br/>
                                                            <input type="text" class="form-control border3" placeholder="Nome solicitante" aria-describedby="sizing-addon3" required value>
                                                            <input type="text" class="form-control border1" placeholder="Nome morador" aria-describedby="sizing-addon3" required value>
                                                            <input type="tel" class="form-control border1" placeholder="CI nº" aria-describedby="sizing-addon3" required value>
                                                            <input type="tel" class="form-control border1" placeholder="CPF" aria-describedby="sizing-addon3" id="cpf_registro" required value>
                                                            <input type="text" class="form-control border3" placeholder="Endereço" aria-describedby="sizing-addon3"  required value>
                                                            <input type="tel" class="form-control border1" placeholder="Numero" aria-describedby="sizing-addon3" id="cpf_registro" required value>
                                                            <input type="text" class="form-control border1" placeholder="Complemento" aria-describedby="sizing-addon3" id="cpf_registro" required value>
                                                            <input type="text" class="form-control border1" placeholder="Estado" aria-describedby="sizing-addon3" id="cpf_registro" required value>
                                                            <input type="tel" class="form-control border1" placeholder="Telefone morador" aria-describedby="sizing-addon3" id="cpf_registro" required value>
                                                            <input type="tel" class="form-control border1" placeholder="Telefone solicitante" aria-describedby="sizing-addon3" id="cpf_registro" required value>
                                                            <input type="tel" class="form-control border1" placeholder="Ponto de refêrencia" aria-describedby="sizing-addon3" id="cpf_registro" required value>
                                                            <hr>
                                                        <button class="btn_cad">Cadastrar</button>
                                                        <input type="submit"  class="btn_close" onclick="Mudar('painel_solicitantes')" value="Sair">
                                                          </div>
                                                      </div>
                                                        </div>     
                                                        <form method="post" action="#" enctype="multipart/form-data">
                                                        <div id="painel_ocorrencias" class="panel panel-default">
                                                        <div class="panel-heading">Painel de ocorencias</div>
                                                        <div class="panel panel-default">
                                                          <div class="panel-body">
                                                            <h4>Dados do solicitante<h4><br/>
                                                         <input type="text" class="form-control border1" placeholder="Nome" aria-describedby="sizing-addon3" required value>
                                                         <input type="tel" class="form-control border1" placeholder="CPF" aria-describedby="sizing-addon3"  id="cpf1" required value>
                                                         <input type="tel" class="form-control border1" placeholder="Data" aria-describedby="sizing-addon3"  id="data1" required value>
                                                          </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                          <div class="panel-body">
                                                            <h4>Localização<h4><br/>
                                                            <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio" value="area_particular" checked> <span class="label-text">Área particular</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio" value="area_reocupada" checked> <span class="label-text">Área reocupada</span>
                                                                        </label>
                                                                    </div>                                                                    
                                                            </div>
                                                            <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio" value="area_publica" checked> <span class="label-text">Área pública</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio" value="ais" checked> <span class="label-text">Área de interesse social</span>
                                                                        </label>
                                                                    </div>                                                                    
                                                            </div> 
                                                            <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio" value="area_institucional" checked> <span class="label-text">Área institucional</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio" value="app" checked> <span class="label-text">Área de presenvação permanente</span>
                                                                        </label>
                                                                    </div>                                                                    
                                                            </div>                                                                                                                                                                                   
                                                          </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                          <div class="panel-body">
                                                            <h4>Tipo de construção<h4><br/>        
                                                            <div class="col-md-4">
                                                                    <h5>Edificação</h5>
                                                                    <hr>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio1" checked> <span class="label-text">Barracão</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio1"> <span class="label-text">Casa</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio1"> <span class="label-text">Prédio</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio1" > <span class="label-text">Galpão</span>
                                                                        </label>
                                                                    </div>              
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio1" > <span class="label-text">Outro</span>
                                                                        </label>
                                                                    </div>                                                                                    
                                                          </div>
                                                           <div class="col-md-4">
                                                                    <h5>EStrutura</h5>
                                                                    <hr>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio2" checked> <span class="label-text">Alvenaria</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio2"> <span class="label-text">Madeira</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio2"> <span class="label-text">Concreto armado</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio2" > <span class="label-text">Pré-fabricado</span>
                                                                        </label>
                                                                    </div>              
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio2" > <span class="label-text">Outros materias</span>
                                                                        </label>
                                                                    </div>                                                                                    
                                                          </div>
                                                          <div class="col-md-4">
                                                                    <h5>Cobertura</h5>
                                                                    <hr>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio3" checked> <span class="label-text">Lage</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio3"> <span class="label-text">Fibrocimento</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio3"> <span class="label-text">Cerâmica</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio3" > <span class="label-text">Zinco</span>
                                                                        </label>
                                                                    </div>              
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio3" > <span class="label-text">Outros materias</span>
                                                                        </label>
                                                                    </div>                                                                                    
                                                          </div>
                                                          <div class="col-md-4">
                                                            <br>
                                                                    <h5>Localização</h5>
                                                                    <hr>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio4" checked> <span class="label-text">Sem restrição</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio4"> <span class="label-text">Sobre encosta</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio4"> <span class="label-text">Sob encosta</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio4" > <span class="label-text">Margem de córrego</span>
                                                                        </label>
                                                                    </div>              
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio4" > <span class="label-text">Talvegue</span>
                                                                        </label>
                                                                    </div>                                                                                    
                                                          </div> 
                                                          <div class="col-md-4">
                                                            <br />
                                                                    <h5>Tipografia</h5>
                                                                    <hr>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio5" checked> <span class="label-text">Área erodida</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio5"> <span class="label-text">Sobre canalização</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio5"> <span class="label-text">Cômodos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio5" > <span class="label-text">Pavimentos</span>
                                                                        </label>
                                                                    </div>              
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio5" > <span class="label-text">Unidades</span>
                                                                        </label>
                                                                    </div>                                                       
                                                          </div>                                                                                                             
                                                      </div>
                                                        </div> 
                                                         <div class="panel panel-default">
                                                              <div class="panel-body">
                                                                <h4>Risco geológico</h4>
                                                                <br>
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio6" > <span class="label-text">Risco baixo</span>
                                                                        </label>
                                                                    </div> 
                                                                   <div class="col-md-4">   
                                                                  <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio6" > <span class="label-text">Risco médio</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                    <div class="col-md-4">
                                                                  <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="radio6" > <span class="label-text">Risco alto</span>
                                                                            <br>
                                                                        </label>
                                                                    </div>
                                                                    </div>
                                                                    <br>
                                                                  <input type="text" class="form-control border" placeholder="Especificação" aria-describedby="sizing-addon3" required value>
                                                                  </div>
                                                                   </div>
                                                                  </div>
                                                                  <div class="panel panel-default">
                                                                  <div class="panel-body">
                                                                    <h4>Unidade famila</h4>
                                                                    <br>
                                                                    <div class="col-md-4">
                                                                    <div class="form-check">
                                                                     <label>
                                                                      <input type="checkbox" name="check" checked> <span class="label-text">Moradores na unidade?</span><br />
                                                                     </label>
                                                                     </div>
                                                                     <div class="form-check">
                                                                      <label>
                                                                      <input type="checkbox" name="check" checked> <span class="label-text">Deficientes na unidade?</span>
                                                                     </label>
                                                                    <input type="text" class="form-control border2" placeholder="Menores de 12 anos?" aria-describedby="sizing-addon3" required value>
                                                                    <input type="text" class="form-control border2" placeholder="Tempo de moradia?" aria-describedby="sizing-addon3" required value>
                                                                    <input type="text" class="form-control border2" placeholder="Número de adultos?" aria-describedby="sizing-addon3" required value>
                                                                    <input type="text" class="form-control border2" placeholder="Número de moradias?" aria-describedby="sizing-addon3" required value>
                                                                    <input type="text" class="form-control border2" placeholder="Número de idosos?" aria-describedby="sizing-addon3" required value>
                                                                    </div>
                                                                    </div>      
                                                                  </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                  <div class="panel-body">
                                                                    <h4>Caracterização do local</h4><br>
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio7" > <span class="label-text">Encosta</span>
                                                                        </label><br>
                                                                         <label>
                                                                            <input type="radio" name="radio7" > <span class="label-text">Área plainada</span>
                                                                        </label><br>
                                                                         <label>
                                                                            <input type="radio" name="radio7" > <span class="label-text">Fundo vale</span>
                                                                        </label>
                                                                    </div> 
                                                                </div>
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio7" > <span class="label-text">De aterro</span>
                                                                        </label><br>
                                                                         <label>
                                                                            <input type="radio" name="radio7" > <span class="label-text">Natural</span>
                                                                        </label><br>
                                                                         <label>
                                                                            <input type="radio" name="radio7" > <span class="label-text">De córrego</span>
                                                                        </label>
                                                                    </div> 
                                                                </div>             
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio7" > <span class="label-text">Planície aluvial</span>
                                                                        </label><br>
                                                                         <label>
                                                                            <input type="radio" name="radio7" > <span class="label-text">Totalmente ocupada</span>
                                                                        </label><br>
                                                                         <label>
                                                                            <input type="radio" name="radio7" > <span class="label-text">De corte</span>
                                                                        </label>
                                                                    </div> 
                                                                </div>                                                                                                                      
                                                                  </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                  <div class="panel-body">
                                                                  <h4>Topografica da ocorrência</h4>     
                                                                  <br>
                                                                  <div class="container1">
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check" checked> <span class="label-text">Escorregamento de solo</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Desprendimento de reboco</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Inexist/insuf de drenagem pluvial</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Desabamento parcial</span>
                                                                        </label>         
                                                                    </div>                                                                               
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check" > <span class="label-text">Lençou freático alto</span>
                                                                        </label>         
                                                                    </div>  
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check" > <span class="label-text">Avarias no telhado</span>
                                                                        </label>         
                                                                    </div>     
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check" > <span class="label-text">Lançamento de lixo / entulho / aterro</span>
                                                                        </label>         
                                                                    </div>      
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check" > <span class="label-text">Terreno impróprio</span>
                                                                        </label> <hr>       
                                                                    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                                                              </div>
                                                                  <div class="container12">
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check" checked> <span class="label-text">Escorregamento de aterro</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Degrau de abatimento</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Alagamento</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Desabamento total</span>
                                                                        </label>         
                                                                    </div>                     
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Erosão</span>
                                                                        </label>         
                                                                    </div>          
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Abatimento de fossa</span>
                                                                        </label>         
                                                                    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Trincas no terreno</span>
                                                                        </label>         
                                                                    </div>                               
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Ponto de concentração de águas pluviais</span>
                                                                        </label><hr>         
                                                                    </div>                                                                                                                         
                                                              </div>
                                                                  <div class="container12">
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check" checked> <span class="label-text">Escorregamento de lixo / entulho</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Construção inadequada</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Incêndio</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Estrutura deformada</span>
                                                                        </label>         
                                                                    </div>           
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Bloqueio de passagem de águas</span>
                                                                        </label>         
                                                                    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Lançamento de água pluvial/esgoto</span>
                                                                        </label>         
                                                                    </div>                                                                               
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Infiltração</span>
                                                                        </label>         
                                                                    </div>                                                                               
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Precário / insalubre</span>
                                                                        </label><hr>         
                                                                    </div>                                                                               
                                                              </div>
                                                                  <div class="container12">
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check" checked> <span class="label-text">Trincas</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Rede pública de drenagem pluvial rompida</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Rachaduras</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Cicatriz de escorregamento</span>
                                                                        </label>         
                                                                    </div>                                                                          
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Inundação de córrego/rioscorregamento</span>
                                                                        </label>         
                                                                    </div>                                                                                                                                                                                                                     
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Plantação de bananeira/árvore grande porte</span>
                                                                        </label>         
                                                                    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Solopamento</span>
                                                                        </label>         
                                                                    </div>                                                                               
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Rolamento /tombamento de blocos</span>
                                                                        </label><hr>             
                                                                    </div>                                                                               
                                                              </div>                                                                                                                                                                                          
                                                            </div>
                                                                <div class="panel panel-default">
                                                                  <div class="panel-body">
                                                                    <h4>Caracterização do local</h4><br>
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio8" > <span class="label-text">Conflito entre vizinhos</span>
                                                                        </label><br>
                                                                         <label>
                                                                            <input type="radio" name="radio8" > <span class="label-text">Árvore</span>
                                                                        </label><br>
                                                                    </div> 
                                                                </div>
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio8" > <span class="label-text">Avaliação de risco</span>
                                                                        </label><br>
                                                                         <label>
                                                                            <input type="radio" name="radio8" > <span class="label-text">Poste</span>
                                                                        </label><br>
                                                                    </div> 
                                                                </div>             
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio8" > <span class="label-text">Copasa</span>
                                                                        </label><br>
                                                                    </div> 
                                                                </div>                                                                                                                      
                                                                  </div>
                                                                </div>    
                                                                <div class="panel panel-default">
                                                                  <div class="panel-body">
                                                                    <h4>Consequências</h4><br>
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio8" > <span class="label-text">Conflito entre vizinhos</span>
                                                                        </label>                                                                        
                                                                    </div> 
                                                                </div>
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio8" > <span class="label-text">Avaliação de risco</span>
                                                                        </label>
                                                                    </div> 
                                                                </div>
                                                                <input type="text" class="form-control border" placeholder="Especificação" aria-describedby="sizing-addon3" required value>                                                                                                                                  
                                                                  </div>
                                                                </div>  
                                                                <div class="panel panel-default">
                                                                  <div class="panel-body">
                                                                    <h4>Atingido</h4><br>
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio9" > <span class="label-text">Residência própria/locada</span>
                                                                        </label><br>
                                                                         <label>
                                                                            <input type="radio" name="radio9" > <span class="label-text">Galpão</span>
                                                                        </label><br>
                                                                    </div> 
                                                                </div>
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio9" > <span class="label-text">Muro</span>
                                                                        </label><br>
                                                                         <label>
                                                                            <input type="radio" name="radio9" > <span class="label-text">Prédio público</span>
                                                                        </label><br>
                                                                    </div> 
                                                                </div>             
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio9" > <span class="label-text">Ponte</span>
                                                                        </label><br>
                                                                    </div> 
                                                                </div>                                                                                                                      
                                                                  </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                  <div class="panel-body">
                                                                  <h4>Situação do imóvel no momento da vistoria</h4>
                                                                  <br />
                                                                  <input type="textbox" class="border4" placeholder="Descreva">
                                                                  </div>
                                                                  </div>    
                                                                <div class="panel panel-default">
                                                                  <div class="panel-body">
                                                                 <h4>Visitas / Tentativas de visitas</h4>
                                                                 <br />
                                                                 <p>1º tentativa</p><hr />
                                                                 <input type="tel" class="border1"  placeholder="Data" aria-describedby="sizing-addon3" name="data_visita_1" id="data_visita"  required value>
                                                                 <input type="tel" class="border1"  placeholder="Horario" aria-describedby="sizing-addon3" name="data_visita_1" id="horario"  required value>
                                                                 <input type="text" class="border1"  placeholder="Equipe" aria-describedby="sizing-addon3" name="equipe"   required value>
                                                                         <label>
                                                                            <input type="checkbox" name="check_visita" > <span class="label-text">Vistoria realizada?</span>
                                                                        </label><hr>
                                                                        <!--  -->
                                                                 <p>2º tentativa</p><hr />
                                                                 <input type="tel" class="border1"  placeholder="Data" aria-describedby="sizing-addon3"  id="data_visita1"  required value>
                                                                 <input type="tel" class="border1"  placeholder="Horario" aria-describedby="sizing-addon3"  id="horario1"  required value>
                                                                 <input type="text" class="border1"  placeholder="Equipe" aria-describedby="sizing-addon3"  required value>
                                                                         <label>
                                                                            <input type="checkbox" name="check_visita" > <span class="label-text">Vistoria realizada?</span>
                                                                        </label>                                                                        
                                                                 </div>
                                                                 </div>
                                                                  <div class="panel panel-default">
                                                                  <div class="panel-body">                                                                                                                                                                                                                                                                                                                       
                                                                    <h4>Orientação fornecida</h4>
                                                                    <br>
                                                                <div class="container1">
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check1" checked> <span class="label-text">Monitoramento pelo morador</span>
                                                                        </label><br>
                                                                        <label>
                                                                            <input type="checkbox" name="check1" checked> <span class="label-text">Não permanecer no local enquanto houver risco de acidente</span>
                                                                        </label><br>
                                                                        <label>
                                                                            <input type="checkbox" name="check1" checked> <span class="label-text">Remoção de bananeiras</span>
                                                                        </label><br>                                                                                                                                                                                                                                                                                             
                                                                    </div>
                                                                </div>
                                                                <div class="container13">
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check1" checked> <span class="label-text">Inversão de cômodos</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check1"> <span class="label-text">Não permanecer em caso de chuva</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Providenciar manutenção necessária</span>
                                                                        </label>
                                                                    </div>    
                                                                    <div class="form-check">       
                                                                    </div>                                                                                                                         
                                                              </div>     
                                                                <div class="container13">
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check" checked> <span class="label-text">Contratar profissionais qualificados para execultar a manuntenção</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Solicitar nova vistoria se modificar quadro</span>
                                                                        </label>
                                                                    </div>      
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Não expandir edificação</span>
                                                                        </label>
                                                                    </div>                                                                                                                                                                                                
                                                              </div>    
                                                            <div class="container13">                                                                                                                     
                                                                <div class="form-check">
                                                                        <label>
                                                                            <input type="checkbox" name="check"> <span class="label-text">Remoção de entulho</span>
                                                                        </label>
                                                                    </div>                                                                
                                                            </div>
                                                        </div>
                                                        </div>
                                                                  <div class="panel panel-default">
                                                                  <div class="panel-body">     
                                                                  <h4>Providência / encaminhamentos</h4>
                                                                  <br>
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio10" > <span class="label-text">Remoção temporária</span>
                                                                        </label><br>
                                                                         <label>
                                                                            <input type="radio" name="radio10" > <span class="label-text">Remoção definitiva</span>
                                                                        </label><br>
                                                                    </div> 
                                                                </div> 
                                                                     <div class="form-check">
                                                                        <div class="col-md-4">
                                                                        <label>
                                                                            <input type="radio" name="radio10" > <span class="label-text">Providências serão tomadas pelo morador</span>
                                                                        </label><br>
                                                                         <label>
                                                                            <input type="radio" name="radio10" > <span class="label-text">Solução por acordo amigável ou litigioso</span>
                                                                        </label><br>
                                                                    </div> 
                                                                </div> 
                                                                            <input type="text" class="form-control border"  placeholder="Fora dos críterios - Especifique" aria-describedby="sizing-addon3" name="equipe"   required value><br>
                                                                            <input type="text" class="form-control border1"  placeholder="Retorno ao local em X dias" aria-describedby="sizing-addon3" name="equipe"   required value>    
                                                                            <input type="text" class="form-control border1"  placeholder="Ofício emitido" aria-describedby="sizing-addon3" name="equipe"   required value>                                                                                                                                                                                              
                                                                  </div>
                                                                  </div>  
                                                                   <div class="panel panel-default">
                                                                  <div class="panel-body">                                                                                                                 
                                                                    <h4>Parecer do diretor(a)</h4>
                                                                    <br>
                                                                     <input type="text" class="form-control border1"  placeholder="Encaminhamento para...." aria-describedby="sizing-addon3" name="data_visita_1" id="data_visita"  required value>
                                                                         <label>
                                                                            <input type="checkbox" name="check_visita" > <span class="label-text">Arquivar</span>
                                                                        </label>       
                                                                    </div>
                                                                    </div>
                                                                   <div class="panel panel-default">
                                                                  <div class="panel-body"> 
                                                                    <h4>Concluir solicitação</h4>
                                                                    <br>
                                                                    <center>
                                                                     <h4>Assinatura do solicitante<h4>
                                                                     <label id="file" name="assinatura_photo" for='selecao-arquivo'>Selecionar um foto</label>
                                                                     <input id='selecao-arquivo' type='file' name="imagem">       
                                                                     </center>
                                                                     <hr>
                                                                     <button class="btn_cad1">Enviar</button>       
                                                                     <a href="#" onclick="Mudar('painel_ocorrencias')" class="btn_close1">Sair</a>                                                      
                                                            </div>
                                                        </div>
                                                        </form>                                                         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
    </div> 
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
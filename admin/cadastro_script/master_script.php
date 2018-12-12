<?php 
   //Abrindo sessão
    session_start();
    ob_start();
    #
    #
    $msg1 = "";
    echo "
    <style>
    #mostrar {
    display: block;
    }
    </style>
    ";
    //Criando variaveis gerais
    $nome = $_POST['nome'];                                                                                                                                                                                                                                                             
    $data_nascimento = $_POST['data_nascimento'];                                                    
    $sexo = $_POST['sexo'];                                                                                                                                                                                     
    $nacionalidade = $_POST['nacionalidade'];                              
    $cpf = $_POST['cpf'];
    $estado_civil = $_POST['estado_civil'];
    $cargo_profissional = $_POST['cargo_profissional'];
    $telefone_celular = $_POST['telefone_celular'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $senha = $_POST['senha'];
    $file = $_FILES['imagem']['tmp_name'];
    $file_name = $_FILES['imagem']['name'];
    //Verifica se teve upload de imagens
    if (empty($file)) {
        $msg1 = "É necessario anexar uma foto da biometria";
    } else { 
        //Pegando extensão
        $ext = strtolower(substr($file_name, -4));
        if($ext != ".png"){
                    $msg1 = "Somente imagens em formato PNG";
        } else { 
        //Defininido nome
        $name1 = $cpf .$ext;
        //Definindo local par upload
        $local = "/srv/http/sco/biometria_master/";
        //Fazendo Upload
        move_uploaded_file($file, $local.$name1);
    //Verifica se as opções sexo e nacionalidade foram marcadas
    if (empty($sexo)) {
        $msg1 = "É preciso definir o sexo";
    } elseif (empty($nacionalidade)) {
        $msg1 = "É preciso definir a nacionalidade";
    } else {
        //Criptografar senha
        $senha = md5($senha);
        //incluir conexão com o banco de dados
        include("../conections/conection_bd_cadastro.php");
        //Verificar se já exite usuario com o mesmo nome 
        $bd = "SELECT `nome` FROM `cadastro_pessoas` WHERE `nome` = '".$nome."' ";
        $verifica = $mysqli->query($bd);
        $cont = $verifica->num_rows;
        if ($cont >=  1) {
                $msg1 = "Nome já cadastrado";
            } else {
                //verifica se já tem email cadastrado com o usado
                $db = "SELECT `email`  FROM `cadastro_pessoas`  WHERE `email` = '".$email."' ";
                $verifica1 = $mysqli->query($db);
                $cont1 = $verifica1->num_rows;
                if ($cont1 >= 1) {
                    $msg1 = "Email já cadasatrado";
                } else {
                // verifica se já tem cpf cadastrado 
                $dd =  "SELECT `cpf` FROM `cadastro_pessoas`  WHERE `cpf`  = '".$cpf."' ";
                $verifica2 = $mysqli->query($dd);
                $contagem = $verifica2->num_rows;
                //criando regra
                if ($contagem >= 1) {
                    $msg1 = "CPF já cadastrado";
                } else {
                           #  
                        $banco = "INSERT INTO `cadastro_pessoas`(`nome`, `data_nascimento`, `sexo`, `nacionalidade`, `cpf`, `estado_civil`, `cargo_profissional`, `telefone_celular`, `telefone`, `email`, `cidade`, `bairro`, `estado`, `cep`, `senha`) VALUES ('".$nome."', '".$data_nascimento."', '".$sexo."', '".$nacionalidade."', '".$cpf."', '".$estado_civil."', '".$cargo_profissional."', '".$telefone_celular."', '".$telefone."', '".$email."', '".$cidade."', '".$bairro."', '".$estado."', '".$cep."', '".$senha."')";
                        $query = $mysqli->query($banco);
                        $contador = $query->num_rows;
                        //Criando regra
                       if ($contador =  1) {
                        $msg1 = "Cadastro efetuado com sucesso";
                       } else {
                      $msg1 = "Problemas ao efetuar o cadastro tente mais tarde";
                    }
                }
            }
     }
 }
}
}
?>

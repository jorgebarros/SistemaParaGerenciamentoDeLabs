<?php
$conexao = mysqli_connect("localhost","root","","db_adler") ;
//mysqli_select_db($conexao,"tb_universidades");



$record_nome_universidade=$_POST['Inputnome_universidade'];
$record_cnpj_universidade=$_POST['Inputcnpj_universidade'];
$record_endereco_universidade=$_POST['Inputendereco_universidade'];
$record_cidade_universidade=$_POST['Inputcidade_universidade'];
$record_uf_universidade=$_POST['Inputuf_universidade'];
$record_cep_universidade=$_POST['Inputcep_universidade'];
$record_telefone_universidade=$_POST['Inputtelefone_universidade'];
$record_nome_funcionario=$_POST['Inputnome_funcionario'];
$record_data_nascimento=$_POST['Inputdata_nascimento'];
$record_cpf_funcionario=$_POST['Inputcpf_funcionario'];
$record_funcao_funcionario=$_POST['Inputfuncao_funcionario'];




if($_GET['escolha']=="inserir"){

    $insere = mysqli_query ($conexao,"INSERT INTO tb_universidades (id,nome_universidade,cnpj_universidade,endereco_universidade, cidade_universidade,
    uf_universidade, cep_universidade, telefone_universidade, nome_funcionario, data_nascimento,cpf_funcionario,
    funcao_funcionario)
    values(NULL,'$record_nome_universidade','$record_cnpj_universidade','$record_endereco_universidade','$record_cidade_universidade',
    '$record_uf_universidade',
    '$record_cep_universidade','$record_telefone_universidade','$record_nome_funcionario','$record_data_nascimento','$record_cpf_funcionario',
    '$record_funcao_funcionario')");

  /*  $erro = mysqli_error($conexao);
    echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
*/
    header('Location:VisualizarUniversidade.php');
}
if ($_GET['escolha'] == "alterar") {
    $id = $_GET['id'];


    $results = mysqli_query($conexao,"UPDATE tb_universidades SET nome_universidade='$record_nome_universidade',cnpj_universidade='$record_cnpj_universidade',
                                                                      endereco_universidade='$record_endereco_universidade',cidade_universidade='$record_cidade_universidade',
                                                                      uf_universidade='$record_uf_universidade',cep_universidade='$record_cep_universidade',
                                                                      telefone_universidade='$record_telefone_universidade',nome_funcionario='$record_nome_funcionario',
                                                                      data_nascimento='$record_data_nascimento',cpf_funcionario='$record_cpf_funcionario',
                                                                      funcao_funcionario='$record_funcao_funcionario' WHERE id='$id'");
    header('Location:VisualizarUniversidade.php');
}
if ($_GET['escolha'] == "remover") {
    $id = $_GET['id'];
    $results = mysqli_query($conexao,"DELETE FROM tb_universidades WHERE id='$id'");
    header('Location:VisualizarUniversidade.php');
}
?>

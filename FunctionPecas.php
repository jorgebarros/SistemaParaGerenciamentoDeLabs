<?php
session_start();

$db = mysqli_connect("localhost","root","", "db_Adler");

$record_nome = $_POST['InputNomePeca'];
$record_tipoPeca = $_POST['DropDownTipoPeca'];
$record_statusPeca = $_POST['DropDownStatusPeca'];
$record_laboratorio = $_POST['InputLaboratorio'];
$record_armario = $_POST['InputArmario'];
$record_prateleira = $_POST['InputPrateleira'];
$record_gaveta = $_POST['InputGaveta'];
$record_quantidade = $_POST['InputQuantidade'];
$record_estadoPeca = $_POST['DropDownEstado'];
$record_fotoPeca = $_POST['InputFotoPeca'];
$record_cadastro = $_SESSION['email'];

if ($_GET['escolha'] == "inserir") {

    $record = mysqli_query($db,"INSERT INTO tb_pecas(nomePeca, tipoPeca, statusPeca, lclLaboratorio,
                                                     lclArmario, lclGaveta, lclPrateleira, quantidadePeca, estadoPeca, fotoPeca, cadastroPeca)
                                             VALUES ('$record_nome','$record_tipoPeca','$record_statusPeca','$record_laboratorio',
                                                     '$record_armario','$record_prateleira','$record_gaveta','$record_quantidade',
                                                     '$record_statusPeca', '$record_fotoPeca', '$record_cadastro')");
    header('Location:VisualizarPecas.php');
}

if ($_GET['escolha'] == "alterar") {
    $id = $_GET['id'];
    $results = mysqli_query($db,"UPDATE tb_pecas SET nomePeca='$record_nome',tipoPeca='$record_tipoPeca',
                                      statusPeca='$record_statusPeca',lclLaboratorio='$record_laboratorio',lclArmario='$record_armario',
                                      lclPrateleira='$record_prateleira',lclGaveta='$record_gaveta',quantidadePeca='$record_quantidade',
                                      fotoPeca='$record_fotoPeca', cadastroPeca='$record_cadastro' WHERE id='$id'");
    header('Location:VisualizarPecas.php');
}

if ($_GET['escolha'] == "remover") {
    $id = $_GET['id'];
    $results = mysqli_query($db,"DELETE FROM tb_pecas WHERE id='$id'");
    header('Location:VisualizarPecas.php');
}

?>

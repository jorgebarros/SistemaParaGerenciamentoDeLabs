<?php
$db = mysqli_connect("localhost","root","", "db_adler");

$record_Equipamentos = $_POST['InputEquipamentos'];
$record_Funcao = $_POST['InputFuncao'];
$record_QuantidadeNecessaria = $_POST['InputQuantidadeNecessaria'];



if ($_GET['escolha'] == "inserir") {

    $record = mysqli_query($db,"INSERT INTO tb_equipamentos(Equipamentos, Funcao, QuantidadeNecessaria)
                                       value ('$record_Equipamentos','$record_Funcao','$record_QuantidadeNecessaria')");
    header('Location:VizualizarEquipamentos.php');
}

if ($_GET['escolha'] == "alterar") {
    $id = $_GET['id'];

    $results = mysqli_query($db,"UPDATE tb_equipamentos SET Equipamentos='$record_Equipamentos',Funcao='$record_Funcao',
                                      QuantidadeNecessaria='$record_QuantidadeNecessaria',WHERE id='$id'");
    header('Location:VizualizarEquipamentos.php');
}

if ($_GET['escolha'] == "remover") {
    $id = $_GET['id'];
    $results = mysqli_query($db,"DELETE FROM tb_equipamentos WHERE id='$id'");
    header('Location:VizualizarEquipamentos.php');
}

?>

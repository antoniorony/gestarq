<?php
session_start();
$user = $_POST['user'];
$password = $_POST['password'];
include 'conexao.php';
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
}


$sql = "select*from users";
$query = $mysqli->query($sql);
if ($query) {
    while ($row = $query->fetch_assoc()) {
        if ($row['nome'] == $user && $row['senha']==$password) {
            //echo '<script> window.location.href = "https://mega.nz/#F!hV9SwI7Y!a_WEsNhxJ9B5ZyACDl3l_Q";</script>';
            $_SESSION['login'] = $row['nome'];
            echo '<script> window.location.href = "area2.php";</script>';
        }else {
            echo "<script>alert('Usuario ou Senha ERRADAS!');</script>";
            echo '<script> window.location.href = "index.php";</script>';
        }
    }
}

?>
<?php
@include "conexao.php";


$result = [];


if (isset($_POST["email"]) && isset($_POST["senha"])) {


   $email = mysqli_real_escape_string($conn, $_POST["email"]);
   $senha = mysqli_real_escape_string($conn, $_POST["senha"]);


   $sql = "SELECT id FROM Usuario WHERE email = '$email' AND senha = '$senha'";
   $resultsql = mysqli_query($conn, $sql);


   if ($resultsql && mysqli_num_rows($resultsql) > 0) {
       $result['estado'] = "sucesso";
       $result = mysqli_fetch_assoc($resultsql);
        session_start();
        $_SESSION["usuario_id"] = $result['id'];
   } else {
        $result['estado'] = "erro1";
   }
} else {
    $result['estado'] = "erro2";
}


echo json_encode($result);


?>

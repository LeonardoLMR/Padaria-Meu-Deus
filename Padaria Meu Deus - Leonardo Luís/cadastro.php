<?php
@include "conexao.php";
$result = [];
// Verifica se os campos foram enviados
if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"])) {
   // Escapar e preparar os dados
   $nome  = mysqli_real_escape_string($conn, $_POST["nome"]);
   $email = mysqli_real_escape_string($conn, $_POST["email"]);
   $senha = mysqli_real_escape_string($conn,$_POST["senha"]);


   // Verifica se o e-mail já está cadastrado
   $verifica = "SELECT id FROM Usuario WHERE email = '$email'";
   $verifica_result = mysqli_query($conn, $verifica);


   if (mysqli_num_rows($verifica_result) > 0) {
       $result["estado"] = "erro";
   } else {
       // Insere novo usuário
       $sql = "INSERT INTO Usuario( nome, email, senha) VALUES ('$nome', '$email', '$senha')";
      
       if (mysqli_query($conn, $sql)) {
           $result["estado"] = "sucesso";
       } else {
           $result["estado"] = "erro";
       }
   }
} else {
   $result["estado"] = "erro";
}


echo json_encode($result);
?>

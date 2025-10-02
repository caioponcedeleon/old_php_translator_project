<?php
include("conectar.php");

//==== Originally programmed in August 2013 (mysql_connect) // Updated in October 2025 (mysqli)
$login   = $_POST['login'];
$senha   = $_POST['senha'];

// --- Secure Login Query using Prepared Statements ---

// 1. Prepare the SQL statement with placeholders (?)
$sql_logar = "SELECT * FROM usuarios WHERE login = ? AND senha = ?";
$stmt_logar = mysqli_prepare($conexao, $sql_logar);

if ($stmt_logar === false) {
    // Check if the statement failed to prepare
    die("Erro na preparação da consulta: " . mysqli_error($conexao));
}

// 2. Bind the user input to the placeholders
// The "ss" string tells MySQLi that both parameters are strings.
mysqli_stmt_bind_param($stmt_logar, "ss", $login, $senha);

// 3. Execute the statement
mysqli_stmt_execute($stmt_logar);

// 4. Get the result set
$result_logar = mysqli_stmt_get_result($stmt_logar);

// 5. Fetch the data
$fet_logar = mysqli_fetch_assoc($result_logar);

// 6. Check the number of rows (if a user was found)
$num_logar = mysqli_num_rows($result_logar);

// Clean up
mysqli_stmt_close($stmt_logar);
                        

if ($num_logar == 0){
   echo '<table align="center" background="Imagens/backpayed.png" width="681 " height="452" border="0">
  <tr>
    <td height="111" align="center"><h1 class="texto1"><strong><font face="Verdana, Geneva, sans-serif">Dessory, ahappenu unne f&uuml;lher!</font></strong></h1></td>
  </tr>
  <tr>
    <td height="205" align="center"><font face="Verdana, Geneva, sans-serif">Parenoava qhil ora lhe side login ora lha sine motasena iset(saron) f&uuml;lheredo(s)</font></td>
  </tr>
  <tr>
    <td class="texto1" align="center"><font face="Verdana, Geneva, sans-serif"><a href="javascript:window.close()">Cliqaavat d&prime;ici p&agrave;o revurner</font></td>
  </tr>
</table>'; 

}else{

   session_start();
   $_SESSION['login']    = $login;
   $_SESSION['senha']    = $senha;
   
   header("Location: admin.php");
   
}
?>
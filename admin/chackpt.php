<?php
include('conectar.php');
include('restt.php');

//==== Originally programmed in August 2013 (mysql_connect) // Updated in October 2025 (mysqli)

// Sanitise the input to ensure it's an integer.
$idmot = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Prepare the SQL statement with a placeholder (?) to prevent SQL injection.
$querymot = "SELECT camks, portuitese FROM camkportuitese WHERE id = ?";
$stmt_mot = mysqli_prepare($conexao, $querymot);

// Check if the statement was successfully prepared.
if ($stmt_mot === false) {
    die("Erro na preparação da consulta: " . mysqli_error($conexao));
}

// Bind the integer variable to the placeholder. The "i" specifies an integer type.
mysqli_stmt_bind_param($stmt_mot, "i", $idmot);

// Execute the prepared statement.
mysqli_stmt_execute($stmt_mot);

// Get the result set from the executed statement.
$result_mot = mysqli_stmt_get_result($stmt_mot);

// Fetch the data as an associative array.
$mott = mysqli_fetch_assoc($result_mot);

// Close the statement to free up resources.
mysqli_stmt_close($stmt_mot);

// Now you can safely access your variables.
$motck = $mott['camks'];
$motpt = $mott['portuitese'];

if ($mott === null) {
    // No entry was found with the given ID.
    echo "Ninhune môtta issetu cansentreda aveq edet ID.";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajjuntar môtta alhos diccionarœ Camкs-Portuitese</title>
<script type="application/javascript">
function clicksing(val){
	document.getElementById('motck').value+=val;
	document.getElementById('motck').focus()
}
function clickplu(val){
	document.getElementById('motpluck').value+=val;
	document.getElementById('motpluck').focus()
}
</script>
<style type="text/css">
.mon {
	text-align: center;
}
.esc {
	font-family:Verdana, Geneva, sans-serif;
	color:#CCC;
}
#form1 table tr td {
	text-align: center;
	font-family: Verdana, Geneva, sans-serif;
}
#form1 table tr td table tr td {
	font-family: Verdana, Geneva, sans-serif;
	font-weight: bold;
}
</style>

</head>
<body>
<form id="form1" method="post" action="ajj.php">
<table align="center" background="Imagens/backbut.png" width="360" height="577" border="0">
  <tr>
    <td height="22" colspan="4">Chanjar môtta dof lhe diccionar&oelig;<br />Camкs-Portuitese</td>
  </tr>
  <tr>
    <td width="23" colspan="2" bgcolor="#0099FF"><strong>Camкs</strong></td>
    <td width="23" colspan="2" bgcolor="#0099FF"><strong>Portuitese</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#CCCCCC">
      <input name="motck" type="text" id="motck" value="<?php echo "$motck"; ?>"  />
      <br />
      (<a href="javascript:clicksing('к')">к</a>
      <a href="javascript:clicksing('ж')">ж</a>
      <a href="javascript:clicksing('œ')">œ</a>
      <a href="javascript:clicksing('æ')">æ</a>
      <a href="javascript:clicksing('ß')">ß</a>
      <a href="javascript:clicksing('д')">д</a>
      <a href="javascript:clicksing('њ')">њ</a>
      <a href="javascript:clicksing('и')">и</a>
      <a href="javascript:clicksing('ŋ')">ŋ</a>
      <a href="javascript:clicksing('&#x103;')">ă</a>
      <a href="javascript:clicksing('ĕ')">ĕ</a>)
    </td>
    <td bgcolor="#CCCCCC">
      <input name="motla" type="text" id="motla" value="<?php echo "$motpt"; ?>"  />
      <span class="esc">k<br />l</span>
      <input name="langs" type="hidden" id="langs" value="chackpt" />
      <input name="idmot" type="hidden" id="idmot" value="<?=$idmot;?>" />
      <br />
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#0099FF">
      <a href="dicckpt.php" style="text-decoration:none; color:#000;">Revurner</a> |
      <input name="cha" type="submit" class="mon" id="cha" value="Chanjar" />
    </td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
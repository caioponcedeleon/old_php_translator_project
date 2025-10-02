<?
include('conectar.php');
include('restt.php');

$idmot			 = $_GET['id'];

$querymot = "SELECT * FROM camkportuitese WHERE id = '$idmot'";
$rs_mot   = mysql_query($querymot);
$mott	  = mysql_fetch_array($rs_mot);

$motck		 = $mott['camks'];
$motpt		 = $mott['portuitese'];

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
    <td height="22" colspan="4">Chanjar môtta dof lhe diccionar&oelig; <br />
      Camкs-Portuitese</td>
  </tr>
  <tr>
    <td width="23" colspan="4" bgcolor="#0099FF">Singullar</td>
  </tr>
   <tr>
    <td width="23" colspan="2" bgcolor="#0099FF"><strong>Camкs</strong></td>
    <td width="23" colspan="2" bgcolor="#0099FF"><strong>Portuitese</strong></td>
  </tr>
  <tr><td>&nbsp;</td>
  <td bgcolor="#CCCCCC"><input name="motck" type="text" id="motck" value="<? echo "$motck"; ?>"  /><br />
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
    <td bgcolor="#CCCCCC"><input name="motla" type="text" id="motla" value="<? echo "$motpt"; ?>"  />
      <span class="esc">k<br />
      l</span>
      <input name="langs" type="hidden" id="langs" value="chackpt" />
      <input name="idmot" type="hidden" id="idmot" value="<?=$idmot;?>" />
      <br /></td><td>&nbsp;</td>
  </tr>
   <tr>
     <td colspan="4" bgcolor="#0099FF"><a href="dicckpt.php" style="text-decoration:none; color:#000;">Revurner</a> |
  <input name="cha" type="submit" class="mon" id="cha" value="Chanjar" /></td>
   </tr><tr>
    <td colspan="4">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
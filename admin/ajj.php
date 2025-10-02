<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajjuntar</title>
<style type="text/css">
.texto1 {
    font-family: Verdana, Geneva, sans-serif;
    text-align: center;
}
.texto1 strong {
    font-family: Verdana, Geneva, sans-serif;
    text-align: center;
}
.texto1 a {
    text-align: center;
}
</style>
</head>
<body>
<?php
//==== Originally programmed in August 2013 (mysql_connect) // Updated in October 2025 (mysqli)
// Include the database connection file.
require_once('conectar.php');
require_once('restt.php');

// Sanitise user input before processing.
$idmot      = isset($_POST['idmot']) ? intval($_POST['idmot']) : 0;
$motcko     = $_POST['motck'];
$motlao     = $_POST['motla'];
$motplucko  = $_POST['motpluck'];
$motplulao  = $_POST['motplula'];
$langs      = $_POST['langs'];

// Character replacement logic remains the same
$origin = array("и","ă","ß","æ","к","ж","œ","д","њ","ŋ","ĕ","Ж");
$trocar = array("&#1080;","&#259;","&szlig;","&aelig;","&#1082;","&#1078;","&oelig;","&#1076;","&#1114;","&#331;","&#277;","&#1046;");
$originac = array("ã","á","à","â","ä","é","è","ê","ë","í","ì","ï","î","ó","ò","ô","ö","ú","ù","û","ü","õ","ý","ÿ","'");
$trocarac = array("&atilde;","&aacute;","&agrave;","&acirc;","&auml;","&eacute;","&egrave;","&ecirc;","&euml;","&iacute;","&igrave;","&iuml;","&icirc;","&oacute;","&ograve;","&ocirc;","&ouml;","&uacute;","&ugrave;","&ucirc;","&uuml;","&otilde;","&yacute;","&yuml;","&rsquo;");

$motcku    = str_replace($origin,$trocar,$motcko);
$motplucku = str_replace($origin,$trocar,$motplucko);
$motck     = str_replace($originac,$trocarac,$motcku);
$motpluck  = str_replace($originac,$trocarac,$motplucku);
$motla     = str_replace($originac,$trocarac,$motlao);
$motplula  = str_replace($originac,$trocarac,$motplulao);

switch ($langs){
    case "ckpt":
        $query_motta = "SELECT * FROM camkportuitese WHERE camks = ? OR portuitese = ?";
        $stmt_motta = mysqli_prepare($conexao, $query_motta);

        if ($stmt_motta) {
            mysqli_stmt_bind_param($stmt_motta, "ss", $motck, $motla);
            mysqli_stmt_execute($stmt_motta);
            $result_motta = mysqli_stmt_get_result($stmt_motta);
            $nmotta = mysqli_num_rows($result_motta);
            mysqli_stmt_close($stmt_motta);
        } else {
            die("Erro na preparação da consulta de seleção: " . mysqli_error($conexao));
        }

        if ($motpluck == "") {
            if ($nmotta == 0) {
                $sql_insert = "INSERT INTO camkportuitese (camks, portuitese) VALUES (?, ?)";
                $stmt_insert = mysqli_prepare($conexao, $sql_insert);

                if ($stmt_insert) {
                    mysqli_stmt_bind_param($stmt_insert, "ss", $motck, $motla);
                    $success = mysqli_stmt_execute($stmt_insert);
                    mysqli_stmt_close($stmt_insert);
                    if ($success) {
                        ?>
                        <table align="center" background="Imagens/backpayed.png" width="681 " height="452" border="0">
                          <tr>
                            <td height="111"><h1 class="texto1"><strong>Môtta ajjuntдa avec zucezz!</strong></h1></td>
                          </tr>
                          <tr>
                            <td height="205">
                              <table align="center" width="200" border="0">
                                <tr>
                                  <td class="texto1">Môtta:</td>
                                  <td class="texto1"><?= htmlspecialchars($motck); ?> | <?= htmlspecialchars($motla); ?></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td class="texto1"><a href="admin.php">Cliqaavat d'ici pào revuner alhia pajinna principalo</a></td>
                          </tr>
                        </table>
                        <?php
                    } else {
                        echo "Erro ao inserir: " . mysqli_error($conexao);
                    }
                } else {
                    die("Erro na preparação da consulta de inserção: " . mysqli_error($conexao));
                }
            } else {
                ?>
                <table align="center" background="Imagens/backpayed.png" width="681 " height="452" border="0">
                <tr>
                    <td height="111"><h1 class="texto1"><strong>Fülher alhos ajjuntar môtta!</strong></h1></td>
                </tr>
                <tr>
                    <td height="205">&nbsp;</td>
                </tr>
                <tr>
                    <td class="texto1"><a href="admin.php">Cliqaavat d'ici pào revuner alhia pajinna principalo</a></td>
                </tr>
                </table>
                <?php
            }
        } else {
            if ($nmotta == 0) {
                // Use a transaction for multiple insertions
                mysqli_begin_transaction($conexao);

                $sql_insert1  = "INSERT INTO camkportuitese (camks, portuitese) VALUES (?, ?)";
                $stmt_insert1 = mysqli_prepare($conexao, $sql_insert1);
                mysqli_stmt_bind_param($stmt_insert1, "ss", $motck, $motla);
                mysqli_stmt_execute($stmt_insert1);
                mysqli_stmt_close($stmt_insert1);

                $sql_insert2  = "INSERT INTO camkportuitese (camks, portuitese) VALUES (?, ?)";
                $stmt_insert2 = mysqli_prepare($conexao, $sql_insert2);
                mysqli_stmt_bind_param($stmt_insert2, "ss", $motpluck, $motplula);
                mysqli_stmt_execute($stmt_insert2);
                mysqli_stmt_close($stmt_insert2);

                mysqli_commit($conexao);

                ?>
                <table align="center" background="Imagens/backpayed.png" width="681 " height="452" border="0">
                  <tr>
                    <td height="111"><h1 class="texto1"><strong>Môttas ajjuntдas avec zucezz!</strong></h1></td>
                  </tr>
                  <tr>
                    <td height="205">
                      <table align="center" width="200" border="0">
                        <tr>
                          <td class="texto1">Môtta:</td>
                          <td class="texto1"><?= htmlspecialchars($motck); ?> | <?= htmlspecialchars($motla); ?></td>
                        </tr>
                        <tr>
                          <td class="texto1">Môtta:</td>
                          <td class="texto1"><?= htmlspecialchars($motpluck); ?> | <?= htmlspecialchars($motplula); ?></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td class="texto1"><a href="admin.php">Cliqaavat d'ici pào revuner alhia pajinna principalo</a></td>
                  </tr>
                </table>
                <?php
            } else {
                ?>
                <table align="center" background="Imagens/backpayed.png" width="681 " height="452" border="0">
                  <tr>
                    <td height="111"><h1 class="texto1"><strong>Fülher alhos ajjuntar môtta!</strong></h1></td>
                  </tr>
                  <tr>
                    <td height="205">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="texto1"><a href="admin.php">Cliqaavat d'ici pào revuner alhia pajinna principalo</a></td>
                  </tr>
                </table>
                <?php
            }
        }
        break;

    case "chackpt":
        $sql_update   = "UPDATE camkportuitese SET camks = ?, portuitese = ? WHERE id = ?";
        $stmt_update  = mysqli_prepare($conexao, $sql_update);

        if ($stmt_update) {
            mysqli_stmt_bind_param($stmt_update, "ssi", $motck, $motla, $idmot);
            $success = mysqli_stmt_execute($stmt_update);
            mysqli_stmt_close($stmt_update);

            if ($success) {
                ?>
                <table align="center" background="Imagens/backpayed.png" width="681" height="452" border="0">
                  <tr>
                    <td height="111"><h1 class="texto1"><strong>Môtta chanjдa avec zucezz</strong></h1></td>
                  </tr>
                  <tr>
                    <td height="205">
                      <table align="center" width="200" border="0">
                        <tr>
                          <td class="texto1">Môtta:</td>
                          <td class="texto1"><?= htmlspecialchars($motck); ?> | <?= htmlspecialchars($motla); ?></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td class="texto1"><a href="dicckpt.php">Cliqaavat d'ici pào revuner alhos diccionar&oelig;</a></td>
                  </tr>
                </table>
                <p class="texto1"><br /><br /></p>
                <?php
            } else {
                echo "Erro ao atualizar: " . mysqli_error($conexao);
            }
        } else {
            die("Erro na preparação da consulta de atualização: " . mysqli_error($conexao));
        }
        break;
}
mysqli_close($conexao);
?>
</body>
</html>
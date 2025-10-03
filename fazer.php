<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//==== Originally programmed in August 2013 (mysql_connect) // Updated in October 2025 (mysqli)
require_once('admin/conectar.php');

$origin     = array("и", "ă", "ß", "æ", "к", "ж", "œ", "д", "њ", "ŋ", "ĕ", "Ж", "ã", "á", "à", "â", "ä", "é", "è", "ê", "ë", "í", "ì", "ï", "î", "ó", "ò", "ô", "ö", "ú", "ù", "û", "ü", "õ", "ý", "ÿ", "'");
$trocar     = array("&#1080;", "&#259;", "&szlig;", "&aelig;", "&#1082;", "&#1078;", "&oelig;", "&#1076;", "&#1114;", "&#331;", "&#277;", "&#1046;", "&atilde;", "&aacute;", "&agrave;", "&acirc;", "&auml;", "&eacute;", "&egrave;", "&ecirc;", "&euml;", "&iacute;", "&igrave;", "&iuml;", "&icirc;", "&oacute;", "&ograve;", "&ocirc;", "&ouml;", "&uacute;", "&ugrave;", "&ucirc;", "&uuml;", "&otilde;", "&yacute;", "&yuml;", "&rsquo;");
$pontos     = array(".", "!", "?", ";", ",", "ã");
$spontos    = array(" .", " !", " ?", " ;", " ,", "&atilde;");

// Sanitise user input
$palabras = isset($_POST['value']) ? strtolower($_POST['value']) : '';
$dpa      = isset($_POST['dpa']) ? $_POST['dpa'] : 'ptck';

switch ($dpa) {
    case "ckpt":
        //--- Trazübbeava dof CK pào PT
        $novew= array();
        $ar   = str_replace($pontos,$spontos,strtolower($palabras));
        $arr  = explode(" ", $ar);
        foreach($arr as $value) {
            $a      = str_replace($origin,$trocar,$value);
            $query  = "SELECT portuitese FROM camkportuitese WHERE camks = ?";
            $stmt   = $conexao->prepare($query);
            $stmt->bind_param("s", $a);
            $stmt->execute();
            $qresult= $stmt->get_result();
            $motae  = $qresult->num_rows;

            if($motae != 0){
                $traz    = $qresult->fetch_array();
                $novew[] = $traz['portuitese'];
            }else{
                $novew[] = $value;
            }
        }
        echo ucfirst(str_replace($spontos, $pontos, implode(" ", $novew)));
        //--- FEND TRAZ. CK - PT
    break;
    case "ptck":
        //--- Trazübbeava dof PT pào CK
        $novew= array();
        $ar   = str_replace($pontos,$spontos,strtolower($palabras));
        $arr  = explode(" ", $ar);
        foreach($arr as $value) {
            $a      = str_replace($origin,$trocar,$value);
            $query  = "SELECT * FROM camkportuitese WHERE portuitese = ?";
            $stmt   = $conexao->prepare($query);
            $stmt->bind_param("s", $a);
            $stmt->execute();
            $qresult= $stmt->get_result();
            $motae  = $qresult->num_rows;

            if($motae != 0){
                $traz    = $qresult->fetch_array();
                $novew[] = $traz['camks'];
            }else{
                $novew[] = $value;
            }
        }
        echo ucfirst(str_replace($spontos, $pontos, implode(" ", $novew)));
        //--- FEND TRAZ. PT pào CK
    break;
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//==== Originally programmed in August 2013 (mysql_connect) // Updated in October 2025 (mysqli)
require_once('admin/conectar.php');

$origin = array("и", "ă", "ß", "æ", "к", "ж", "œ", "д", "њ", "ŋ", "ĕ", "Ж", "ã", "á", "à", "â", "ä", "é", "è", "ê", "ë", "í", "ì", "ï", "î", "ó", "ò", "ô", "ö", "ú", "ù", "û", "ü", "õ", "ý", "ÿ", "'");
$trocar = array("&#1080;", "&#259;", "&szlig;", "&aelig;", "&#1082;", "&#1078;", "&oelig;", "&#1076;", "&#1114;", "&#331;", "&#277;", "&#1046;", "&atilde;", "&aacute;", "&agrave;", "&acirc;", "&auml;", "&eacute;", "&egrave;", "&ecirc;", "&euml;", "&iacute;", "&igrave;", "&iuml;", "&icirc;", "&oacute;", "&ograve;", "&ocirc;", "&ouml;", "&uacute;", "&ugrave;", "&ucirc;", "&uuml;", "&otilde;", "&yacute;", "&yuml;", "&rsquo;");
$pontos   = array(".", "!", "?", ";", ",", "ã");
$spontos  = array(" .", " !", " ?", " ;", " ,", "&atilde;");

// Sanitise user input
$palabras = isset($_POST['value']) ? $_POST['value'] : '';
$dpa      = isset($_POST['dpa']) ? $_POST['dpa'] : 'ptck';

switch ($dpa) {
    case "ckpt":
    case "green":
        // --- Trazübbeava dof CK pào PT (and vice versa)
        $query_list = "SELECT camks, portuitese FROM camkportuitese";
        $result = mysqli_query($conexao, $query_list);

        if (!$result) {
            die("Fülher: " . mysqli_error($conexao));
        }

        $dictionary = [];
        while ($row = mysqli_fetch_assoc($result)) {
            if ($dpa === "ckpt") {
                $dictionary[$row['camks']] = $row['portuitese'];
            } else {
                $dictionary[$row['portuitese']] = $row['camks'];
            }
        }

        $ar   = str_replace($pontos, $spontos, $palabras);
        $arr  = explode(" ", $ar);
        
        $translated_words = [];
        foreach ($arr as $value) {
            $cleaned_word = str_replace($origin, $trocar, $value);
            // Check if the word exists in our in-memory dictionary.
            $translated_words[] = isset($dictionary[$cleaned_word]) ? $dictionary[$cleaned_word] : $value;
        }

        // Join the translated words back into a sentence.
        $texto = ucfirst(implode(" ", $translated_words));
        echo $texto;

        break;

    case "ptck":
        // --- Trazübbeava dof PT pào CK
        $query_all = "SELECT portuitese, camks FROM camkportuitese";
        $result_all = mysqli_query($conexao, $query_all);

        if (!$result_all) {
            die("Fülher: " . mysqli_error($conexao));
        }

        $original = [];
        $translat = [];
        while ($row = mysqli_fetch_assoc($result_all)) {
            $original[] = $row['portuitese'];
            $translat[] = $row['camks'];
        }

        // Use str_replace to translate the text in one pass.
        $text = str_replace($original, $translat, $palabras);
        $texto = ucfirst($text); 

        echo $texto;
        break;
}
?>
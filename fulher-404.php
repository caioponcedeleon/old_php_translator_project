<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trazübcamк</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
      $(function() {
        $("#traduz").bind('submit',function() {
          var value = $('#palabram').val();
		  $('#search_results').html('<p><img src="images/ajax-loader.gif" /></p>');
           $.post('fazer.php',{value:value}, function(data){
             $("#search_results").html(data);
           });
           return false;
        });
      });
    </script>
    
<style type="text/css">
::-webkit-scrollbar{width:9px;height:9px;}
::-webkit-scrollbar-button:start:decrement,::-webkit-scrollbar-button:end:increment{display:block;height:0;background-color:transparent;}
::-webkit-scrollbar-track-piece{background-color:#FAFAFA;-webkit-border-radius:0;-webkit-border-bottom-right-radius:8px;-webkit-border-bottom-left-radius:8px;}
::-webkit-scrollbar-thumb:vertical{height:50px;background-color:#999;-webkit-border-radius:8px;}
::-webkit-scrollbar-thumb:horizontal{width:50px;background-color:#999;-webkit-border-radius:8px;}
.textas {
	font-family: Verdana, Geneva, sans-serif;
}
.texto2 {
	font-family: Verdana, Geneva, sans-serif;
	color: #dd4b39;
	font-weight: bold;
}
.texto3 {
	font-family: Georgia, Times New Roman, Times, serif;	
}
.branco {
	font-family: Verdana, Geneva, sans-serif;
	color: #FFF;
	height: 12px;
}
textarea {
   font-family: Verdana;
   font-size: inherit;
   box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1) inset;
   outline:none;
}
textarea:hover {
       -webkit-box-shadow: inset 3px 3px 3px 0px #dddddd;
    -moz-box-shadow: inset 3px 3px 3px 0px #dddddd;
}
</style>
</head>
<body leftmargin="0" topmargin="0" style="overflow: hidden;">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr>
  <td bgcolor="#DCDCDC">&nbsp;</td>
    <td height="72" bgcolor="#DCDCDC"><table width="100%" border="0">
      <tr>
        <td align="left" class="texto3"><img src="../images/logo.png" />beta </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr><td>&nbsp;</td>
    <td align="center" class="textas"><h1>:(</h1>
      <h1>FÜLHER 404! 
      </h1>
      <p><br /> 
        Existènon calcomes rosivos pào voк setrer nedat pajinna:
</p>
      <ul>
        <li>Lha pajinna qhil voк proshava &szlig;o existèava</li>
        <li>Voк dizitau lhe n&oelig;m dof lha pajinna fülheredo</li>
      </ul>
    <p><a href="../index.php" style="text-decoration:none; color:#000;">Cliqaavat d'ici pào revuner alhos starte</a></p></td>
  </tr>
 
</table>
</body>
</html>
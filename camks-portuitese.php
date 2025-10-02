<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trazübcamк</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="../cssedjs/putlet.js"></script>

<script type="text/javascript">
      $(function() {
        $("#traduz").bind('submit',function() {
        var value = $('#palabram').val();
        var dpa = $('#dpa').val();
        $('#search_results').html('<p><img src="../images/ajax-loader.gif" /></p>');
          $.post('../fazer.php',{value:value, dpa:dpa}, function(data){
            $("#search_results").html(data);
          });
          return false;
        });
      });
    </script>
<link rel="stylesheet" href="../cssedjs/colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../cssedjs/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
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
        <td align="left" class="texto3"><img src="../images/logo.png" />beta <a class='ajax' href="../expliq/puai-pt.html" title="Por que beta? / Puaí beta?" style="text-decoration:none;"><img src="../images/nolib.png" alt="" /></a></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr><td height="61">&nbsp;</td>
    <td><table border="0">
      <tr>
        <td width="165" class="texto2">Trazübbezão</td><td width="19">&nbsp;</td>
        <td width="233"><table width="200" cellspacing="5" border="0">
  <tr>
    <td width="127"><table background="../images/showlang.png" cellpadding="0" cellspacing="0" width="127" height="29"><tr>
      <td class="textas" align="center">Camкs</td><td><img src="../images/getlang.png" /></td></tr></table></td>
    <td width="49"><a href="../pt/ck" title="Inverter tradução / Invertrer trazübbezão" style="text-decoration:none;"><img src="../images/butchang.png" width="36" height="29" /></a></td>
    <td width="10"><table background="../images/showlang.png" cellpadding="0" cellspacing="0" width="127" height="29"><tr>
      <td width="117" align="center" class="textas">Portuitese</td><td width="10"><img src="../images/golang.png" /></td></tr></table></td>
  </tr>
</table>
</td>
        <td width="64"><a class='ajax' href="../expliq/dudtraz-pt.html" title="Botões / Buttions" style="text-decoration:none;"><img src="../images/nolib.png" alt="" /></a></td>
      </tr>
    </table>
    <hr color="#CCCCCC" width="100%" /></td>
  </tr>
  <tr><td>&nbsp;</td>
    <td><table width="476" border="0">
      <tr class="textas">
        <td width="215">Camкs</td>
        <td width="12" rowspan="4">&nbsp;</td>
        <td width="227">Portuitese</td>
      </tr>
      <tr class="textas">
        <td width="215" colspan="3">&nbsp;</td>
     </tr>
      <tr class="textas">
        <td rowspan="2" valign="top"><form id="traduz" action="">
          <textarea style="font:Verdana, Geneva, sans-serif;" name="palabram" cols="60" rows="9" id="palabram" onkeyup="update(traiteVb(document.getElementById('palabram').value),'fr','Y');return false;"></textarea>
          <input name="dpa" type="hidden" id="dpa" value="ckpt" /> Ôthrás lettres: 
<a href="javascript:clickage('к')">к</a>
<a href="javascript:clickage('ж')">ж</a>
<a href="javascript:clickage('œ')">œ</a>
<a href="javascript:clickage('æ')">æ</a>
<a href="javascript:clickage('ß')">ß</a>
<a href="javascript:clickage('д')">д</a>
<a href="javascript:clickage('њ')">њ</a>
<a href="javascript:clickage('и')">и</a>
<a href="javascript:clickage('ŋ')">ŋ</a>
<a href="javascript:clickage('&#x103;')">ă</a>
<a href="javascript:clickage('ĕ')">ĕ</a>
 <a class='ajax' href="../expliq/let-pt.html" title="Letras especiais / Lettres especialos" style="text-decoration:none;"><img src="../images/nolib.png" alt="" /></a>
          <table align="right">
            <tr><td><input name="traduzir" type="submit" class="textas" id="traduzir" value="Trazübber" /></td></tr></table>
        </form>
    </td>
        <td valign="top" style="height:170px;" bgcolor="#f5f5f5"><br /><b>
<div style="width:600px;" id="search_results"></div></b></td>
      </tr>
      <tr><td width="5">&nbsp;</td></tr>
    </table></td>
  </tr>
 
</table>
</body>
</html>
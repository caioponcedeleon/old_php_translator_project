$(document).ready(function() { 
    $('#myForm').ajaxForm({
        beforeSubmit: function(a,f,o) {
			$('#main-right').html('<br><br><br><br><br><center><img src="images/loading.gif" /></center><br>').fadeIn('slow');
        },
        success: function(data) {
            var $out = $('#main-right');
            $out.html('');
            if (typeof data == 'object' && data.nodeType)
                data = elementToString(data.documentElement, true);
            else if (typeof data == 'object')
                data = objToString(data);
            $out.append(''+ data +'');
        }
    });
	    });
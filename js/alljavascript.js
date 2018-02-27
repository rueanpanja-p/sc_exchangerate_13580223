$(document).ready(function(){
	$(".selectcal").ready(function(){
    	if ($(".selectcal").val()=="usd") {
    		$(".images-flag").html("<img src='img/usd.png'>");
        }
        else if ($(".selectcal").val()=="jyp") {
    		$(".images-flag").html("<img src='img/jpy.png'>");
        }
        else if ($(".selectcal").val()=="krw") {
    		$(".images-flag").html("<img src='img/krw.png'>");
        }
        else if ($(".selectcal").val()=="gbp") {
    		$(".images-flag").html("<img src='img/gbp.png'>");
        }
        else if ($(".selectcal").val()=="eur") {
    		$(".images-flag").html("<img src='img/eur.png'>");
        }
    });

    $(".selectcal").click(function(){
    	if ($(".selectcal").val()=="usd") {
    		$(".images-flag").html("<img src='img/usd.png'>");
        }
        else if ($(".selectcal").val()=="jyp") {
    		$(".images-flag").html("<img src='img/jpy.png'>");
        }
        else if ($(".selectcal").val()=="krw") {
    		$(".images-flag").html("<img src='img/krw.png'>");
        }
        else if ($(".selectcal").val()=="gbp") {
    		$(".images-flag").html("<img src='img/gbp.png'>");
        }
        else if ($(".selectcal").val()=="eur") {
    		$(".images-flag").html("<img src='img/eur.png'>");
        }
    });
});

function isNumberKey(evt)
	{
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode != 46 && charCode > 31 
		&& (charCode < 48 || charCode > 57))
		return false;
		return true;
	} 
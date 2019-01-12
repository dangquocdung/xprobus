
$(document).ready(function(){

    $("#shadow").css("height", $(document).height()).hide();

    $(".lightSwitcher").click(function(){

        $("#shadow").toggle();

        if ($("#shadow").is(":hidden")){

            $(this).html("Tắt Đèn").removeClass("turnedOff");

        }else{

            $(this).html("Bật Đèn").addClass("turnedOff");

        }
            
    });
    
});

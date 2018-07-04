$(function(){
    $('#btn-header').click(function(){
        if($('#menu').hasClass('active_header')){
            $('#menu').removeClass('active_header');
        }else{
            $('#menu').addClass('active_header');
        }
    });


});
window.onload = function () {

    document.getElementById("trait").style.width = "50px";
    document.getElementById("trait2").style.width = "50px";


};

$(document).ready(function () {
    $(".linkEntrarMenu").click(function(){
        var ul = $("#dropUL").css("display");
        if(ul=="none"){
            $("#dropUL").css("display","inherit");
        }else{
            $("#dropUL").css("display","none");
        }
    });
    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if(height  > 100) {
            $("#dropUL").css("display","none");
        }
    });
})
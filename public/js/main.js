$(document).ready(function(){

    $(window).scroll(function(){
        if($(this).scrollTop() > 40){
            $('#BackToTopbtn').fadeIn();
        } 
        
        else{
            $('#BackToTopbtn').fadeOut();
        }
    });

    $('#BackToTopbtn').click(function(){
        $('html, body').animate({scrollTop : 0},800);
    });
});
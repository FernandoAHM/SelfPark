$(document).ready(function(){
    var imgItems = $('.slider li').length; //Determinar cantidad de slides.
    var imgPos = 1;//posicion inicial de programacion.
    var tiempo = 5000;
    //Agregar elementos de paginacion (<li>)
    for(i = 1; i<= imgItems; i++){
        $('.paginacion').append('<li><span = class="fa fa-circle"></span></li>');
    }
    
    $('.slider li').hide();//esconder slides
    $('.slider li:first').show();//Mostrar primer elemento
    
    $('.paginacion li:first').css({'color':'aqua'})
    
    //Ejecutar Funciones
    
    
    $('.paginacion li').click(paginacion);
 //   $('.der span').click(nextSlide);
 //   $('.izq span').click(prevSlide);
    setInterval(function(){
        nextSlide();
        
    },tiempo);
    //---------------------------------//
    function paginacion(){
        var pagPos = $(this).index()+1;
        $('.slider li').hide();
        $('.slider li:nth-child('+pagPos+')').fadeIn();
          //Cambiar color iconos
    $('.paginacion li').css({'color':'grey'});
    $('.paginacion li:nth-child('+pagPos+')').css({'color':'aqua'});
    }
    function nextSlide(){
       if(imgPos>=imgItems){
           imgPos=1;
       }else{imgPos++;}
        
         $('.paginacion li').css({'color':'grey'})
         $('.paginacion li:nth-child('+imgPos+')').css({'color':'aqua'});
       
         $('.slider li').hide();
        $('.slider li:nth-child('+imgPos+')').fadeIn();
    }
    function prevSlide(){
        if (imgPos<=1){
            imgPos=imgItems;
        }else{
            imgPos--;
        }
             $('.paginacion li').css({'color':'grey'})
         $('.paginacion li:nth-child('+imgPos+')').css({'color':'aqua'});
       
         $('.slider li').hide();
        $('.slider li:nth-child('+imgPos+')').fadeIn();
    }
    
    //-----------------------------------------------------------
    
  
})
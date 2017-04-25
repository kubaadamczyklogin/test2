//  Płynne przewijanie

$(document).ready(function(){
    $(".dalej").on('click', function() {
        sekcja = $(this).attr('href');
        $('html, body').animate({
          scrollTop: $(sekcja).offset().top
        }, 500);
        return false;
    });    
  
  
});


$(document).ready(function(){
    console.log('pret');
    
    var elmt   = $('.from-left, .from-right');
    var topImg = $('.from-left, .from-right').offset().top;
    var scroll = $(window).scrollTop();
    
        $(elmt).each(function() {
            
            var topImg = $(this).offset().top - 300;
            
                if ( topImg < scroll ) {
                
                $(this).css("transform", "translate(0,0)");
                $(this).css("opacity", "1");
                
                };
        });

        $(window).on('scroll', function () {
    
            var elmt   = $('.from-left1, .from-right1');
            var topImg = $('.from-left1, .from-right1').offset().top;
            var scroll = $(window).scrollTop();
            
                $(elmt).each(function() {
                    
                    var topImg = $(this).offset().top - 300;
                    
                        if ( topImg < scroll ) {
                        
                        $(this).css("transform", "translate(0,0)");
                        $(this).css("opacity", "1");
                        
                        };
                });
            });
});

 
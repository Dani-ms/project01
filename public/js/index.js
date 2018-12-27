

        $(window).scroll( function(){
            
            var current_scroll = $(window).scrollTop();
            
            
            if( current_scroll >100){
                
                $('.menu').addClass('menu-white');
            }else{
                $('.menu').removeClass('menu-white');
            }
            
            });
            

   


  $(window).scroll(function(){
		
		var current_scroll = $(window).scrollTop();
		
		if( $(this).scrollTop() >100){
		
		$('.grid-item-1').fadeIn(300).animate({'left':'0%'});
	}else{
		$('.grid-item-1').fadeOut(200).animate({'left':'-15%'});
	}

});

$(window).scroll(function(){
		
    var current_scroll = $(window).scrollTop();
    
    if( $(this).scrollTop() >100){
    
    $('.grid-item-4').fadeIn(300).animate({'right':'-15%'});
}else{
    $('.grid-item-4').fadeOut(200).animate({'right':'-55%'});
}

});
$(window).scroll(function(){
		
    var current_scroll = $(window).scrollTop();
    
    if( $(this).scrollTop() >100){
    
    $('.grid-item-3').fadeIn(300).animate({'right':'-15%'});
}else{
    $('.grid-item-3').fadeOut(200).animate({'right':'-15%'});
}

});

/**Photos Grid 

var current_photo = 0;
var photo_total = $('.photo').length;

setInterval( function (){

    $('.photo').eq(current_photo).animate({'top':'-60%'});

		if(current_photo < photo_total -1){

			current_photo++;
		}else{

			current_photo = 0;
		}


});*/

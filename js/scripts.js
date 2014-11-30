$(document).ready(function(){

	// ABAS DO APP

    $('.tabs li a').on('click', function()  {

        var currentAttrValue = $(this).attr('id');

 		$('.tab').removeClass('ativo');
        $("#" + currentAttrValue).addClass('ativo');
 
        $('.tabs-content-container .tab-content').removeClass('ativo');
        $('.tabs-content-container #'+currentAttrValue ).addClass('ativo');

    });

    // LIGHTBOX DO VÍDEO DA CAMPANHA

    $('.link-filme').on('click', function(){
		$(".wrap-video").fadeIn();
		$(".content-video .close-btn").click(function(){
			$(".wrap-video").fadeOut();
		});
    });

});
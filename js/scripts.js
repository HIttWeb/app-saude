$(document).ready(function(){

    $('.tabs li a').on('click', function()  {

        var currentAttrValue = $(this).attr('id');

 		$('.tab').removeClass('ativo');
        $("#" + currentAttrValue).addClass('ativo');
 
        $('.tabs-content-container .tab-content').removeClass('ativo');
        $('.tabs-content-container #'+currentAttrValue ).addClass('ativo');

    });

});
$(document).ready(function() {

    //Enlaces con rel external se piran a una nueva ventana
    $(function() {
        $('a[rel~=external]').attr('target', '_blank');
    });
	
	$('.enlarge img').hover(function(){
		var src=$(this).attr('src');		
		$('#largeimage').attr('src',src);		
	},function(){
	
	});
});
$(window).load(function(){
/*
	$('#printButton').click(function(e) {
		print();
		window.close();
		return false;
	});
*/
	$('#menuButton').click(function(ev) {
		$('#hiddenMenu').toggle();
	});
	$('#menu li').click(function(ev) {
		$(this).find('>ul').slideToggle().end().siblings().find('ul').slideUp();
		ev.stopPropagation();
	});
	
	var sPath = window.location.pathname;
	var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
	$('#menu li').each(function(i, val){
		var fullPath = $('a', val).attr('href');
		if(typeof fullPath != 'undefined'){
			var menuItem = fullPath.substring(fullPath.lastIndexOf('/') + 1);
      			if(menuItem == sPage) {
        			$(val).addClass('active');
				$(val).parent().show();
				$(val).parent().parent().show();
				$(val).parent().parent().parent().show();
			}
		}					
    });
});

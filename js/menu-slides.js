(function($) {
	$(document).ready(function(){
		/*
		$('#sidebar-menu > ul > li ul').each(function(index, element){
			  var count = $(element).find('li').length;
			  var content = '<span class="cnt">' + count + '</span>';
			  $(element).closest('li').children('a').append(content);
			});
			*/
		
		$('#sidebar-menu ul ul li:odd').addClass('odd');
		
		$('#sidebar-menu ul ul li:even').addClass('even');
		
		/*
		$('#sidebar-menu > ul > li > a').click(function() {
	
			  var checkElement = $(this).next();
	
			  $('#sidebar-menu li').removeClass('active');
			  $(this).closest('li').addClass('active');
	
			  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
			    $(this).closest('li').removeClass('active');
			    checkElement.slideUp('normal');
			  }
			  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
			    $('#sidebar-menu ul ul:visible').slideUp('normal');
			    checkElement.slideDown('normal');
			  }
	
			  if($(this).closest('li').find('ul').children().length == 0) {
			    return true;
			  } else {
			    return false;
			  }
	
			});*/
	});
}(jQuery));
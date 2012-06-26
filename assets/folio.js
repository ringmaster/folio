var resetMenu = function() {
	$('.main-nav li').removeClass('sel');
	$('#home_link').addClass('sel');
}

$(function(){
	$('.main-nav a').click(function(){
		var a = $(this);
		var selector = a.attr('href');
		$('.main-nav li').removeClass('sel');
		a.closest('li').addClass('sel');
		$(selector).clone().appendTo('body').modal().on('hidden', function(){
			$(this).remove();
			resetMenu();
		});
	});
})
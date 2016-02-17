jQuery(function($) {
	// Window Load
	$(window).load(function() {
		$('#searchBox').keyup(function() {
			if($(this).hasClass('toggled'))
			{				
				if(!$(this).val())
				{
					$('#content').show();
					$(".input-group.stylish-input-group").appendTo('#content');
					$("#searchCheckbox").appendTo('#content');
					$(this).focus().removeClass("toggled");
				}
			}
			else
			{			
				if($(this).val())
				{
					$(".input-group.stylish-input-group").appendTo('#searchBoxGoesHere');
					$("#searchCheckbox").appendTo('#searchBoxGoesHere');
					$(this).focus().addClass("toggled");
					$('#content').hide();
				}
			}
		});
	});
});


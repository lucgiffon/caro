jQuery(function($) {
	// Window Load
	$(window).load(function() {
		$('#searchBox').keyup(function() {
			if($(this).hasClass('toggled'))
			{				
				if(!$(this).val())
				{
					$('#content').show();
					$("#searchBoxForm").appendTo('#searchBoxBackHere');
					$("#hidden-toggled").show();
					//$("#searchCheckbox").appendTo('#content');
					$(this).focus().removeClass("toggled");
				}
			}
			else
			{			
				if($(this).val())
				{
					$("#searchBoxForm").appendTo('#searchBoxGoesHere');
					//$("#searchCheckbox").appendTo('#searchBoxGoesHere');
					$("#hidden-toggled").hide();
					$(this).focus().addClass("toggled");
				}
			}
		});
	});
});


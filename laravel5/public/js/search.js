jQuery(function($) {
	// Window Load
	$(window).load(function() {
		$('#searchBox').keyup(function() {
            window.scrollTo(0, 0);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '',
                type: "post",
                data: {'q': $('input[name=q]').val()},
                success: function(data){
                    alert(data);
                }
            });

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


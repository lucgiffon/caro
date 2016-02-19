function arrayHasOwnIndex(array, prop) {
    return array.hasOwnProperty(prop) && /^0$|^[1-9]\d*$/.test(prop) && prop <= 4294967294; // 2^32 - 2
}

var delay = (function(){
    var timer = 0;
    return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
    };
})();


jQuery(function($) {
	// Window Load
	$(window).load(function() {
        $('#searchBox').keyup(function() {
            $('#table_here').empty();
            window.scrollTo(0, 0);
            delay(function(){}, 200 );
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
                    $('#table_here').empty();
                    var table = $('<table></table>').addClass('table').addClass('table-striped');
                    //TODO: AJOUTER LES FILTRES
                   $(data).each(function( index ) {
                       var row = $('<tr></tr>');

                       for (key in this) {
                           if (arrayHasOwnIndex(this, key)) {
                               if(this[key] !== null && typeof this[key] === 'object')
                               {
                                   var cell = $('<td></td>');
                                   var liste = $('<ul></ul>').addClass('text-left');

                                   for (key2 in this[key]) {
                                       if (arrayHasOwnIndex(this[key], key2)) {
                                           var element_liste = $('<li></li>').text(this[key][key2]['name']);

                                           liste.append(element_liste);
                                       }
                                   }

                                   cell.append(liste);
                               }
                               else
                               {
                                   var cell = $('<td></td>').text(this[key]);
                               }

                               row.append(cell);
                           }
                       }

                       if($('#searchBox').val())
                       {
                           table.append(row);
                       }
                    });

                    $('#table_here').append(table);
                }
            });

            if($(this).hasClass('toggled'))
			{
				if(!$(this).val())
				{
					$('#content').show();
					$("#searchBoxForm").prependTo('#searchBoxBackHere');
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


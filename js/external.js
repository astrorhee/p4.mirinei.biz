$("map area").mousedown(function() {
	var obj_info = '#' + $(this).attr('id') + '_info'
	$(obj_info).dialog({
		modal: true,
		width: 595
	});
});

$("#hint").mousedown(function() {
	$("#ss_info").dialog({
		modal: true,
		width: 800
	});
});

$( "#hint" ).hover(function() {
	$( this ).fadeOut( 100 );
	$( this ).fadeIn( 500 );
});
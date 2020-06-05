$(function(){
	$('#codigopro').keyup(function(){
		var url = $('#frmBPro').attr('action');
		var datos = $(this).serialize();
		$.post(url, datos, function(o){
			$('#resultado').html(o.text);
		}, 'json');
		return false;
	});
	$('#codigoform').keyup(function(){
		var url = $('#frmBform').attr('action');
		var datos = $(this).serialize();
		$.post(url, datos, function(o){
			$('#resultado').html(o.text);
		}, 'json');
		return false;
	});
	$('#frmEdPro').submit(function(){
		var url = $(this).attr('action');
		var datos = $(this).serialize();
		$.post(url, datos, function(o){
		//	$('#resultado').html(o.text);
			$.notify({
				icon: "ti-user",
				message: o.text
			},{
				type: o.estado,
				timer: 500
			});
		}, 'json');
		return false;
	});
		$('#frmEdFor').submit(function(){
		var url = $(this).attr('action');
		var datos = $(this).serialize();
		$.post(url, datos, function(o){
		//	$('#resultado').html(o.text);
			$.notify({
				icon: "ti-user",
				message: o.text
			},{
				type: o.estado,
				timer: 500
			});
		}, 'json');
		return false;
	});

		$('#frmEdContra').submit(function(){
		var url = $(this).attr('action');
		var datos = $(this).serialize();
		$.post(url, datos, function(o){
		//	$('#resultado').html(o.text);
			$.notify({
				icon: "ti-user",
				message: o.text
			},{
				type: o.estado,
				timer: 500
			});
		}, 'json');
		return false;
	});
});
$("#registro").click(function(){
	var dato1 = $("#email").val();
	var dato2 = $("#subject").val();
	var dato3 = $("#content").val();
	var route = "/mail";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{email: dato1, subject: dato2,content: dato3},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.genre);
			$("#msj-error").fadeIn();
		}
	});
});
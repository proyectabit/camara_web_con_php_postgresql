$(document).ready(function() {
	$("#tabla").DataTable({
		"destroy": true,
		"processing": true,
		"ajax": {
			"url": "backend/tabla.php",
			"dataSrc": function (json){
				return json.data;
			}
		},
		"order" : []
	});
});

function verfoto(foto){
	$("#verfotomodal").html("");
	$('#modalfoto').modal('show');
	$("#verfotomodal").append('<img src="foto/'+foto+'" class="img-responsive" style="width: 100%;">');
}
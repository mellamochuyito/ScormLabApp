function cargar(){
	var a=$("#titulo").val();
	$.ajax({
        url: "datos.php",
        type: "POST",
        data: {nofuncion: "primera"},
        success: function (finishim) {
            resultado = finishim;
            $("#dataflux").html(resultado);
            //el resultado es una cadena de html la cual es vaciada en el span resultados
        }
    });

	alert(a);
}
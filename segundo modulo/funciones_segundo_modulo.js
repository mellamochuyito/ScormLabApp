var contmodules=0;
var contmodulesdata=0;
function newmod(){
	$.ajax({
		url: "appendedform.txt",
		success: function (data){
			
			$('#dataflux').append("<div id='mod"+contmodules+"'class='modulos'><button onclick='createcontentpage(getparentname(this))'>textpage</button> <button onclick='createquestionpage(getparentname(this))'>question page</button> </div><br>");	
			$("#mod"+contmodules).focus();
			contmodules++;
		}
	});
}

function createcontentpage(parent){
	contmodulesdata++;
	$("#"+parent).html("");
	$("#"+parent).append('<h2>modulo'+contmodules+'</h2>');
	$("#"+parent).append('titulo del texto a insertar<input type="text" id="title'+contmodules+'"><br>');
	
	$("#"+parent).append('<textarea name="hola" id="datauser'+contmodulesdata+'" placeholder="Escriba Aqui" cols="90" rows="10"></textarea>');
	//$("#"+parent).append("<script>alert('HOLA!!!')</script>");
}

function createquestionpage(parent){
		
}

function getparentname(elemento){
	while (elemento && (elemento.tagName != "DIV" || !elemento.id)){
		elemento = elemento.parentNode;
		if(elemento){
			//alert(elemento.id);
			return elemento.id;
		}
	}
}
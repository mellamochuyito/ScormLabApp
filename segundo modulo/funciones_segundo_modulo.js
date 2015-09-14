var contmodules=0;
var contmodulesdata=0;
function newmod(){
	$.ajax({
		url: "appendedform.txt",
		success: function (data){
			contmodules++;
			$('#dataflux').append("<div id='mod"+contmodules+"'style='background-color:#ddd;'><button onclick='createcontentpage(getparentname(this))'>textpage</button> <button onclick='createquestionpage(getparentname(this))'>question page</button> </div><br>");	
			$("#mod"+contmodules).focus();
		}
	});
}


function createcontentpage(parent){
	$("#"+parent).html("<h1>Fierro parienton!!</h1>");
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
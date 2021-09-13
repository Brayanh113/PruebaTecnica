
function generarLetra(){
	var letras = ["a","b","c","d","e","f","0","1","2","3","4","5","6","7","8","9"];
	var numero = (Math.random()*15).toFixed(0);
	return letras[numero];
}
	
function colorHEX(){
	var color = "";
	for(var i=0;i<6;i++){
		color = color + generarLetra() ;
	}
	return "#" + color;
}

var cont= 0;
for (var i = 144 - 1; i >= 0; i--) {
	var color = document.getElementById(cont)

	color.style.backgroundColor = colorHEX();
	
	cont++;
}

function cambiarcolor(id){
	var color = document.getElementById(id++)
	colorNuevo = colorHEX();
	color.style.backgroundColor = colorNuevo;

	Swal.fire("Nuevo color: "+ colorNuevo);
}

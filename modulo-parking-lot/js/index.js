function consulta() 
{
	let data = $.ajax({
		url: "consulta.php",
		dataType: "text",
		async: false
	}).responseText;

	let contenido = document.getElementById('contenido');
	contenido.innerHTML = data;
}

setInterval(consulta, 1000);
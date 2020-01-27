var pelis = [
	{
		"Nombre": "El señor de los anillos",
		"Genero": "Acción"
	},
	{
		"Nombre": "Regreso al Futuro",
		"Genero": "Acción"
	},
	{
		"Nombre": "Annabelle",
		"Genero": "Terror"
	},
	{
		"Nombre": "La cabaña del bosque",
		"Genero": "Terror"
	},
	{
		"Nombre": "Saw",
		"Genero": "Terror"
	},
	{
		"Nombre": "El bebé jefazo",
		"Genero": "Animación"
	},
	{
		"Nombre": "Gru, mi villano favorito 2",
		"Genero": "Animación"
	},
	{
		"Nombre": "Cars 3",
		"Genero": "Animación"
	},
	{
		"Nombre": "Ocho apellidos vascos",
		"Genero": "Comedia"
	},
	{
		"Nombre": "Resacón en las vegas",
		"Genero": "Comedia"
	},
	{
		"Nombre": "Solo en casa",
		"Genero": "Comedia"
	},
	{
		"Nombre": "Terminator 2",
		"Genero": "Acción"
	},
	{
		"Nombre": "Jungla de cristal",
		"Genero": "Acción"
	},
	{
		"Nombre": "RoboCop",
		"Genero": "Acción"
	},
	{
		"Nombre": "El padrino",
		"Genero": "Drama"
	},
	{
		"Nombre": "El pianista",
		"Genero": "Drama"
	},
	{
		"Nombre": "Braveheart",
		"Genero": "Drama"
	},
	{
		"Nombre": "Titanic",
		"Genero": "Drama"
	},
	{
		"Nombre": "La lista de schindler",
		"Genero": "Drama"
	},
	{
		"Nombre": "Los increibles 2",
		"Genero": "Animación"
	},
	{
		"Nombre": "Los inmortales",
		"Genero": "Acción"
	}
	];
	
	var cuerpo = document.getElementsByTagName("body")[0];
	var tabla = document.getElementsByTagName("table")[0];
	var tblBody = document.getElementsByTagName("tbody")[0];
	
	
	// Creamos una celda por cada elemento que haya en el array y nos guardamos el objeto json en un array.
		for (var i = 0; i < pelis.length; i++) {
			var peliculas = pelis[i];

			// creamos las filas de la tabla con j
			var row = document.createElement("tr");

			for (var j = 0; j < 2; j++) {
				// Con la j creamos las columnas y le añadimos el nombre de la pelicula si es 0 y la imagen si es 1
			    if(j==0){

			    	var cell = document.createElement("td");
			      	var cellText = document.createTextNode(peliculas.Nombre);	
			      	cell.appendChild(cellText);
			      	row.appendChild(cell);

			    }else if(j==1){

			      	var cell = document.createElement("td");
			      	var cellText = document.createTextNode(peliculas.Genero);
			      	row.appendChild(cell);

			      	var imagen = document.createElement("img");

			      	// Comprobamos el valor del genero y dependiendo de cual sea, asignamos una imagen
			      	if(peliculas.Genero == "Drama"){
			      		
			      		imagen.setAttribute("src","../Resources/Drama.png")
			      		cell.appendChild(imagen);

			      	}else if(peliculas.Genero == "Animación"){

			      		imagen.setAttribute("src","../Resources/Animacion.png");
			      		cell.appendChild(imagen);

			      	}else if(peliculas.Genero == "Comedia"){

			      		imagen.setAttribute("src","../Resources/Comedia.png");
			      		cell.appendChild(imagen);

			      	}else if(peliculas.Genero == "Acción"){

			      		imagen.setAttribute("src","../Resources/Accion.png");
			      		cell.appendChild(imagen);

			      	}else if(peliculas.Genero == "Terror"){

			      		imagen.setAttribute("src","../Resources/Terror.png");
			      		cell.appendChild(imagen);
			      	}
			    }
			}

			// añadimos la fila al cuerpo de la tabla
			tblBody.appendChild(row);
		}

		// añadimos el cuerpo de la tabla a la tabla
		tbl.appendChild(tblBody);
		// añadimos la tabla al body
		body.appendChild(tbl);
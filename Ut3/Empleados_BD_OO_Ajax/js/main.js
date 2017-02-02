"use strict";

class Search {

	constructor (input, section) {
		
		this.input = input;
		this.section = section;

		this.initEvents ();

	}

	initEvents () {

		var search = this;

		this.input.keyup (function (e) {

			search.getData();

		});

	}

	getData () {

		var search = this;

		$.ajax({

			url: "index.php?section=search",
			data: { 
				"nss": search.input.val()
			},
			cache: false,
			type: "POST",
			success: function(response) {

				//console.log(response);
				search.setTable(response);

			},
			error: function(xhr) {
				
				alert("Error al pedir seccion");

			}

		});

	}

	setTable (table) {

		this.section.find("table").remove();
		this.section.append(table);

	}

}

$(function () {

	if(window.location.href.split("/")[3] == "index.php?section=search"){

		new Search ($("#search"), $("section"));

	}
	
});









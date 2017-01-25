"use strict";

class Search {

	constructor (input, tBody) {
		
		this.input = input;
		this.tBody = tBody;

		this.initEvents ();

	}

	initEvents () {

		var search = this;

		this.input.keypress (function (e) {

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

				console.log(response);

			},
			error: function(xhr) {
				
				alert("Error al pedir seccion");

			}

		});

	}

}

$(function () {

	if(window.location.href.split("/")[3] == "index.php?section=search"){

		new Search ($("#search"), $("tBody"));

	}

	

});









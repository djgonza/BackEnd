"use strict";

class Search {

	constructor (input, tBody) {
		
		this.input = input;
		this.tBody = tBody[0];

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

				search.setTableData($.parseJSON(response));
				//console.log($.parseJSON(response));

			},
			error: function(xhr) {
				
				alert("Error al pedir seccion");

			}

		});

	}

	setTableData (data) {

		var search = this;

		search.tBody.innerHTML = "";

		$(data).each (function (i, element) {

			var tr = $("<tr></tr>").append(
					"<td>"+element[0]+"</td>",
					"<td>"+element[1]+"</td>",
					"<td>"+element[2]+"</td>",
					"<td>"+element[3]+"</td>",
					"<td>"+element[4]+"</td>",
					"<td>"+element[5]+"</td>",
					'<form action="index.php" method="POST"><input type="hidden" name="nss" value="'+element[3]+'"><input type="submit" name="delete" value="Borrar"></form>',
					'<form action="index.php" method="POST"><input type="hidden" name="nss" value="'+element[3]+'"><input type="submit" name="update" value="Editar"></form>'
				);
			search.tBody.append(tr[0]);
			
		});

	}

}

$(function () {

	if(window.location.href.split("/")[3] == "index.php?section=search"){

		new Search ($("#search"), $("tBody"));

	}
	
});









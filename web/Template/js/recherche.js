$("document").ready(function()
{
	$("#xyz").keyup(function()
	{
		if ($(this).val().length >0)
		{
			$(".fgh").empty();
			$.ajax(
			{
				type: 'get',
				url:'http://localhost/SoukLemdina/web/app_dev.php/evenement/Recherche/'+$(this).val(),
				async:false,
				beforeSend: function()
				{
					console.log('ok');
				},
				success:function(response){
					$.each(response,function(a,b)
					{
						$.each(b,function(c,d){
							$(".fgh").append
							(
							"                <div class=\"event entry-image parallax nobottommargin\" style=\"background-image: url('/SoukLemdina/web/uploads/images/" + d.photo + "'); height:600px\" data-stellar-background-ratio=\"0.3\" >\n" +
							"<div class=\"entry-overlay-meta\">" +
								"<h2><a>" + d.nomEvenement + "</a></h2>" +
								"<ul class=\"iconlist\">" +
								"<li><i class=\"icon-euro\"></i> <strong>" + d.type + "</strong></li>" +
								"<li><i class=\"icon-calendar3\"></i> <strong>Date:</strong>" + d.dateDebut + "</li>" +
								"<li><i class=\"icon-time\"></i> <strong>Timing:</strong>" + d.heure + "</li>" +
								"<li><i class=\"icon-map-marker2\"></i> <strong>Adresse:</strong>" + d.adresse + "</li>" +
								"<li><i class=\"icon-euro\"></i> <strong>prix</strong>" + d.prix + "</li>" +
								"<li><i class=\"icon-male\"></i> <strong>nombre de place</strong>" + d.nbPlace + "</li>" +
								"</ul>" +
							"<a class=\"btn btn-info btn-block btn-lg\">" + "Détails" + "</a>" + "</div>" + "</div>");
								console.log(d.type);
						});
						
					});
				}
			});
		}
	}
	
	);
}
);
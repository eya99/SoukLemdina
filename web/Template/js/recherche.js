$("document").ready(function()
{
	$("#zzz").keyup(function()
	{
		if ($(this).val().length >0)
		{

			$("#fgh").empty();
			$.ajax(
			{
				type: 'get',
				url:'http://localhost/SoukLemdina/web/app_dev.php/workshop/RechercheDynamiq/'+$(this).val(),
				async:false,
				beforeSend: function()
				{
					console.log('ok');
				},
				success:function(response){
					$.each(response,function(a,b)
					{
						$.each(b,function(c,d){
							$("#fgh").append
							(
							"<div class=\"postcontent nobottommargin col_last\" 1.jpg');" +
                                "<div id=\"posts\" class=\"events small-thumbs\">"+
							"<div class=\"entry clearfix\">" +
                                "<div class=\"entry-image\">"+
                                "<a>"+
                                "<img src='/SoukLemdina/web/Template/Image/events/'" + d.image +">" +
                                "<div class='entry-date'>10<span>Apr</span></div>" +
                            "</a>" +
								"<h2><a>" + d.nomWorkshop + "</a></h2>" +
								"<ul class=\"iconlist\">" +
								"<li><i class=\"icon-euro\"></i> <strong>" + d.type + "</strong></li>" +
								"<li><i class=\"icon-calendar3\"></i> <strong>Date:</strong>" + d.dateDebut + "</li>" +
								"<li><i class=\"icon-map-marker2\"></i> <strong>Adresse:</strong>" + d.adresse + "</li>" +
								"<li><i class=\"icon-euro\"></i> <strong>prix</strong>" + d.prix + "</li>" +
								"<li><i class=\"icon-male\"></i> <strong>nombre de place</strong>" + d.nbPlace + "</li>" +
								"</ul>" +
								"<div class=\"entry-content\">"+"<p>"+d.description+"</p>" +
								"<div class=\"entry-content\">"+" <li>"+"<a" + "class=\"btn btn-default\">Participer</a>"+
								"</li>"+"</div>"+
								" <div class=\"entry-title\">"+"<li>"+"<a" + " class=\"btn btn-default\">Plus de Détails</a>" +
								"</li>"+"</div>"
							);
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
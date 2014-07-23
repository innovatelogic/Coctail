//$.mobile.autoInitializePage = false;
/*$('#karte').on('pageshow', function(){
        google.maps.event.trigger(map, 'resize')
    });
        $( "#myCollapsibleSet" ).children().trigger( "collapse" );
  $( ".selector" ).collapsibleset( "refresh" );

  $('#home').live('pagebeforecreate',function(event) {
    var col = $('#collapseMe');
   
    col.data('collapsed',false);
    col.data('theme','a');
});   */       	
    

$(document).ready(function(){
	var theme = "a";
	

	$.getJSON('rec/data_alko.json', function(jsonData){

		$.each(jsonData, function(key, obj)
		{
			var stars = "";	
			if(this.bewertung >= 1){
				for (var i = 0; i < this.bewertung; i++){
					stars = stars+ "<img src='img/star.png'></img>";
				}
			}
							
			if (this.idi=="wod") 
			{
			
			$('#collapsible_wodka').append('<div data-role="collapsible" data-collapsed="true" data-collapsed-icon="arrow-r" data-theme="' + theme + '">' +
				'<h1>' + this.titel + '</h1>' +
				'<p>' + '<b>Geschmack:<b>' + this.geschmack + '</p>'  + 
				'<p>' + '<b>Rezept: </b>' + this.rezept + '</p>' +
				'<p>' + '<b>Bewertung: </b>' + stars + '</p>' +
				'</div>');//.trigger('create');			
			} 
			else if (this.idi=="teq") 
			{
				$('#collapsible_teqila').append('<div data-role="collapsible" data-collapsed="true" data-collapsed-icon="arrow-r" data-theme="' + theme + '">' +
					'<h1>' + this.titel + '</h1>' +
					'<p>' + '<b>Geschmack:<b>' + this.geschmack + '</p>'  + 
					'<p>' + '<b>Rezept: </b>' + this.rezept + '</p>' +
					'<p>' + '<b>Bewertung: </b>' + stars + '</p>' +
					'</div>');//.trigger('create');
			} 
			else if (this.idi=="rum") 
			{
						$('#collapsible_rum').append('<div data-role="collapsible" data-collapsed="true" data-collapsed-icon="arrow-r" data-theme="' + theme + '">' +
							'<h1>' + this.titel + '</h1>' +
							'<p>' + '<b>Geschmack:<b>' + this.geschmack + '</p>'  + 
							'<p>' + '<b>Rezept: </b>' + this.rezept + '</p>' +
							'<p>' + '<b>Bewertung: </b>' + stars + '</p>' +
							'</div>');//.trigger("create");
			}
			 //alert($('#collapsible_wodka').html());
		} 
		);
		$('#collapsible_wodka').collapsibleset('refresh');
			//$( "#collapsible_wodka" ).children().trigger( "collapse" );
			
		}
		)
		
		$.getJSON('rec/data_ohne.json', function(data){
			$.each(data, function(key, value){
				var stars = "";	
				if(this.bewertung >= 1){
					for (var i = 0; i < this.bewertung; i++){
						stars = stars+ "<img src='img/star.png'></img>";
					}
				}
				if (this.idi=="sahne") {
				  $('#collapsible_sahne').append('<div data-role="collapsible" data-collapsed="true" data-collapsed-icon="arrow-r" data-theme="' + theme + '">' +
					'<h1>' + this.titel + '</h1>' +
					'<p>' + '<b>Geschmack:<b>' + this.geschmack + '</p>'  + 
					'<p>' + '<b>Rezept: </b>' + this.rezept + '</p>' +
					'<p>' + '<b>Bewertung: </b>' + stars + '</p>' +
					'</div>').trigger("create");
				} else 
					if (this.idi=="fruchtig & saftig") {
						$('#collapsible_saft').append('<div data-role="collapsible" data-collapsed="true" data-collapsed-icon="arrow-r" data-theme="' + theme + '">' +
							'<h1>' + this.titel + '</h1>' +
							'<p>' + '<b>Geschmack:<b>' + this.geschmack + '</p>'  + 
							'<p>' + '<b>Rezept: </b>' + this.rezept + '</p>' +
							'<p>' + '<b>Bewertung: </b>' + stars + '</p>' +
							'</div>').trigger("create");
					}
				
				}
			);
			
		}
		)

	//$.mobile.initializePage();
});
		
				
		/*$('#collapsible_teqila').collapsibleset('refresh');
			$('#collapsible_rum').collapsibleset('refresh');
			$('#collapsible_wodka').collapsibleset('refresh');
			$('#collapsible_sahne').collapsibleset('refresh');
			$('#collapsible_saft').collapsibleset('refresh'); 
			*/
	
	
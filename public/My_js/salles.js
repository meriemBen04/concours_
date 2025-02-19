$(".invalid-feedback").hide();





//Fonction pour supprimer une facture
function supprimer_salle(objet)
{


	var id = $(objet).attr('identifiant');
    console.log(id)	;

   	$.ajax({
        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },                    
        type:"POST",
        url:"/salles/delete/ajax",
        data:{id_salle: id},
        

        success:function(data)
        {
        	
        	console.log(data);

        	var id_ligne = "#ligne"+data.id;

			$(id_ligne).css({ 'color': 'red', 'color': 'red'});
			

			setTimeout(function()
			{
			    
				$(id_ligne).hide(500);

			    
			}, 50);			


        	//
		}
		
	});	

}
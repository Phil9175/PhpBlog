 $(function() {
    
$( ".sortable" )
      .accordion({
        header: "> li > h3",
		collapsible: true,
		active: false,
		heightStyle: "content"
      })
      .sortable({ 
		connectWith:    '.sortable',
		cursor:         'move',
		placeholder:    'sortable-placeholder',
		handle:         '.block-title',
		cursorAt:       { left: 150, top: 17 },
		scroll:         false,
		zIndex:         9999,
		stop: function( event, ui ) {
			$(this).accordion( "refresh" );
			$(this).sortable( "refresh" );
			//id de l'element qu'on deplace -> $(ui.item).attr("id"); 
			//id du parent  $(this).parent().parent().attr('id');			
			$("#isChildOf"+$(ui.item).attr("id")).val($(ui.item).parent().parent().attr('id'));
				}
		
});
	$('.sortable').disableSelection();
  });
  
  var ChaineAleatoire = function ChaineAleatoire(nbcar)
{
	var ListeCar = new Array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9");
	var Chaine ='';
	for(i = 0; i < nbcar; i++)
	{
		Chaine = Chaine + ListeCar[Math.floor(Math.random()*ListeCar.length)];
	}
	return Chaine;
}


	function supprimerElement(id){
		$(id).remove();
	}
	
	function ajouterElement(id){
		
	var nom = $('#nomNouveauElement').val();
	var lien = $('#lienNouveauElement').val();
	var chaine = ChaineAleatoire(5);
	$('<li class="item" id="'+chaine+'"><h3 class="block-title">'+nom+'</h3><div class="block block-title"><label>'+nom+'</label><input type="hidden" name="tab['+chaine+'][id]" value=""><input type=\"hidden\" id="isChildOf'+chaine+'" name=\"tab['+chaine+'][isChildOf]\" value=\"0\"><input type="text" name="tab['+chaine+'][nom]" value="'+nom+'" id="nom'+chaine+'"><br><label>Lien du Menu</label><input type="text" name="tab['+chaine+'][lien]" value="'+lien+'" id="lien'+chaine+'"><br><a href="#" onClick="javascript:supprimerElement(\'#'+chaine+'\');return false;">Supprimer l\'item</a></div><ul class="sortable list-unstyled"></ul></li>').appendTo('#sortable');
	$("#sortable").accordion( "refresh" );
	}
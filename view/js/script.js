$(document).ready(function() {
	
	$('#addArticle').submit(function(){
		$('#contenu').val($('#fake_textarea').html());
		});
		
	$('#editArticle').submit(function(){
		$('#contenu').val($('#fake_textarea').html());
		});
});
function occurrences(string, subString, allowOverlapping){

    string+=""; subString+="";
    if(subString.length<=0) return string.length+1;

    var n=0, pos=0;
    var step=(allowOverlapping)?(1):(subString.length);

    while(true){
        pos=string.indexOf(subString,pos);
        if(pos>=0){ n++; pos+=step; } else break;
    }
    return(n);
	}
	
function addTo(nameDiv, content){
		var div = document.getElementById(nameDiv);
			div.innerHTML = div.innerHTML+ "<br />"+content;
		
	}
	
function checkSEO(){
		var titre = document.getElementById("titre").value;
		var meta_title = document.getElementById("meta_title").value;
		var meta_description = document.getElementById("meta_description").value;
		var url = document.getElementById("url").value;
		var contenu = document.getElementById("contenu").value;
		var tags = document.getElementById("tags").value;
		var keyword = document.getElementById("keyword").value.toLowerCase();
		contenuNoHtml = contenu.replace(/(<([^>]+)>)/ig,"").toLowerCase();
		var nbKeywordsContenu = occurrences(contenuNoHtml, keyword);
		var txkeywords = parseInt(nbKeywordsContenu)/parseInt(contenuNoHtml.length)*100;
		var nbKeywordsDescription = occurrences(meta_description, keyword);
		var nbKeywordsTitle = occurrences(meta_title, keyword);
		document.getElementById("remarqueTitle").innerHTML = "";
		document.getElementById("remarqueDescription").innerHTML = "";
		document.getElementById("remarqueContenu").innerHTML = "";
		document.getElementById("remarqueURL").innerHTML = "";
		document.getElementById("remarqueTitre").innerHTML = "";
		document.getElementById("remarqueTags").innerHTML = "";
		
		if (titre.length > 50){
			addTo("remarqueTitre", "Le titre est trop long (plus de 50 caractères)");
		}
		
		if (meta_title.length > 69){
			addTo("remarqueTitle", "La balise title est trop longue (plus de 69 caractères)");
		}
		
		if (nbKeywordsTitle < 1){
			addTo("remarqueTitle", "Il n'y a pas de mot clés dans la balise title.");
		}
		
		if (nbKeywordsTitle > 3){
			addTo("remarqueTitle", "Il y a trop de mot clés dans la balise title (plus de 3)");
		}
		
		if (meta_description.length > 158){
			addTo("remarqueDescription", "La balise meta description est trop longue (plus de 158 caractères)");
		}
		
		if (url.length > 92){
			addTo("remarqueURL", "L'url est trop longue (plus de 92 caractères)");
		}		
		
		if (txkeywords < 4){
			addTo("remarqueContenu", "La densité de mots clés n'est pas suffisante dans le contenu ("+txkeywords.toFixed(2)+"%, conseillé entre 4% et 7%)");
		}
		
		if (txkeywords > 7){
			addTo("remarqueContenu", "La densité de mots clés est trop importante dans le contenu ("+txkeywords.toFixed(2)+"%, conseillé entre 4% et 7%)");
		}
		
		if (nbKeywordsDescription < 1){
			addTo("remarqueDescription", "Il n'y a pas assez de mot clés dans la description ("+nbKeywordsDescription+", conseillé entre 1 et 4)");
		}
		
		if (nbKeywordsDescription > 4){
			addTo("remarqueDescription", "Il y a trop de mot clés dans la description ("+nbKeywordsDescription+", conseillé entre 1 et 4)");
		}
		
		
		
		
	}
	checkSEO();
	
	document.body.onkeydown = function(e){
    checkSEO();
	};

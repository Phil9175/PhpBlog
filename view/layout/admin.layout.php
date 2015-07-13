<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="<?php echo ADRESSE_SITE; ?>/view/css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
#stylingText{
	list-style-type:none;
	padding-left: 2px;
}
#stylingText li{
	display: inline-block;
	list-style: none;
}
.gras{
	background:url(<?php echo ADRESSE_SITE; ?>/view/images/wysiwyg/gras.png) no-repeat;
	background-size:24px 24px;
	width:30px;
	height:30px;
}
.souligne{
	background:url(<?php echo ADRESSE_SITE; ?>/view/images/wysiwyg/souligne.png) no-repeat;
	background-size:24px 24px;
	width:30px;
	height:30px;
}
.italique{
	background:url(<?php echo ADRESSE_SITE; ?>/view/images/wysiwyg/italique.png) no-repeat;
	background-size:24px 24px;
	width:30px;
	height:30px;
}
.barre{
	background:url(<?php echo ADRESSE_SITE; ?>/view/images/wysiwyg/barre.png) no-repeat;
	background-size:24px 24px;
	width:30px;
	height:30px;
}
.alignLeft{
	background:url(<?php echo ADRESSE_SITE; ?>/view/images/wysiwyg/align-gauche.png) no-repeat;
	background-size:24px 24px;
	width:30px;
	height:30px;
}
.alignRight{
	background:url(<?php echo ADRESSE_SITE; ?>/view/images/wysiwyg/align-droite.png) no-repeat;
	background-size:24px 24px;
	width:30px;
	height:30px;
}
.alignCenter{
	background:url(<?php echo ADRESSE_SITE; ?>/view/images/wysiwyg/align-centre.png) no-repeat;
	background-size:24px 24px;
	width:30px;
	height:30px;
}
.alignJustify{
	background:url(<?php echo ADRESSE_SITE; ?>/view/images/wysiwyg/align-justifie.png) no-repeat;
	background-size:24px 24px;
	width:30px;
	height:30px;
}

</style>

<title>Document sans nom</title>
</head>
<body>
	<!-- HEADER -->
	<div class="grid grid-pad">
		<div class="col-2-8"> <a href="<?php echo ADRESSE_SITE; ?>"><img src="<?php echo ADRESSE_SITE; ?>/images/JDR.png" height="40px"></a><br>
			<em>Journal du Référencement</em> </div>
		<div class="col-4-8"> Bienvenue sur le Journal Du Référencement<br>
			Veille technologique sur le referencement, nous vous montrerons les techniques de<br>
			referencement. </div>
		<div class="col-2-8"> <a href="<?php echo ADRESSE_SITE."/admin/disconnect"; ?>">Deconnexion</a> </div>
	</div>
	
	<!-- MENU -->
        <div class="grid grid-pad">
          <div class="col-3-3">
            <div class="module">
             <?php include("view/inc/menuadmin.php"); ?>
            </div>
          </div>
        </div>
		
	<div class="grid grid-pad"> 
		<!-- VUE -->
		<div class="col-3-3">
			<?php include "view/".$controller."/".$action.".php";?>
		</div>
	</div>
	
	<!-- FOOTER -->
	
	<div class="grid grid-pad">
		<div class="col-1-4">
			<div class="module">
				<h3>1/4</h3>
			</div>
		</div>
		<div class="col-1-2">
			<div class="module">
				<h3>1/2</h3>
			</div>
		</div>
		<div class="col-1-4">
			<div class="module">
				<h3>1/4</h3>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>/view/js/jquery-1.11.3.min.js"></script> 
	<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>/view/js/script.js"></script>
	<script type="text/javascript">
	function gras(){
		var texte = window.getSelection().toString();
		replaceSelection("<b>"+texte+"</b>" , true);
	}
	function italique(){
		var texte = window.getSelection().toString();
		replaceSelection("<i>"+texte+"</i>" , true);
	}
	function souligne(){
		var texte = window.getSelection().toString();
		replaceSelection("<font style=\"text-decoration: underline;\">"+texte+"<font>" , true);
	}
	function barre(){
		var texte = window.getSelection().toString();
		replaceSelection("<font style=\"text-decoration: line-through;\">"+texte+"<font>" , true);
	}
	
	function alignLeft(){
		var texte = window.getSelection().toString();
		replaceSelection("<p style=\"text-align: left;\">"+texte+"<p>" , true);
	}
	function alignRight(){
		var texte = window.getSelection().toString();
		replaceSelection("<p style=\"text-align: right;\">"+texte+"<p>" , true);
	}
	function alignJustify(){
		var texte = window.getSelection().toString();
		replaceSelection("<p style=\"text-align: justify;\">"+texte+"<p>" , true);
	}
	function alignCenter(){
		var texte = window.getSelection().toString();
		replaceSelection("<p style=\"text-align: center;\">"+texte+"<p>" , true);
	}
	
	
	function replaceSelection(html, selectInserted) {
    var sel, range, fragment;

    if (typeof window.getSelection != "undefined") {
        // IE 9 and other non-IE browsers
        sel = window.getSelection();

        // Test that the Selection object contains at least one Range
        if (sel.getRangeAt && sel.rangeCount) {
            // Get the first Range (only Firefox supports more than one)
            range = window.getSelection().getRangeAt(0);
            range.deleteContents();

            // Create a DocumentFragment to insert and populate it with HTML
            // Need to test for the existence of range.createContextualFragment
            // because it's non-standard and IE 9 does not support it
            if (range.createContextualFragment) {
                fragment = range.createContextualFragment(html);
            } else {
                // In IE 9 we need to use innerHTML of a temporary element
                var div = document.createElement("div"), child;
                div.innerHTML = html;
                fragment = document.createDocumentFragment();
                while ( (child = div.firstChild) ) {
                    fragment.appendChild(child);
                }
            }
            var firstInsertedNode = fragment.firstChild;
            var lastInsertedNode = fragment.lastChild;
            range.insertNode(fragment);
            if (selectInserted) {
                if (firstInsertedNode) {
                    range.setStartBefore(firstInsertedNode);
                    range.setEndAfter(lastInsertedNode);
                }
                sel.removeAllRanges();
                sel.addRange(range);
            }
        }
    } else if (document.selection && document.selection.type != "Control") {
        // IE 8 and below
        range = document.selection.createRange();
        range.pasteHTML(html);
    }
}
		
		



		</script>
	<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>/view/js/menu.js"></script>
</body>
</html>

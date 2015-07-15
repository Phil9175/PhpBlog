$(document).ready(function() {
	
	$('#addArticle').submit(function(){
		$('#contenu').val($('#fake_textarea').html());
		});
		
	$('#editArticle').submit(function(){
		$('#contenu').val($('#fake_textarea').html());
		});
});

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
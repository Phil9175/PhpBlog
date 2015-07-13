<?php
session_start();

spl_autoload_register( function($class_name) {
    if (file_exists("controller/class/" . $class_name . ".controller.class.php"))
	{
		include_once("controller/class/" . $class_name . ".controller.class.php");
	}
	 if (file_exists("view/class/" . $class_name . ".view.class.php"))
	{
		include_once("view/class/" . $class_name . ".view.class.php");
	}
	 if (file_exists("core/class/" . $class_name . ".core.class.php"))
	{
		include_once("core/class/" . $class_name . ".core.class.php");
	}
	 if (file_exists("modele/class/" . $class_name . ".modele.class.php"))
	{
		include_once("modele/class/" . $class_name . ".modele.class.php");
	}
});

//$validation = new validation($_SESSION['elementsSessionFormulaire']);
echo "<pre>";
print_r ($_SESSION['elementsSessionFormulaire']['identifiantFormulaire']);
echo "</pre>";

$validation = new validation($_SESSION['elementsSessionFormulaire']['identifiantFormulaire']);
echo "<br />";
//On appelle la validation de formulaire
//Si $validation->getErreur() est vide, on continue, sinon on les affiche
$validation->validationFormulaire();
echo "<pre>";
print_r ($validation->getErreur());
echo "</pre>";
// pour recuperer les post : $validation->getPostValeurs($_POST);

$formulaire = new formulaire("identifiantFormulaire", "css", "POST", "formulaire.php", "name");
$formulaire->ajoutElement("Texte", "text", "montexte", "class1", "monTeste", "", "", "classe", ["minlength" => 3, "maxlength" => 10]);
$formulaire->ajoutElement("Email", "text", "monemail", "class2", "monEmail", "", "", "classe", ["email" => ""]);
$formulaire->ajoutElement("Pass", "password", "pass", "class", "pass");
$formulaire->ajoutElement("Telephone", "teleposihfgoerihghone", "telephone", "class", "telephone");
$id = $formulaire->ajoutSelect("Monselecttitle", "id", "selectname", "classselect");
$formulaire->ajoutOptionSelect($id, "monselect");
$formulaire->ajoutOptionSelect($id, "monselect", "MONSELECT");
$formulaire->ajoutOptionSelect($id, "monselect");
$formulaire->ajoutOptionSelect($id, "monselect");
$formulaire->finSelect($id);
$formulaire->ajoutElement("Test", "submit", "id", "class", "element", "Envoyer");
echo $formulaire->afficheForm();
?>
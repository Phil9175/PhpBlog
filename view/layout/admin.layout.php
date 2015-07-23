<?php include("view/inc/head.php"); ?>
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
		<div class="col-8-8">
			<div class="module">
			<span class="muted">© <?php echo date('Y'); ?> - Copyright Le Journal Du Référencement - Tous droits réservés.</span>
			</div>
		</div>
		
	</div>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>/view/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>/view/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>/view/js/menu.js"></script>

<?php
if (security::get_can_modify_page(security::returnId()) || security::get_can_add_page(security::returnId())):
	if ($_SERVER['REQUEST_URI'] == "/admin/article/add" || substr($_SERVER['REQUEST_URI'], 0, 19) == "/admin/article/edit"):
?>
<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>/view/ckeditor/ckeditor.js"></script> 
<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>/view/js/script.js"></script> 
<?php
	endif;
endif;
?>
<?php
if (security::get_can_modify_menu(security::returnId())):
	if ($_SERVER['REQUEST_URI'] == "/admin/menu/edit"):
?>
<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>/view/js/scriptMenu.js"></script> 
<?php
	endif;
endif;
?>


</body></html>
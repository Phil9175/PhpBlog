<?php include("view/inc/head.php"); ?>

<!-- MENU -->

	<div class="grid grid-pad">
		<div class="col-3-3">
			<div class="module">
				<?php include("view/inc/menu.php"); ?>
			</div>
		</div>
	</div>
	
	<?php include("view/inc/ariane.php"); ?>
	<!-- VUE -->
	<div class="grid grid-pad">
	<div class="col-2-3">
		<?php include "view/".$controller."/".$action.".php";?>
	</div>
	<?php include("view/inc/side.php"); ?>
	<?php include("view/inc/foot.php"); ?>

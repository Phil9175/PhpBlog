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
	<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>/view/js/menu.js"></script>
	<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>/view/ckeditor/ckeditor.js"></script>

</body>
</html>

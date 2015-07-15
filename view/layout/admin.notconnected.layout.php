<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="<?php echo ADRESSE_SITE; ?>/view/css/style.css" rel="stylesheet" type="text/css">
<title>Document sans nom</title>
</head>
<body>
	<div class="grid grid-pad"> 
		<!-- VUE -->
		<div class="col-3-3">
			<?php include "view/".$controller."/".$action.".php";?>
		</div>
	</div>
</body>
</html>

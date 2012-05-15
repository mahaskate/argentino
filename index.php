<!DOCTYPE html>
<html dir="ltr" lang="pt">
<head>
	<title>Island Travel - Shoreside e Port Services</title>
    
	<meta charset="utf-8">
	<meta name="author" content="Muffin">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen" charset="utf-8">

	<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

<!-- JQUERY -->
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$(".tt").tooltip();
		$(".ttb").tooltip({placement:'bottom'});
		$(".ttl").tooltip({placement:'left'});
		$(".ttr").tooltip({placement:'right'});
	});
</script>

</head>
<body>

<!-- TOPO -->
<div class="container">
    <?php include"includes/topo.php"; ?>
</div>
<br>
<!-- CORPO -->
<div class="container container-main">
<!-- MAIN -->
	<div class="main">
    	<!-- MENU -->
       	<?php include"includes/menu.php"; ?>
        <!-- CAROUSEL -->
        <?php include"includes/carousel.php"; ?>
        <!-- NOTÍCIAS -->
        <?php include"includes/noticias-main.php"; ?>
    	<br style="clear:both;">
        <br>
        <!-- UTILIDADES E REDES SOCIAIS -->
	    <div class="well" style="overflow:hidden;">
        	<?php include"includes/tempo.php"; ?>
   		    <?php include"includes/conv-moedas.php"; ?>
  		    <?php include"includes/redes-sociais-footer.php"; ?>
		</div>
	</div>
		<!-- SIDE BAR -->
		<div class="sidebar">        
			<div class="pesquisar">
	            <?php include"includes/pesquisar.php"; ?>
			</div>
                <?php include"includes/likebox-fb.php"; ?>
        </div>
</div>
<!-- FOOTER -->
<div class="container">
	<?php include"includes/footer.php"; ?>
</div>

</body>
</html>
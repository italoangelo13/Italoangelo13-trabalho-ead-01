<?php
	//Variaveis Banda
	$nomeBanda = $_REQUEST['nomebanda'];
	$imgBanda = $_REQUEST['imgbanda'];
	$bio = $_REQUEST['bio'];

	//Variaveis do Integrante 1
	$intNome1 = $_REQUEST['intNome1'];
	$intData1 = date('d/m/Y', strtotime($_REQUEST['intData1']));
	$instru1 = $_REQUEST['instru1'];
	$imgInt1 = "user.jpg";

	//Variaveis do Integrante 2
	
	$intNome2 = $_REQUEST['intNome2'];
	$intData2 = date('d/m/Y', strtotime($_REQUEST['intData2']));
	$instru2 = $_REQUEST['instru2'];
	$imgInt2 = "user.jpg";

	if ($intNome2 == null) {
		$intNome2 = "Sem Integrante";
	}

	if ($intData2 == null) {
		$intData2 = "---";
	}

	if ($instru2 == null) {
		$instru2 = "---";
	}

	if ($imgInt2 == null) {
		$imgInt2 = "user.jpg";
	}

	//Variaveis do Integrante 3
	$intNome3 = $_REQUEST['intNome3'];
	$intData3 = date('d/m/Y', strtotime($_REQUEST['intData3']));
	$instru3 = $_REQUEST['instru3'];
	$imgInt3 = "user.jpg";

	if ($intNome3 == null) {
		$intNome3 = "Sem Integrante";
	}

	if ($intData3 == null) {
		$intData3 = "---";
	}

	if ($instru3 == null) {
		$instru3 = "---";
	}

	if ($imgInt3 == null) {
		$imgInt3 = "user.jpg";
	}

	//Variaveis Pagina
	$corFundo = $_REQUEST['fundo'];
	$corTexto = $_REQUEST['texto'];

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $nomeBanda; ?> - Minha Banda</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <style type="text/css">
        	body{
        		background: <?php echo $corFundo; ?>;
        		color: <?php echo $corTexo; ?>;
        	}

        	footer{
        		height:50px;
        		background: #4CAF50;
        	}
        </style>
    </head>
    <body>
        <div class="container">
        	<header class="row">
        		<div class="jumbotron jumbotron-fluid col-lg-12">
				  <div class="container">
				   <center> <h1 class="display-1" style="color: #000"><?php echo $nomeBanda; ?></h1></center>
				  </div>
				</div>
        	</header>


        	<div class="row">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-12">
	        				<img src='<?php echo $imgBanda ?>' alt='<?php echo $nomeBanda; ?>' title='<?php echo $nomeBanda; ?>' style="width: 100%;" >
	        			</div>
	        		</div>

	        		<div class="row">
	        			<div class="col-lg-12" style="margin-top: 10px;">
	        				<h1 class="alert alert-success">
	        					Biografia
	        				</h1>
	        				<p align="justify" style="color: <?php echo $corTexto; ?>;">
	        					<?php echo $bio; ?>
	        				</p>
	        			</div>
	        		</div>

	        		<div class="row">
	        			<div class="col-lg-12" style="margin-top: 10px;">
	        				<h1 class="alert alert-success">
	        					Integrantes
	        				</h1>
	        				<p align="justify" style="color: <?php echo $corTexto; ?>;">
	        					<div class="card-deck">
								  <div class="card">
								    <img class="card-img-top" src="<?php echo $imgInt1; ?>" alt="<?php echo $intNome1; ?>" style="width: 100%;">
								    <div class="card-block">
								      <h4 class="card-title"><?php echo $intNome1; ?></h4>
								      <p class="card-text"><?php echo $instru1; ?></p>
								      <p class="card-text"><small class="text-muted">Data de Nascimento: <?php echo $intData1; ?></small></p>
								    </div>
								  </div>
								  
								  
								  <div class="card">
								    <img class="card-img-top" src="<?php echo $imgInt2; ?>" alt="<?php echo $intNome2; ?>" style="width: 100%;">
								    <div class="card-block">
								      <h4 class="card-title"><?php echo $intNome2; ?></h4>
								      <p class="card-text"><?php echo $instru2; ?></p>
								      <p class="card-text"><small class="text-muted">Data de Nascimento: <?php echo $intData2; ?></small></p>
								    </div>
								  </div>

								  
								  <div class="card">
								    <img class="card-img-top" src="<?php echo $imgInt3; ?>" alt="<?php echo $intNome3; ?>" style="width: 100%;">
								    <div class="card-block">
								      <h4 class="card-title"><?php echo $intNome3; ?></h4>
								      <p class="card-text"><?php echo $instru3; ?></p>
								      <p class="card-text"><small class="text-muted">Data de Nascimento: <?php echo $intData3; ?></small></p>
								    </div>
								  </div>
								</div>
	        				</p>
	        			</div>
	        		</div>
	        	</div>
        	</div>


        	<footer class="row" style="text-align: center; padding: 20px;">
        		<h5 class="col-lg-12" style="color: #fff;">Página Gerada com @MinhaBanda.com</h5>
        	</footer>
        </div>






        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
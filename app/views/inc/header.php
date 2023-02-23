
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/login.css">
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/home.css">
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/profile.css">
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/product.css">
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/modal.css">
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/about.css">
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/buttonAnimate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/dropzone.css">

		<!--link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" /-->
		<!--script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script-->

		<script type="text/javascript" src="<?php echo RUTA_URL?>/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo RUTA_URL?>/js/dropzone.js"></script>
		<script type="text/javascript" src="<?php echo RUTA_URL?>/js/bootstrap.min.js"></script>
		


		<title><?php echo NOMBRESITIO; ?></title>
	</head>
	<body>
		<!---->

	<?php 
		 
		/*if(isset($_SESSION['datos']["idUser"]))
		{
			echo "los datos del usuario se han borado";
		}
		else
		{
			echo "Los datos del usuario aun esta en uso";
			$this->view('/pages/login');
		}*/





		//print_r( $_SESSION['datos']);
		$nameUser = "";
		
		$view =" "; 
		$view2 =" ";

		if(isset($_SESSION['page']))
		{
			$view = $_SESSION['page'];
			$view2 = $_SESSION['page2'];
			//echo $view2;
			//echo $view;
		}
		

		if(isset($_SESSION['datos']["idUser"]))
		{

			if(isset($_SESSION['datos']["userName"]))
			{
				$nameUser = $_SESSION['datos']["userName"];?>

				<header class="newMain">
					<img src="<?php echo RUTA_IMG?>/imgProfile.png" class="imgUserMain">
					<label class="lblWelcome">Bienvenido: <?php echo $nameUser; ?></label>

					<div class="contBtnMainN">
						<a class="optionMenu js-btnHome" href="<?= RUTA_URL;?>/Paginas/index">Home2</a>
						<a class="optionMenu" href="">About</a>
						<a class="optionMenu js-btnProfile" href="<?= RUTA_URL;?>/UserController/profile/">Profile2</a>
						<a  class="optionMenu js-btnProduct"  href="<?= RUTA_URL;?>/ProductController/getProducts">Products</a>
						<a  class="optionMenu js-btnProductM"  href="<?= RUTA_URL;?>/UserController/closeSession">Logout</a>

						<img src="<?php echo RUTA_IMG?>/imgProfile.png" class="imgUserMain js-imgLoginForOpenLog">
					</div>

				</header>
		<?php	}
			else
			{
				$this->view('/pages/productIndex');
			}
		}else{

			if($_SESSION['view'] == 'login') {
				echo " ";
			}
			else{ ?>

			<header class="newMain">


				<img src="<?php echo RUTA_IMG?>/imgProfile.png" class="imgUserMain">

					<div class="contBtnMainN js-conlistBtnMain">

						<a class="optionMenu js-btnHome" href="<?= RUTA_URL;?>/Paginas/index">Home2</a>
						<a class="optionMenu js-btnAbout" href="<?= RUTA_URL;?>/Paginas/about">About2</a>
						<a class="optionMenu" href="">Services</a>
						<a  class="optionMenu js-btnProductM"  href="<?= RUTA_URL;?>/Paginas/products">Products</a>
						<a  class="optionMenu js-btnProductMw"  href="<?= RUTA_URL;?>/Paginas/login">Login</a>

						<img src="<?php echo RUTA_IMG?>/imgProfile.png" class="imgUserMain js-imgLoginForOpenLog">
					</div>

					<button type="button" class="navbar-toggle js-btnShowMain" data-toggle="collapse" data-target="#example-navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

			</header>
			
	<?php	}
		}
	?>
			
		
			




		<!--header class="navigation">
			<div class="contLogoHeader2"-->
				<?php if($view != "ProIndex" )
				{
					?>
				<!--img src="<?php echo RUTA_IMG?>/imgProfile.png" class="imgUser"--> 

				
				<!--label class="lblWelcome">Bienvenido: <?php echo $nameUser; ?></label-->
				<?php
				}
				?>
			<!--/div>
			<Dentro de esta etiquete va el menu de navegacionn>
			<nav class="navbar navbar-default navigation main" role="navigation">
				<a class="navbar-brand" href="">Hacker.com</a>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div-->
				
				<?php 
				$idU = " ";
					if(isset($data['idUser']))
					{
						$idU = $data['idUser'];
						
					}
					
				?>
				

				<!--div class="collapse navbar-collapse" id="example-navbar-collapse" style="">
					<ul class="nav navbar-nav">
						<?php if($view != "ProIndex"){ ?>	
							<li class="btnMain"> <a href="<?= RUTA_URL;?>/Paginas/home/<?php //$_SESSION['iDu']; ?>" class="optionMain js-btnHome" style="color:white">Home</a></li>
						<?php } ?>
						
						<?php if($view != "ProIndex"){ ?>
						<div class="dropdown btnContBtnList ">
							<a class="dropdown-toggle btnMainList btnProduct js-listBtn js-btnProduct " href="#" role="button" id="dropdownMenuLinkq" data-toggle="dropdownq" aria-haspopup="true" aria-expanded="false">
								Productos
							</a>

							<div class="dropdown-menu optionList1 js-optionList" aria-labelledby="dropdownMenuLinkn0">
								<a class="dropdown-itemq  itemListBtn" href="<?= RUTA_URL;?>/ProductController/getProducts/">Todos LosProductos</a>
								<a class="dropdown-itemq itemListBtn" href="#">Mis Productos</a>
								<a class="dropdown-itemq itemListBtn" href="<?= RUTA_URL;?>/ProductController/sistemApart/">Productos Apartados</a>
							</div>
						</div>
						<?php } ?>
						
						<?php if($view == "ProIndex"){ ?>
						<li class="btnMain js-AddProduct1"> <a  class="optionMain js-btnProduct" style="color:white">Products</a></li>
						
						<li class="btnMain"> <a href="<?= RUTA_URL;?>/Paginas/index" class="optionMain js-btnHome" style="color:white">Home</a></li>
						<li class="btnMain"> <a href="<?= RUTA_URL;?>/Paginas/login" class="optionMain js-btnCreateAcount1 btnLog" style="color:white">Iniciar sesion</a></li>
						<li class="btnMain"> <a  href="<?= RUTA_URL;?>/Paginas/products" class="optionMain js-btnProductM" style="color:white">Productos</a></li>
						<li class="btnMain"> <a href="<?= RUTA_URL;?>/Paginas/about" class="optionMain js-btnAbout " style="color:white">Aserca de nosotros</a></li>
						
						<?php } ?>

						<?php if($view != "ProIndex"){ ?>
						<li class="btnMain"> <a href="<?= RUTA_URL;?>/UserController/profile/"  class="optionMain js-btnProfile" style="color:white">Profile</a></li>
						<li class="btnMain"> <a href="<?= RUTA_URL;?>/UserController/closeSession" class="optionMain js-btnExit " style="color:white">Log Out</a></li>
						<?php } ?>
					</ul>
				</div>
			</nav>
		</header-->
			
	<?php 
		if(isset($_SESSION['datos']["tipoUser"])){
			$typeUser = $_SESSION['datos']["tipoUser"];
			//echo $typeUser;
		}
		
	?>



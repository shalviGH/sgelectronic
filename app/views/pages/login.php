<?php 
	require RUTA_APP.'/views/inc/header.php'; 
?>

<?php 

	if(isset($_SESSION['register']))
	{

		$insert = $_SESSION['register'];

		if($insert == 'true')
		{
?>
			<div class="alert alert-success alert-dismissable msAlert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Message!</strong> El registro se relizo con exito, ya puede inicar sesion con su cuenta.
			</div>
<?php
		}
		elseif ($insert == 'false') {
		?>
			<div class="alert alert-danger alert-dismissable msAlert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Message!</strong> El suario / contraseña ya existen pruebe con otra.
			</div>

		<?php	# code...
		}		
	}
	if(isset($_SESSION['inicio'])){
		if($_SESSION['inicio'] == 'false'){?>
			<div class="alert alert-danger alert-dismissable msAlert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Message!</strong> El suario / contraseña incorrecto intente nuevamente.
			</div>

<?php		
		}
	}
	

?>

<!--$_COOKIE
este  ?

-->


<!--div class="contElementsw contLogin">
<form action="<?= RUTA_URL;?>/UserController/login" method="POST" class="formLogin-Js formLogin js-login2" >
	<--form action="/Users/addUser" method="POST" class="formLogin-Js"-->
		<!--div class="containerLogin">
			<div class="contImgLogin">
				<img src="<?= RUTA_URL; ?>/public/images/robotLog2.png" class="imgLogin">
				<label class="lblNameE">Electronica García</label>
				<label class="lblSlogan">Todo empieza en la imaginación</label>
			</div>
			<div class="contDataLogin loginEnter-js">
				<div class = "contGreeting"-->
					<!--div><lavel class="lblLog">Hello</label></div-->
					<!--div--><!--label class="lblLog lblM">Bienvenido</label--><!--/div-->
				<!--/div>
				<div class="contLoYorAcount">
					<label class="lblLog lblL lblT" >Login your account</label>
				</div>
				<div class="conTxtLogo">
					<label class="lblLog lblL">Username</label>
					<input type="text" name="user" class="txtLogin txtUserLog js-user">
					<label class="lblLog lblL">Password</label>
					<input type="password" name="pwd" class="txtLogin js-pass">
				</div-->

				<!--div class="contForgotPass">
					<label class="lblLog lblL" >Forgot password?</label>
				</div-->
				
				<!--label class="lblLog lblCaccount lblL lblCreateAcount-js" >Create account</label-->
					<!--div class="contBtnLogin">
						<button type="submit" value="Enter"  class="btnAnimate btnLogSendData2 btnLogoCreate js-enter">
							<span></span>
							<span></span>
							<span></span>
							<span></span>Enter
						</button>

						<a class="btnAnimate btnLogoCreate lblCreateAcount-js">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							Register
						</a>
					</div>
				
			</div>

			<div class="contDataLogin contDataRegister-js" >
				<div class = "contGreeting">
					<div><lavel class="lblLog"></label></div>
					<div><lavel class="lblLog lblM"></label></div>
				</div>
				<div class="contLoYorAcount">
					<label class="lblLog lblL lblT">Create account</label>
				</div>
				<div class="conTxtLogo"-->
					<!--label class="lblLog lblL">Name</label>
					<input type="text" name="name" class="txtLogin" >

					<label class="lblLog lblL">Last name</label>
					<input type="text" name="lastName" class="txtLogin">

					<label class="lblLog lblL">Email</label>
					<input type="email" name="email" class="txtLogin">

					<label class="lblLog lblL">Phone</label>
					<input type="phone" name="phone" class="txtLogin"-->

					<!--label class="lblLog lblL">User Name</label>
					<input type="text" name="userName" class="txtLogin js-FormRegLog">

					<label class="lblLog lblL">Password</label>
					<input type="password" name="pass" class="txtLogin js-FormRegLog">

					<label class="lblLog lblL">Phone</label>
					<input type="phone" name="phone" class="txtLogin js-FormRegLog" placeholder= "Este campo no es obligatorio">
				</div-->

					

				
				<!--input type="submit" value="Send"  class="btnLogIn"-->
				<!--label class="lblLog lblCaccount lblLoginI-js" >Login</label-->

				<!--div class="contBtnLogin">
					<button type="submit" class="btnAnimate btnLogSendData2 btnLogoCreate js-btnReg">
						<span></span>
						<span></span>
						<span></span>
						<span></span>Register
					</button>

					<a class="btnAnimate btnLogoCreate lblLoginI-js">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						Login
					</a>
				</div>
			</div>
			
		</div>
	</form>
</div-->




    <!--Modal for show message if input is empty --> <!--Modal for show message if input is empty --> <!--Modal for show message if input is empty --> 
    <!--Modal for show message if input is empty --> <!--Modal for show message if input is empty --> <!--Modal for show message if input is empty --> 
    <div class="modal  js-ModalshowMsIsempty">
        <div class="bodyModal">
            <form action="" method="POST" class="formModal js-formDelete">
                    <label id="js-inpNomPro" class="modalTitle">¡ Message !</label>
                    <input type="hidden" class="js-codBarra" name="codBarra"  >
                    <label id="js-inpNomPro" class="msModal">Los campos de texto no pueden ir vacios </label> 
                
                <div class="contBtnModal">
                    <button class="btn btn-success" >Aceptar</button>
                    <p href="" class="btn btn-primary js-btnCloseModalInfo" unset>Cancelar</p>
                </div>
            </form>
        </div>
    </div>





	<!--Modal for show login---><!--Modal for show login---><!--Modal for show login--->
    <!--Modal for show login---><!--Modal for show login---><!--Modal for show login--->

            <form action="<?= RUTA_URL;?>/UserController/login" method="POST" enctype="multipart/form-data" class="formLogin">
				<div class="contImgLoginH">
					<div class="fontImgLogin">
						<label class="lblLoginT lblNameCompany">WELCOME sgELECTRONIC</label>
						<P class="lblLoginT textLog">MBVFH BVHKS FBSEKDF SJFGHFJDS JHJJBKHKJBKFVKJHV JLHVJLS </P>
						<a  href="<?= RUTA_URL;?>/Paginas/register/" class="lblLoginT textLog">Dont have account?  sing up</a>
					</div>
				</div>

				<div class="contDataForm1">

					<div class="contFormL">
						<div class="contBtnForExitLog"><a class="iconExit" href="<?= RUTA_URL;?>/Paginas/index">X</a></div>
						<img src="<?php echo RUTA_IMG?>/robotAbout.png" class="imgLoginUs">
						
						<label class="lblLoginTitle">Login</label>	
						
						<div class="cInpLog">
							<!--label>Nombre:</label-->
							<input class="inpLogin" type="text" name="user" 
							oninput = "" maxlength="30"  maxlength="30" required placeholder="username" required id="js-inputLogin"/>
						</div>
						
						<div class="cInpLog">
							<!--label>Nombre:</label-->
							<input class="inpLogin" type="password" name="pwd" 
							oninput="" maxlength="30"   required placeholder="Password" required id="js-inputLoginPwd"/>
						</div>

						<div class="dataPr contBtnLogin">
							<button class="btnLoginCreate js-register">Crear cuenta</button>
							<input type="submit" value="Login" class="btnLoginEnter"/>
							<!--i class="btn btn-danger js-btnCancel">Cancel</i-->
						</div>
					</idv>	
				</div>	
            </form>




		
		


	

 <?php 
	$_SESSION['register'] = "empty";
	$_SESSION['inicio'] = "empty";
	 require RUTA_APP.'/views/inc/footer.php';  
 
 
 ?>






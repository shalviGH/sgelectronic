<?php 
    require RUTA_APP.'/views/inc/header.php';  //print_r($data);?>


    <!--div class ="containerHome">
        <div class="contElemntLeft">
            <p class="headDoc"> welcom to PrintDocument</p>
            <form class="formDoc">
                <div class="contDataUpload">
                    <label class="element" style="backgroung:red">Select Document</label>
			        <input type="file" name="userName" class="txtLogin element"> 
                    <input type="submit" value="Enter"  class="element btbUpFile">
                </div>
            </form>
        </div>

        <div class="contElemntRight">

        </div-->
        <!--div class="contElement contSlider">
            <div class="slider">
                <ul>
                    <li>
                        <img src=" <?php echo RUTA_IMG ?>/carRobot.jpg" alt="">
                    </li>
                    <li>
                        <img src=" <?php echo RUTA_IMG ?>/imgProgrammer.jpg"  alt="">
                    </li>
                    <li>
                        <img src=" <?php echo RUTA_IMG ?>/seguidor.jpg"  alt="">
                    </li>
                    <li>
                        <img src=" <?php echo RUTA_IMG ?>/robots.jpg"  alt="">
                    </li>
                </ul>
            </div>
            
        </div>

    </div-->


    <div class="secction">

		   <!--img src=" <?php echo RUTA_IMG ?>/carRobot.jpg" class="imgHome">
		   <img src=" <?php echo RUTA_IMG ?>/carRobot.jpg" class="imgHome"-->
		   
		<div class="emailHome">
		    <img src="<?php echo RUTA_IMG?>/imgProfile.png" class="imgUserMain">
			<label class="lblMailHome">Salvadorhacje@gmail.com</label>
		</div>
	
		</div>

		<div class="elementHome">
			<div class="contDataInfoHome contDataInfoHome11">
				<h4>Mision</h4>
				<p>El objetivo principal de la empresa es fomentar, contribuir 
					e innovar en el campo de la electrónica 
					entregando todos los componentes electrónicos ajustados a 
					las necesidades del mercado y de última tecnología
				</p>

				<div>
					<h4>Vision</h4>
					<p>Nuestra visión se basa en ofrecer la confianza 
						y responsabilidad con cada uno de los clientes, brindando 
						siempre productos de innovación y la más alta calidad para la elaboración 
						y diseño de proyectos.
						El compromiso implica la dedicación para reforzar el área de innovación y tecnología en Venezuela 
						y así fomentar el campo de la electrónica en el territorio nacional.
					</p>
				</div>
			</div>

			<div class="contDataInfoHome1">
			
				
				<div>
					<h4>Valores</h4>
					<p>Compromiso con nuestros clientes que han depositado su confianza en nosotros.</p>
					<p>Calidad en nuestros productos y servicios, nuestra carta de recomendación.</p>
					<p>Honestidad en nuestro trabajo y procesos, hacen de nuestros clientes una relación de sincera amistad</p>
				</div>

				
				<h3>Video</h3>
				<video class="videokk"  controls  height="300px">
					<source class="filevideokk" src="<?php echo RUTA_VIDEO?>/video4.mp4"  type="video/mp4" width="100px">
				</video>
				<!--video class="video2" autoplay muted loop  src="<?php echo RUTA_IMG?>/video.mp4" poster="presentacion.jpg" controls></video-->
			</div>	
		</div>

		<div class="footerHome">
			
			<div class="contElementListMainFooter">
				
				<img src="<?php echo RUTA_IMG?>/imgProfile.png" class="imgUserMain">

				<div class="contListMainH">
					<label class="lblComment"> Home</label>
					<label class="lblComment"> Discovery</label>
					<label class="lblComment">Photos</label>
					<label class="lblComment">Contact</label>

				</div>

				<div class="contListMainH">
					<label class="lblComment">About</label>
					<label class="lblComment">Help</label>
					<label class="lblComment">Terms</label>
					<label class="lblComment">GuidLines</label>
				</div>

				<div class="contListMainH">
					<label class="lblComment">Testimonios</label>
					<label class="lblComment">Advertise</label>
					<label class="lblComment">Integrations</label>
					<label class="lblComment">Careers</label>

				</div>

			</div>

			<div class="contComentRedSocial">

				<div class="contInpComent">
					<input type="text" class="intputComent">
					<label class="lblComment">Send comment</label>
				</div>

				<div class="contredS">
					<img src="<?= RUTA_URL; ?>/public/images/iconFacebook.png" width="25px" height="25px">
					<img  src="<?= RUTA_URL; ?>/public/images/iconsInstagram.png" width="30px" height="30px">
					<img src="<?= RUTA_URL; ?>/public/images/iconsWhatsapp.png"  width="30px" height="30px">
				</div>
			</div>	
		</div>


 





	

   


    


<?php require RUTA_APP.'/views/inc/footer.php';  ?>

        <?php 
                if(isset($data['product'])){
                    $op = $data['product'];
                }
                if(isset($data['productFound'])) {
                    $op = $data['productFound'];

                    //echo "la busqueda de producto existe";
                }
           ?>

            <div class="contianerProductList3">
                <div class="productMoresSales">
                    <!--label >Productos mas vendidos</label-->
                    <div class="contiInfoProduct">
                        <label class="titleProduct">Arduino</label>
                        <img src="<?php echo RUTA_IMG?>/arduino3.jpg" width="150px" height="150px" class="imgProductInfw">
                        <label class="lblDescPro">Precio: 250</label>
                        <label class="lblDatePro">12/02/2023</label>
                        
                    </div>

                    <div class="contiInfoProduct">
                        <label class="titleProduct">Puente h</label>
                        <img src="<?php echo RUTA_IMG?>/puenteh1.jpg" width="150px" height="150px" class="imgProductInfw">
                        <label class="lblDescPro">Puente-H  L934</label>
                        <label class="lblDatePro">12/04/2023</label>
                        
                    </div>

                    <div class="contiInfoProduct">
                        <label class="titleProduct">Puente h</label>
                        <img src="<?php echo RUTA_IMG?>/cablej1.jpg" width="150px" height="150px" class="imgProductInfw">
                        <label class="lblDescPro">Puente-H  L934</label>
                        <label class="lblDatePro">12/04/2023</label>
                        
                    </div>


                </div>

                <div class="listProduct2">

                    <?php foreach($op as $product) : ?>

                    <div class="contiInfoProduct contiInfoProductP js-contProduct">
                        
                        <img src="<?php echo RUTA_IMG , ($product->image); ?>" width="70px" height="70px"  class="imgProductInf imgProducts" id="urlImg">
                        <label class="titleProduct js-nameProduct"><?php echo $product->nameProduct;  ?> </label>
                        <!--label class="lblDatePro">12/04/2023</label-->
                        <label class="lblPrecio">Precio:   $ <label class="js-prePro"  style="margin-left:10px; color:blue;"><?php echo $product->price;  ?></label>
                        .00 MX</label>
                        <input type ="hidden" class="js-descPro" value="<?php echo $product->descrip; ?>">
                        <label class="lblDatePro js-cantProduct" style="display:none"><?php echo $product->amount;  ?></label> 

                        <?php 
                            $codB = $product->codBarra;

                            if(isset($data['productImage']))
                            {
                                //echo "Si hay imagenes";
                                // $var = $data['productImage']['idProducto'];
                            // echo $var;
                            foreach($data['productImage'] as $img):
                            // $numImg = 1;
                                    if($codB == $img->idProducto){  #echo   $img->nombreImg;?>
                                    
                                        <div class="listImg js-imgList" >
                                            <img  class="imgL" src="<?php echo RUTA_IMG.$img->nombreImg ?>" 

                                                   
                                                    height="20" width="20" id="imgProductw">
                                        </div>
                                    <?php   
                                    }
                                endforeach;
                            }

                            ?>


                        <div class="contBtnProducts contBtnApart">
                            <a href="#" id="js-btnApartUst" <?php if($view == 'ProIndex'){?> class="btn btn-success  js-btnApartProIndex" <?php  }else{?> class="btn btn-success  js-contProductA"  <?php } ?> 
                                js-codB = "<?php echo $product->codBarra;  ?>"
                                js-imgP = "<?php echo RUTA_IMG.$product->image;  ?>"
                                js-nomPro = "<?php echo $product->nameProduct;  ?>"
                                js-pricePro = "<?php echo $product->price;  ?>"
                                js-cantPro = "<?php echo $product->amount;  ?>"

                            >Agregar a carrito</a>
                            
                        </div>
                        
                    </div>

                    

                <?php 
                    endforeach;
                ?>

                    <!--div class="contiInfoProduct contiInfoProductP">
                        <img src="<?php echo RUTA_IMG?>/imgProfile.png" width="120px" height="120px">
                        <label class="titleProduct">Arduino</label>
                        <label class="lblDatePro">12/04/2023</label>
                    </div-->

                </div>
                

             </div> 


   

<!--Modal for show product info---><!--Modal for show product info--->
<!--Modal for show product info---><!--Modal for show product info--->

<div class="modal js-ModalInfoProduct ">
        <div class="bodyModal modalProductInfo" >
            
            <form action="<?= RUTA_URL;?>/ProductController/productUser" method="post" enctype="multipart/form-data" class="formModal">
                <div class="dataP">
                    <label id="js-inpNomPro" class="lblNameProduct">qq</label>
                </div>  
                <input type="hidden" name="idUser" value="<?php //echo $_SESSION['datos']["idUser"]; ?>"/>
                <input type="hidden" name="idProduct" id="idPro" value=""/>  
                <img  src="" class="imgProductOption" id="imgProduct" >

                <div class="contListImageInfo">
                    <img  class="imgL" id="img1" src=""  height="50px" width="50px" >
                    <img  class="imgL" id="img2" src=""  height="50px" width="50px" >
                    <img  class="imgL" id="img3" src=""  height="50px" width="50px" >
                    <img  class="imgL" id="img4" src=""  height="50px" width="50px">
                </div>
                <h4 class="hDescription">Descripción</h4>
                <p class="pDescription" id="js-descProduct"> bb  </p>

                <div class="line line2"></div>
                <label id="js-desc"></label>
                <div class="contDispPrice">
                    <label id="js-available"></label>
                    <label id="js-price"></label>
                </div>

                <div class="dataP contBtnAddP ">
                    <label class="btn btn-danger btnCloseInfo js-btnCancelw" unset>Cerrar</label>
                </div>
            </form>
        </div>
    </div>


    <!--Nodal for delete product --> <!--Nodal for delete product --> <!--Nodal for delete product --> 
	<!--Nodal for delete product --> <!--Nodal for delete product --> <!--Nodal for delete product --> 
	<div class="modal js-loginMessage">
		<div class="bodyModal">
			<form action="<?= RUTA_URL;?>/ProductController/deleteProduct" method="POST" class="formModal js-formDelete">
				<label id="js-inpNomPro" class="modalTitle">¡ Message !</label>
				<input type="hidden" class="js-codBarra" name="codBarra"  >
				<label id="js-inpNomPro" class="msModal">Para realizar este proceseo debe crear una cuenta personal</label> 
						 
				<div class="contBtnModal">
					<button class="btn btn-success" >Aceptar</button>
					<p href="" class="btn btn-primary btnClosemsLog" unset>Cerrar</p>
				</div>
			</form>
		</div>
	</div>
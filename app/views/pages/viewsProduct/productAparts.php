<?php 
    require RUTA_APP.'/views/inc/header.php';  //print_r($data);


   if(isset($data['productApart'])){
        $productApart = $data['productApart'];

        if(empty($productApart)){ ?>

            <div class="alert alert-warning alert-dismissable msAlert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>¡Message! </strong>  Aun no cuenta con productos apartados.

                <a href="<?= RUTA_URL;?>/ProductController/getProducts/"  class=" ">Apartar producto</a>
            </div>
        
       <?php }
       
    }
    
?>



        
           
            <div class="contListProApart2" >
                 <?php 
                   
                    
                    foreach($productApart as $productA) : 

                ?>
                    <div class="contImgProAp" id="">
                        <div class="contImgProApart2">
                            <img  src="<?php echo RUTA_IMG , ($productA->image); ?>" class="imgProductAp" id="urlImg"  > 
                            <label class ="js-CantProducto">Disponibles: <?php echo $productA->amountProduct; ?></label>
                            <div class="line"></div>
                                                    <?php 
                                                        $precioProduct = $productA->price;
                                                        $totalProduct = $productA->amountProduct;
                                                        $precioTotal = $precioProduct * $totalProduct;
                                                    ?>
                            <div class="contPrecioAvailable contApartProData">
                                <label class="js-lblPrecioTotal" ><?php echo 'Total a pagar: '.$precioTotal.'.00' ?></label>
                                <label class="js-productA"><?php echo 'Apartado:  '.$productA->amountProduct; ?></label>
                            </div>
                            
                            <input type="hidden" id="js-idProUserAp" value="<?php echo $productA->codBarra; ?>" />
                            
                            <label class= "lblInfoProduct" style="display:none">Produc: <label class="lblInfoProduct2 js-nameProduct" id="js-nameProduct"><?php echo $productA->nameProduct; ?> </label></label>
                            <!--label class= "lblInfoProduct" >desc: <label class="lblInfoProduct2 js-descPro" ><?php echo $productA->descrip; ?> </label></label-->
                            <label class= "lblInfoProduct" style="display:none">Precio: <label class="lblInfoProduct2 js-prePro" ><?php echo $productA->price; ?> </label></label>
                            <label class= "lblInfoProduct" style="display:none">disponible: <label class="lblInfoProduct2 js-cantProduct"><?php echo $productA->amount; ?> </label></label>
                            <input type="hidden" id="idUserPro" value="<?php echo $productA->idApart; ?>">
                        </div>
                        <div class="contBtnProduct">
                            <button js-idpro = "<?php echo $productA->idApart; ?>" href="<?php //echo RUTA_URL.'/ProductController/deleteProductApart/'.$productA->idUserProduct;  ?> " class="btn btn-success btncancelAp js-btnCancelApart">Cancelar Apartado</button>
                        </div>
                    </div>

                <?php 
                
                    endforeach;
                ?>
                
            </div>

    
    <!--view form apart product-->   <!--view form apart product-->   <!--view form apart product-->
    <!--view form apart product-->   <!--view form apart product-->   <!--view form apart product-->
    
<div class="modal js-ModalUpdateApart">
        <div class="bodyModal ">
            
            <form action="<?= RUTA_URL;?>/ProductController/productUser" method="post" enctype="multipart/form-data" class="formModal mApartarProducto">
                <div class="dataP">
                    <label id="js-inpNomPro" class="lblNameProduct">ggggg</label>
                    <!--input type="text" name="nameProduct" class="js-inpNomPro"/-->
                </div>  
                <input type="hidden" name="idUser" value="<?php echo $_SESSION['datos']["idUser"]; ?>"/>
                <input type="hidden" name="idProduct" id="idPro" value=""/>  
                
                <img  src="" class="imgProductOption" id="imgProductA" >

                <div class="line line2"></div>
                <div class="contDispPrice">
                    <label id="js-price2"></label>
                    <label id="js-available2"></label>
                </div>

                    <label class="js-tProduct"></label>
                <div class="dataP cantApartar">
                        <label for="lang">total a Apartar</label>
                            <select name="numProduct" id="lang" width="100px" height="170px" class="selectTotal js-CantidadP">
                            
                            <?php
                            $total = 10;
                                for ($i=1; $i <= $total ; $i++) { 
                                    # code...
                            ?>
                            <option value="<?php echo $i; ?> " class="js-cantSelected"> <?php echo $i; ?>  </option>
                        <?php
                            }
                        ?>
                        </select>
                </div>
                <div class="dataP contBtnAddP">
                    <input type="submit" value="Agregar" class="btnAddP" />
                    <label class="btnAddP btnpCancel js-btnCanProApart" unset>Cancel</label>
                </div>
            </form>
        </div>
    </div>


        <!--Nodal for delete product --> <!--Nodal for delete product --> <!--Nodal for delete product --> 
       <!--Nodal for delete product --> <!--Nodal for delete product --> <!--Nodal for delete product --> 
       <div class="modal js-ModalDeleteProductApart">
            <div class="bodyModal">
                <form action="<?= RUTA_URL;?>/ProductController/deleteProductApart" method="POST" class="formModal js-formDelete">
                        <label id="js-inpNomPro" class="modalTitle">¡ alert !</label>
                        <input type="hidden" id="js-idProUserAp2" class="js-codBarrai" name="idProUser"  >
                        <label id="js-inpNomPro" class="msModal">Esta seguro de eliminar el Producto </label> 
                    
                    <div class="contBtnModal">
                        <button class="btn btn-success" >Aceptar</button>
                        <p href="" class="btn btn-primary btnCanceDeleteProApart" unset>Cancelar</p>
                    </div>
                </form>
            </div>
        </div>




    <?php require RUTA_APP.'/views/inc/footer.php';  ?>
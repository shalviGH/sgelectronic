<?php 
    require RUTA_APP.'/views/inc/header.php';  //print_r($data);
   //redirection('/Paginas/index')

  if($_SESSION['datos']["tipoUser"] != 1){
        redirection('/Paginas/logOut');
    }
?>


    <!--Container of elements of the view elements--> 
    <form method="POST" action="<?= RUTA_URL;?>/ProductController/searchProduct">
        <div class="optionProduct">
           
            <div  class="contBtnAndSearchbbb">
            <button  class="btn btn-primary btnSearchProduct" >Buscar</button> 
            <input type="text" name="nameProduct"  class="inpSearchP" placeholder="Busca un producto"/>
            <select class="form-select inpSearchP" name="category" aria-label="Default select example">
                <option value="0">Categorias</option>
                <option value="1" class="js-category3">Electronica</option>
                <option value="2" class="js-category3">Audio</option>
                <option value="3" class="js-category3">Computo</option>
                <option value="4" class="js-category3">Hogar</option>
                <option value="5" class="js-category3">Gamer</option>
            </select>
        </div>
        </div>
    </form>


    <div class="contBtnAddproduct">
        <!--button  class="btn btn-primary js-AddProduct">Agregar Producto</button-->
        <a href="#" class="btnAnimate btnAddProductAamin js-AddProduct">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Add product
        </a>
        <!--a href="#" class="btnAnimate btnAddProductAamin js-saleProduct" style="margin-left:20px">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Vender
        </a-->
    </div>


    <?php 
        if (isset($_SESSION['CRUD'])) 
        {
            $crud=  $_SESSION['CRUD'] ;
        }
        //print_r($data['productImage']);
    ?>

    <!--div class="alert alert-warning alert-dismissable msAlert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Cuidado!</strong> Es muy importante que leas este mensaje de alerta.
    </div-->
        
            <?php 
                if(isset($data['product'])){
                    $op = $data['product'];
                    //echo $op;
                }
                
                if(isset($data['productFound'])) {
                    $op = $data['productFound'];
                    //echo $op;     
                }
            ?>


       <!---Code for view data in the table for admin data products----><!---Code for view data in the table for admin data products---->
       <!---Code for view data in the table for admin data products----><!---Code for view data in the table for admin data products---->
       <!---Code for view data in the table for admin data products----><!---Code for view data in the table for admin data products---->

        <div class="containerTable"> 
            <table class= "table">
                <thead class="tblHead1">
                    <tr class="tblHead">
                        <th class="tColumn1 tcNum">Num</th>
                        <th class="tColumn1">Imagen</th>
                        <th class="tColumn1">Nombre pro</th>
                        <th class="tColumn1">Precio</th>
                        <th class="tColumn1">Disponibles</th>
                        <th class="tColumn1">Opciones</th>
                    </tr>
                </thead>

                <tbody class="tBody">
                    <?php 
                    
                    ?>
                        <?php 
                            //show data of dtabase of product
                        $numL = 1;
                        foreach($op as $product) : 
                        ?>
                        <tr class="colDataT js-ConProduct">
                            <input type="hidden" value="<?php echo $product->codBarra; ?>" id="js-idP">
                            <input type="hidden" value="<?php echo $product->descrip; ?>" id="js-desc">
                            <input type="hidden" value="<?php echo $product->image; ?>" id="js-cImg">
                            <input type="hidden" value="<?php echo $product->image; ?>" class="js-cImg">

                            <th class="colData tcNum"><div class="divTbl"><?php echo $numL; ?></div></th>
                            <td><div class="divTbl" ><img src="<?php echo RUTA_IMG , ($product->image); ?>"   width="100px" height="100px"  style="padding:10px" id="imgProduct"/></div></td>
                            <td><div class="divTbl" id="js-nameProduct"><?php echo $product->nameProduct; ?></td></div>
                            <td> <div class="divTbl" id="js-priceProduct"><?php echo $product->price;  ?></td></div>
                            <td> <div class="divTbl" id="js-cantP"><?php echo $product->amount;  ?></td></div>
                            <td>
                                <div class="divTbl divTblOptions">
                                    <a  href= "#" class="btn btn-successw js-makeSale btnTbl" id="">Vender</a>
                                    <a href= "#" class="btn btn-primaryw  btnTbl js-editProduct" id="">Editar</a>
                                    <a href= "#" class="btn btn-dangerw js-deleteProduct btnTbl" id="">Eliminar</a>
                                    <a href= "#" class="btn btn-dangerw js-addImage btnTbl" id="">Agregar Imagen</a>
                                </div> 
                            </td>
                            <?php 
                                $codB = $product->codBarra;

                                //echo $codB;

                                if(isset($data['productImage']))
                                {
                                foreach($data['productImage'] as $img):
                                        if($codB == $img->idProducto){ 
                                            //echo RUTA_IMG.$img->nombreImg;
                                            ?>
                                            <div class="listImg js-imgList" >
                                                <img  class="imgL" src="<?php echo RUTA_IMG.$img->nombreImg ?>" 
                                                     height="20" width="20" id="imgProductw">
                                            </div>
                                        <?php   
                                        }
                                    endforeach;
                                }

                            ?>

                           
                        </tr>
                        <?php 
                            $numL = $numL + 1; 
                            endforeach;
                    
                    ?>
                </tbody>    
            </table>
        </div>





    <!--:::::::::::::Modal for sale products:::::::::::::--> <!--:::::::::::::Modal for sale products:::::::::::::-->
    <!--:::::::::::::Modal for sale products:::::::::::::-->

    <!--div class="modal js-ModalSaleProductV">
        <div class="bodyModal">
            <div class="contFormRegister">
                <form action="<?= RUTA_URL;?>/ProductController/saleProduct"  method="POST" enctype="multipart/form-data" class="formLogin formRegister js-formUser">
                    <div class="iconClose js-btnCloseSalePro"> <p>x</p> </div>	
                        <div class="contDataForm1 contDataFormRegister">
                            <div class="contInpRegister c2btnRegister3 titleFormAddUser">
                                <label class="lblTitleRegister js-titleFormUser">Registrar nuevo producto</label>
                            </div>
                            <div class="contInpRegister c2btnRegister contInpRegUs">
                                <select class="inpRegister inputRegUserA" name="category" id="pro" >
                                    <?php   if(isset($data['product'])) {
                                                $op = $data['product'];
                                                foreach($op as $product) :  ?>
                                                    <option   id="js-productSale" value="<?php echo  $product->codBarra; ?>" 
                                                            js-nameProduct = "<?php echo  $product->nameProduct; ?>"
                                                            js-pricePRO = "<?php echo  $product->price; ?>" >
                                                    
                                                            <?php echo  $product->nameProduct;  ?>
                                                        </option>
                                    <?php       endforeach;  }?>
                                </select>
                                <input class="inpRegister inputRegUserA" type="number" id="js-cantPro" name="namePro" min="1" 
                                        required placeholder="nombre del producto" required />
                                <input class="btn btn-success" type="button" id="js-btnAddListPro" name="namePro" value="Agregar" />
                            </div>

                            <div class="contDataProductSale field_wrapper">
                            </div>

                            <div class="contInpRegister contBtnSaveReg">
                                <input type="submit" value="Guardar" class="btnRegisterEnter btnSaveData"/>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div-->



    <!--:::::::::::::Modal for add image products:::::::::::::--> <!--:::::::::::::Modal for add image products:::::::::::::-->
    <!--:::::::::::::Modal for add image products:::::::::::::--> <!--:::::::::::::Modal for add image products:::::::::::::-->

    <div class="modal js-ModalAddImage">
        <div class="bodyModal">
            
            <form action="<?= RUTA_URL;?>/ProductController/addImage" method="POST" enctype="multipart/form-data" class="formModal">
                <label class="lblTitleModal"></label>
                <!--input type="text" value="" id="js-cantP" name = "cantProduct" /-->
                
                <div class="contMsModal">
                    <label>Agregar imagen al producto</label>
                </div>
                    
                    <input type="text"  name="idPro" multiple  required id="jsIdP"/>
                    <div class="dataP">
                        <label>Image 1:</label>
                        <input type="file"  name="photo1" multiple  required id="nuestroinput"/>
                    </div>
                    <div class="dataP">
                        <label>Imagen 2:</label>
                        <input type="file"  name="photo2" multiple  required id="nuestroinput"/>
                    </div>
                    <div class="dataP">
                        <label>Imagen 3:</label>
                        <input type="file"  name="photo3" multiple  required id="nuestroinput"/>
                    </div>
                    <div class="dataP">
                        <label>Imagen 4:</label>
                        <input type="file"  name="photo4" multiple  required id="nuestroinput"/>
                    </div>
                
                <div class="dataP contBtnModal  contBtnModalAI">
                    <input type="submit" value="Aceptar" class="btn btn-primary" required/>
                    <i class="btn btn-danger js-btnCancelAddImage" unset >Cancel</i>
                </div>
            </form>
        </div>
    </div>
    


    <!--required view document crud.php for to make creud of the product --><!--required view document crud.php for to make creud of the product -->
    <!--required view document crud.php for to make creud of the product --><!--required view document crud.php for to make creud of the product -->
    <?php
        require RUTA_APP.'/views/pages/viewsProduct/crudProduct.php';  //print_r($data); 
    ?>









<?php require RUTA_APP.'/views/inc/footer.php';  ?>






<?php 
    require RUTA_APP.'/views/inc/header.php';  //print_r($data);
?>

<form method="POST" action="<?= RUTA_URL;?>/ProductController/searchProduct">
    <div class="optionProduct">

        <div  class="contBtnAndSearchbbb">
            <button  class="btn btn-primary btnSearchProduct" >Buscar</button> 
            <input type="text" name="nameProduct"  class="inpSearchP" placeholder="Busca un producto"/>
            <select class="form-select inpSearchP" name="category" aria-label="Default select example">
                <option value="0">Categorias</option>
                <option value="1" class="js-category2">Electronica</option>
                <option value="2" class="js-category2">Audio</option>
                <option value="3" class="js-category2">Computo</option>
                <option value="4" class="js-category2">Hogar</option>
                <option value="5" class="js-category2">Gamer</option>
            </select>
        </div>
    </div>
</form>

    <?php 

        if(isset($_SESSION['Search'])){
            $values = $_SESSION['Search'];
			if($values == 0){ ?>
                <div class="alert alert-info alert-dismissable msAlert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>¡Message!</strong> No se encontraron resultados de las busqueda.
                </div>

    <?php    }
        }

        if(isset($_SESSION['apart'])){
            if($_SESSION['apart']=="true"){ ?>
                <div class="alert alert-success alert-dismissable msAlert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>¡Message!</strong> El producto se a apartado con exito espere el ms para seguir con el proceso.
                </div>
        <?php }
        
        }?>

    

    
    <!--div class="alert alert-warning alert-dismissable msAlert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Cuidado!</strong> Es muy importante que leas este mensaje de alerta.
    </div-->


    <?php
        require RUTA_APP.'/views/pages/viewsProduct/viewProductForUser.php';  //print_r($data); 
    ?>
    
    




    <!--view form apart product-->   <!--view form apart product-->   <!--view form apart product-->
    <!--view form apart product-->   <!--view form apart product-->   <!--view form apart product-->

<div class="modal js-ModalUpdateApart">
        <div class="bodyModal contFormModal">
            <form action="<?= RUTA_URL;?>/ProductController/productUser" method="POST" class="formModal mApartarProducto">
                <div class="dataP">
                    <label id="js-inpNomPro" class="lblNameProductd"></label>
                    <h4 id="js-nomP" class="lblNameProduct"><h4>
                    <!--input type="text" name="nameProduct" class="js-inpNomPro"/-->
                </div>  
                <input type="hidden" name="idUser" value="<?php echo $_SESSION['datos']["idUser"]; ?>"/>
                <input type="hidden" name="codPro" id="cBarra" value=""/>  
                
                <img  src="" class="imgProductOption" id="imgProductA" >

                <div class="line line2"></div>
                <div class="contDispPrice">
                    <label id="js-price2"></label>
                    <label id="js-available2"></label>
                </div>
               
                    <label class="js-tProduct"></label>
                <div class="dataP cantApartar">
                        <label for="lang">total a Apartar</label>
                            <select name="cantProduct" id="langd" width="100px" height="170px" class="selectTotal js-CantidadP">
                            
                            <?php
                            $total = 5;
                                for ($i=1; $i <= $total ; $i++) { 
                                    # code...
                            ?>
                            <option value="<?php echo $i; ?> " class="" id="js-cantAp5"> <?php echo $i; ?>  </option>
                        <?php
                            }
                        ?>
                        </select>

                       
                </div>
                
                <div class="dataP contBtnAddP contBtnModal">
                    <input type="submit" value="Agregar" class="btn btn-success" />
                    <label class="btn btn-danger js-btnCanProApart" unset>Cancel</label>
                </div>
            </form>
        </div>
    </div>





<?php 
    if(isset($_SESSION['apart'])){
        $_SESSION['apart'] = "false";
    }
    
    $_SESSION['Search'] = 2;

    //require RUTA_APP.'/views/pages/viewsProduct/crudProduct.php';  //print_r($data); 

   
    require RUTA_APP.'/views/inc/footer.php';  
    
?>
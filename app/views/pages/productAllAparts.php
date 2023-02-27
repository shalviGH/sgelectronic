<?php 
    require RUTA_APP.'/views/inc/header.php';  //print_r($data);

    if(isset($_SESSION['delete'])){
       if($_SESSION['delete'] == 'true'){?>
            <div class="alert alert-warning alert-dismissable msAlert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>¡Message!</strong> El usuario se ha eliminado con exito.
            </div>
    <?php   } 
    }
    if(isset($_SESSION['register']))
	{

		if($_SESSION['register'] == 'true' )
		{
?>
			<div class="alert alert-success alert-dismissable msAlert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Message!</strong> El registro se relizo con exito.
			</div>
<?php
		}
    }
    if(isset($_SESSION['update'])){
        if($_SESSION['update'] == 'true'){?>

        <div class="alert alert-success alert-dismissable msAlert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Message!</strong> Los datos se an actualizado con exito.
			</div>



       <?php }
    }
?>
    <div class="table-responsive " style="width:80%; margin: auto; margin-top:50px;">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name user</th>
                <th scope="col">Image</th>
                <th scope="col">Cantidad ap</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $num = 1;
                    foreach($data['productAllApart'] as $productAp) :
                ?>  
                <tr>
                    <th scope="row"><?php echo $num; ?></th>
                    <td><?php echo $productAp->name; ?></td>
                    <td><?php echo $productAp->image; ?></td>
                    <td><?php echo $productAp->amount;  $num = $num+1;?></td>
                    <th scope="row">

                        <button id=""  class="btn btn-primary btnTbl js-btnEditUser" style=" height:35px; width: 120px;"  
                                js-name = "<?php echo $productAp->name; ?>"
                                js-lastName = "<?php echo $productAp->lastName; ?>"
                                js-email = "<?php echo $productAp->email; ?>"
                                js-phone = "<?php echo $productAp->phone; ?>"
                                js-userName = "<?php echo $productAp->userName; ?>"
                                js-pass = "<?php echo $productAp->pass; ?>"
                                js-typeUser = "<?php echo $productAp->tipoUser; ?>"
                                js-idUser = "<?php echo $productAp->idUser; ?>"   >Editar</button>

                        <a href= "#" class="btn btn-warning btnTbl js-deleteProduct" idU="<?php echo $productAp->idUser; ?>" style=" height:35px; width: 120px; " id="">Eliminar</a>
                    </th>
                    
                </tr>
                <?php endforeach;  ?>

            </tbody>
        </table>
    </div>




    <!--Nodal for delete user --> <!--Nodal for delete user --> <!--Nodal for delete user --> 
    <!--Nodal for delete user --> <!--Nodal for delete user --> <!--Nodal for delete user --> 
    <div class="modal js-ModalDeleteUser">
        <div class="bodyModal">
            <form action="<?= RUTA_URL;?>/UserController/deleteUser" method="POST" class="formModal js-formDelete">
                    <label id="js-inpNomPro" class="modalTitle">¡ alert !</label>
                    <input type="hidden" class="js-idUser" name="idUser"  >
                    <label id="js-inpNomPro" class="msModal">Esta seguro de eliminar el usuario </label> 
                
                <div class="contBtnModal">
                    <button class="btn btn-success" >Aceptar</button>
                    <p href="" class="btn btn-primary btnCanceDeleteUser" unset>Cancelar</p>
                </div>
            </form>
        </div>
    </div>



<?php 
    $_SESSION['delete'] ="fgff";
    $_SESSION['register'] ="falsee";
    $_SESSION['update'] = "false";
    require RUTA_APP.'/views/inc/footer.php';  
?>


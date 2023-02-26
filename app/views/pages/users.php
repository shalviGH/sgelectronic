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
                <th scope="col">Name</th>
                <th scope="col">Last name</th>
                <th scope="col">User</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $num = 1;
                    foreach($data['users'] as $user) :
                ?>  
                <tr>
                    <th scope="row"><?php echo $num; ?></th>
                    <td><?php echo $user->name; ?></td>
                    <td><?php echo $user->lastName; ?></td>
                    <td><?php echo $user->userName;  $num = $num+1;?></td>
                    <th scope="row">

                        <button id=""  class="btn btn-primary btnTbl js-btnEditUser" style=" height:35px; width: 120px;"  
                                js-name = "<?php echo $user->name; ?>"
                                js-lastName = "<?php echo $user->lastName; ?>"
                                js-email = "<?php echo $user->email; ?>"
                                js-phone = "<?php echo $user->phone; ?>"
                                js-userName = "<?php echo $user->userName; ?>"
                                js-pass = "<?php echo $user->pass; ?>"
                                js-typeUser = "<?php echo $user->tipoUser; ?>"
                                js-idUser = "<?php echo $user->idUser; ?>"   >Editar</button>

                        <a href= "#" class="btn btn-warning btnTbl js-deleteProduct" idU="<?php echo $user->idUser; ?>" style=" height:35px; width: 120px; " id="">Eliminar</a>
                    </th>
                    
                </tr>
                <?php endforeach;  ?>

            </tbody>
        </table>
    </div>






        <div class="text-center">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" id="js-btnAddUser" data-target="#modalRegisterForm">Launch
            Modal Register Form</a>
        </div>


        <div class="modal js-ModalAddUser">
        <div class="bodyModal">
            
            <form action="<?= RUTA_URL;?>/UserController/addUserAd" method="POST" enctype="multipart/form-data" class="formModal js-formUser">
                <label class="js-titleModalUser">Agregar usuario</label>
                
                <div class="dataP">
                    <label>Nombre:</label>
                    <input id="js-name" type="text" name="name" required />
                </div>
                <div class="dataP">
                    <label>Last Name:</label>
                    <input type="text" id="js-lastName" name="lastName" required/>
                </div>
                <div class="dataP">
                    <label>Email:</label>
                    <input type="text" id="js-email" name="email" required/>
                </div>
                <div class="dataP">   
                    <label>Phone:</label>
                    <input type="text" id="js-phone" name="phone" required/>
                </div>
                <div class="dataP">
                    <label>UserName:</label>
                    <input type="text" id="js-userName" name="userName" required />
                </div>
                <div class="dataP">
                    <label>Pasword:</label>
                    <input type="text" id="js-pass" name="password" required />
                    <input type="text" id="js-idUser" name="idUser" required />
                </div>
                <div class="dataP">
                    <label>Tipo Usuario</label>
                    <select name="typeUser">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </div>
               
                <div class="dataP contBtnModal">
                    <input type="submit" value="Send" class="btn btn-success js-btnModalUser"/>
                    <a class="btn btn-danger js-btnCancelAddUs" unset()>Cancel</a>
                </div>

                
            </form>
        </div>
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
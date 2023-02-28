<?php 
    require RUTA_APP.'/views/inc/header.php';  //print_r($data);

       //redirection('/Paginas/index')

   if($_SESSION['datos']["tipoUser"] != 1){
        redirection('/Paginas/logOut');

   }



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

    <!--TABLE FOR SHOW DATA FOR USER IN THE VIEW ADMIN---><!--TABLE FOR SHOW DATA FOR USER IN THE VIEW ADMIN---><!--TABLE FOR SHOW DATA FOR USER IN THE VIEW ADMIN--->
    <!--TABLE FOR SHOW DATA FOR USER IN THE VIEW ADMIN---><!--TABLE FOR SHOW DATA FOR USER IN THE VIEW ADMIN---><!--TABLE FOR SHOW DATA FOR USER IN THE VIEW ADMIN--->

    <div class="text-center" style="margin-top:20px;">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" id="js-btnAddUser" data-target="#modalRegisterForm">Add new user</a>
    </div>
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



        <!--::::::::::::::Modal for add new user Modal for add new user Modal for add new user:::::::::::::::::::-->
        <!--::::::::::::::Modal for add new user Modal for add new user Modal for add new user:::::::::::::::::::-->
        <!--::::::::::::::Modal for add new user Modal for add new user Modal for add new user:::::::::::::::::::-->
        <!--::::::::::::::Modal for add new user Modal for add new user Modal for add new user:::::::::::::::::::-->

        <div class="modal js-ModalAddUser">
        <div class="bodyModal">
            
        <div class="contFormRegister">

            <form action="<?= RUTA_URL;?>/UserController/addUserAd" method="POST" enctype="multipart/form-data" class="formLogin formRegister js-formUser">

                <div class="iconClose js-bacloseMoAddus"> <p>x</p> </div>	
                    <div class="contDataForm1 contDataFormRegister">
                        <div class="contInpRegister c2btnRegister3 titleFormAddUser">
                            <!--label>Nombre:</label-->
                            <label class="lblTitleRegister js-titleFormUser">Registrar nuevo usuario</label>
                        </div>

                        <div class="contInpRegister c2btnRegister contInpRegUs">
                            <!--label>Nombre:</label-->
                            <input class="inpRegister inputRegUser inputRegUserA" type="text" id="js-name" name="name"required placeholder="Name" required
                            oninput = "this.value = this.value.replace(/[^a-zA-Z ]/,'')" />

                            <input class="inpRegister inputRegUserA" type="text" id="js-lastName" name="lastName" required placeholder="Last Name" required
                            oninput = "this.value = this.value.replace(/[^a-zA-Z ]/,'')" />
                        </div>
                        <div class="contInpRegister c2btnRegister contInpRegUs">
                            <!--label>Nombre:</label-->
                            <input class="inpRegister inputRegUser inputRegUserA" type="text" id="js-email" name="email"required placeholder="Email" required
                            oninput = "this.value = this.value.replace(/[^a-zA-Z0-9.@_]/,'')" />

                            <input class="inpRegister inputRegUserA" type="text" name="phone"  id="js-phone" required placeholder="Phone" required
                            oninput = "this.value = this.value.replace(/[^0-9]/,'')" />
                        </div>
                        <div class="contInpRegister c2btnRegister contInpRegUs">
                            <!--label>Nombre:</label-->
                            <input class="inpRegister inputRegUser inputRegUserA" type="text"  id="js-userName" name="userName" required placeholder="Username" required
                            oninput = "this.value = this.value.replace(/[^a-zA-Z0-9.@_]/,'')" />
                            
                            <a class="inpRegister inputRegUserA js-editPass" >Clic aqui para Editar Contraseña</a>

                            <input class="inpRegister inputRegUserA js-inpPass" type="hidden" name="password"   id="jws-pass" required placeholder="Nueva contraseña"
                            oninput = "this.value = this.value.replace(/[^a-zA-Z0-9.@_]/,'')" />

                            <input class="" type="hidden" name="idUser"  id="js-idUser"/>
                        </div>

                        <div class="contInpRegister c2btnRegister contInpRegUs">
                            <select name="typeUser" class="inpRegister inputRegUserA" id="js-tipoUser">
                                <option value="1" selected>Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>

                        <div class="contInpRegister contBtnSaveReg">
                            <input type="submit" value="Guardar" class="btnRegisterEnter btnSaveData"/>
                            <!--i class="btn btn-danger js-btnCancel">Cancel</i-->
                        </div>

                    </div>
                </form>
            </div>
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
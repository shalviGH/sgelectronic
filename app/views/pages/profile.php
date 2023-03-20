<?php require RUTA_APP.'/views/inc/header.php'; 
     //require RUTA_APP.'/controllers/Users.php';
     
    // $user = new Users;
     //$user->getProfile()
?>


<!-- diseños del contenedor del perfil del usuario-->
<div class="contDataProfile">
    <div class="dataProfile contImgProfile">
        <img src="<?php echo RUTA_IMG?>/imgProfile.png" alt="" class="imgProfile js-imgProfile">
    </div>
    <div class="dataProfile dataProfile2">
        <!--p class="dato js-IUser"><?php echo $data['nameU']; ?></p>
        <p class="area js-IUser">Back-end Developer</p>
        <p class="dataDescription js-IUser">sodales accumsan ligula. aenean sed diam tritique, fermentum mi nec, ornare arcu</p>
        <button class="btnProfile btnProfile-js">View Profile</button-->

        <form action="<?= RUTA_URL;?>/UserController/updateUser/<?php echo $data['idUser']; ?>/" method="POST"  class="formProfile-js1 contDataProfile1">
            <p class="area pUserInfo" >User information</p>
           
            <div class="contDataUs2">
                <div class="contInptProfile">
                    <!--label>Nombre:</label-->
                    <div class="contLblInptProfile">
                        <label>Name</label>  
                        <input id="js-inpProfile" value=" <?php echo $data['nameU']; ?>" class="inpRegister inputProfile" 
                        oninput = "this.value = this.value.replace(/[^a-zA-Z ]/,'')" placeholher="user" name="nameU" required
                     >

                    </div> 

                    <div class="contLblInptProfile">
                        <label>Last Name</label>  
                        <input class="inpRegister inputProfile" id="js-inpProfile1" value=" <?php echo $data['lastName'];  ?>" 
                            oninput = "this.value = this.value.replace(/[^a-zA-Z ]/,'')" name="lastName" required
                        />
                    </div> 
                </div>

                <input type="hidden"  value=" <?php echo $data['idUser']; ?>"    placeholher="user"  name="idU" required>

                <div class="contInptProfile">
                    <!--label>Nombre:</label-->
                    <div class="contLblInptProfile">
                        <label>Phone</label>  
                        <input id="js-inpProfile" value="<?php echo $data['phone']; ?>" class="inpRegister inputProfile" 
                        oninput = "this.value = this.value.replace(/[^0-9 ]/,'')" name="phone" minlength="10" maxlength="10" size="10" required />
                    </div> 

                    <div class="contLblInptProfile">
                        <label>UserName</label>  
                        <input class="inpRegister inputProfile" id="js-inpProfile4" max-length="10" value="<?php echo $data['userName']; ?>" 
                        oninput = "this.value = this.value.replace(/[^a-zA-Z@-_.]/,'')" placeholher="pass" name="userName" required
                        />
                    </div> 
                </div>



                </div>    


                <div class="dataPro"  > 

                    <a id="js-opChangePass">Cambiar contraseña</a>
                    <div class ="contUserInfo " id="js-contPass">
                        <label>Password</label>   
                        <input  class="inpRegister inputProfile" type="password" id="js-inpProfileP" placeholder="Ingrese una nueva Contraseña" name = "pass" >
                    </div>
                </div>

                <div class="contBtnOptioProfile">
                    <button  type="submit"  class ="btn btn-success js-btnUpdateInfoU">Guardar</button>
                    <a href="<?= RUTA_URL;?>/Paginas/index" class ="btn btn-primary btnCancel-js">Cancelar</a>
                </div>

            </div>        
        </form>
    </div>
    
    

   
</div>










<?php require RUTA_APP.'/views/inc/footer.php';  ?>

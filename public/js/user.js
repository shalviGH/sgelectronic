
$(document).ready(function(){

    $('.js-ModalDeleteUser').hide();
    $('.js-ModalAddUser').hide();

    $('#js-btnAddUser').on('click', function(){
        $('.js-ModalAddUser').show();
        $('.js-editPass').hide();
        $('.js-inpPass').attr('type', 'password');
        $('.js-inpPass').attr('placeholder', 'password');

         //cambiamos el titulo del modal
         $('.js-titleModalUser').text('Agregar nuevo suario');
         //cambiamos el atributo para editar al usuario
         $('.js-formUser').attr('action',rutaUrl + '/userController/addUserAd/');
         //cambiamos el texto del boton para editar al usuario
         $('.js-btnModalUser').val('Guardar');


    });

    $('.js-bacloseMoAddus').on('click', function(){
        //limpiamos todo los campos del formulario	
        $(".js-formUser")[0].reset();
        $('.js-ModalAddUser').hide(8);

    });


    $('.js-btnUpdateUser').on('click', function(){
        $('.js-modalAddUser').show();

        $('.js-titleFormUser').text("Editar datos del usurio");
    });


    //code for modal  delete user
    $('.js-BntCancelDeleteUser').on('click',function(){
        $('.js-modalDeleteUser').hide();
    });


    /* !funtion for delete user */
    $('.js-deleteProduct').on('click', function(){
       $('.js-ModalDeleteUser').show();
        var id = $(this).attr('idU');

        //alert(id);

        $('.js-idUser').val(id);

    });

    $('.btnCanceDeleteUser').on('click', function(){
        $('.js-ModalDeleteUser').hide();
    });



    /*Funtion for update user */
    $('.js-btnEditUser').on('click', function(){
        
        $('.js-editPass').show();
        $('.js-inpPass').attr('type', 'hidden');
        $('.js-inpPass').attr('placeholder', 'Nueva contraseña');
        
        const name = $(this).attr('js-name');
        const lastName = $(this).attr('js-lastName');
        const email = $(this).attr('js-email');
        const phone = $(this).attr('js-phone');
        const userName = $(this).attr('js-userName');
       // const pass = $(this).attr('js-pass');
        const tipoUser= $(this).attr('js-typeUser');
        const idUser = $(this).attr('js-idUser');

        //abrimos el modal para actualizar el usuario
        $('.js-ModalAddUser').show();
        //cambiamos el titulo del modal
        $('.js-titleFormUser').text('Actualizar usuario');
        //cambiamos el atributo para editar al usuario
        $('.js-formUser').attr('action',rutaUrl + '/userController/updateUserAd/');
        //cambiamos el texto del boton para editar al usuario
        $('.js-btnModalUser').val('Guardar cambios');

        $('#js-name').val(name);
        $('#js-lastName').val(lastName);
        $('#js-email').val(email);
        $('#js-phone').val(phone);
        $('#js-userName').val(userName);
       // $('#js-pass').val(pass);
        //$('#js-tipoUser').val(tipoUser);
        if(tipoUser == 1){
            $('#js-admin').attr('selected', true);
            $('#js-admin').attr('selected', false);
        }
        if(tipoUser == 2){
            $('#js-admin').attr('selected', false);
            $('#js-user').attr('selected', true);
        }
        //$('#js-admin').attr('selected', false);
        $('#js-idUser').val(idUser);
        
    });


    //ocultamos el contenedor del password
    $('#js-contPass').hide();
    /*Function for edit password */
    $('#js-opChangePass').on('click', function(){
       /* $('.js-editPass').hide();
        $('.js-inpPass').attr('type', 'password');*/
        $('#js-contPass').show();
        //alert("khcds");

    });




    /*Function  */


    
    

    
});
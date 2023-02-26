
$(document).ready(function(){

    $('.js-ModalDeleteUser').hide();
    $('.js-ModalAddUser').hide();

    $('#js-btnAddUser').on('click', function(){
        $('.js-ModalAddUser').show();

         //cambiamos el titulo del modal
         $('.js-titleModalUser').text('Agregar nuevo suario');
         //cambiamos el atributo para editar al usuario
         $('.js-formUser').attr('action',rutaUrl + '/userController/addUserAd/');
         //cambiamos el texto del boton para editar al usuario
         $('.js-btnModalUser').val('Guardar');


    });

    $('.js-btnCancelAddUs').on('click', function(){
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
        
        const name = $(this).attr('js-name');
        const lastName = $(this).attr('js-lastName');
        const email = $(this).attr('js-email');
        const phone = $(this).attr('js-phone');
        const userName = $(this).attr('js-userName');
        const pass = $(this).attr('js-pass');
        const tipoUser= $(this).attr('js-tipoUser');
        const idUser = $(this).attr('js-idUser');

        //abrimos el modal para actualizar el usuario
        $('.js-ModalAddUser').show();
        //cambiamos el titulo del modal
        $('.js-titleModalUser').text('Actualizar usuario');
        //cambiamos el atributo para editar al usuario
        $('.js-formUser').attr('action',rutaUrl + '/userController/updateUserAd/');
        //cambiamos el texto del boton para editar al usuario
        $('.js-btnModalUser').val('Guardar cambios');

        $('#js-name').val(name);
        $('#js-lastName').val(lastName);
        $('#js-email').val(email);
        $('#js-phone').val(phone);
        $('#js-userName').val(userName);
        $('#js-pass').val(pass);
        $('#js-tipoUser').val(tipoUser);
        $('#js-idUser').val(idUser);
        
    });




    /*Function  */


    
    

    
});

$(document).ready(function(){

    $('.js-ModalDeleteUser').hide();
    $('.js-ModalAddUser').hide();

    $('#js-btnAddUser').on('click', function(){
        $('.js-ModalAddUser').show();
    });

    $('.js-btnCancelAddUs').on('click', function(){
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




    /*Function  */


    
    

    
});
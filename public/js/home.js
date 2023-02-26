$(document).ready(function(){

    $('.js-imgLoginForOpenLog').on('click', function(){
        //$('.js-ModalLogin').show();
        location.href = rutaUrl + "/Paginas/login/";
       // $(location).attr('href',rutaUrl + "/productController/searchProduct/"+$category);
    });

    /*Function for back in view login */
    $('.js-back').on('click', function(){

        location.href = rutaUrl + "/Paginas/login/";
       //$(location).attr('href',rutaUrl + "/productController/searchProduct/"+$category);
    });

    /* */

    $('.js-register').on('click', function(){

        location.href = rutaUrl + "/Paginas/register/";
       //$(location).attr('href',rutaUrl + "/productController/searchProduct/"+$category);
    });

    


});
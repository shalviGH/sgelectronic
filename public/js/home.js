$(document).ready(function(){

    $('.js-imgLoginForOpenLog').on('click', function(){
        //$('.js-ModalLogin').show();
        location.href = rutaUrl + "/Paginas/login/";
       // $(location).attr('href',rutaUrl + "/productController/searchProduct/"+$category);
    });

    
    $('.js-back').on('click', function(){

        location.href = rutaUrl + "/Paginas/index/";
       //$(location).attr('href',rutaUrl + "/productController/searchProduct/"+$category);
    });

    


});
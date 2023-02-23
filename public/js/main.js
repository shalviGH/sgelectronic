$(document).ready(function() {


	$('.js-btnUpdateInfoU').attr('disabled', true);
	/*$('#js-inpProfile2').attr('disabled', false);
	$('#js-inpProfile5').attr('disabled', false);*/
	
	if(viewPage == 'Home'){
		//alert('la vista es '+viewPage);
		$('.js-btnHome').addClass('btnMainSelected');
		//alert('la vista es '+ viewPage); 

	}
	else if(viewPage == 'Profile') 
	{ 
		$('.js-btnProfile').addClass('btnMainSelected');
		//alert('la vista es '+ viewPage); 
	}
	else if (viewPage == 'Product') 
	{ 
		$('.js-btnProduct').addClass('btnMainSelected');
		//alert('la vista es '+viewPage); 
	}
	else if (viewPage == 'ProIndex' && viewPage2 == 'pro') 
	{ 
		//$('.js-btnLog').addClass('btnMainSelected');
		$('.js-btnProductM').addClass('btnMainSelected');

	}
	else if(viewPage2 == 'ProIndex2' && viewPage == 'ProIndex') 
	{ 
		$('.btnLog').addClass('btnMainSelected');
		
	}
	else if (viewPage == 'ProIndex' && viewPage2 == 'about') {
		$('.js-btnAbout').addClass('btnMainSelected');
	}
	else if (viewPage == 'ProIndex' && viewPage2 == 'HomeIndex') {
		$('.js-btnHome').addClass('btnMainSelected');
	}

	$('.optionMain').hover(function() {
		$(this).removeClass('btnMainSelected');
	}).on( "mouseleave", function() {
			//var clas = $('.optionMain').attr('class');
		if(viewPage2 == 'HomeIndex'){
			$('.js-btnHome').addClass('btnMainSelected');
		}
		if(viewPage2 == 'ProIndex2'){
			$('.btnLog').addClass('btnMainSelected');
		}
		if(viewPage2 == 'pro'){
			$('.js-btnProductM').addClass('btnMainSelected');
		}
		if(viewPage2 == 'about'){
			$('.js-btnAbout').addClass('btnMainSelected');
		}
		//$(this).addClass('btnMainSelected');
	});

	


	$('.js-btnLogin').addClass('btnFormSelected');
	$('.js-formRegister').hide();

	$('.js-btnLogin').on("click", function()
	{
		$('.js-formLogin').show();
		$('.js-formRegister').hide();
		$('.js-btnLogin').addClass('btnFormSelected');
		$('.js-btnRegister').removeClass('btnFormSelected')
	});

	$('.js-btnRegister').on("click", function()
	{
		$('.js-btnRegister').addClass('btnFormSelected');
		$('.js-btnLogin').removeClass('btnFormSelected');
		$('.js-formLogin').hide();
		$('.js-formRegister').show();
	});

	var display;
	$('.js-listBtn').click(function()
	{
		$('.js-listBtn').css('color','white')
		$('.js-optionList').addClass('optionList');
		$('.js-listBtn').css('text-decoration', 'none');
		if($('.js-optionList').each(function(){
			displaying = $(this).css("display");
			if (displaying == 'flex') {
				$(this).fadeOut('slow', function(){
					$(this).css("display","none")
					$('.js-listBtn').css('color','white');
					$('.js-listBtn').css('text-decoration', 'none');
				});
				
			}else{
				$(this).fadeIn('slow', function() {
					$(this).css("display", "flex");
					$('.js-listBtn').css('color','white');
					$('.js-listBtn').css('text-decoration', 'none');
				})
			}
		}));
		
		
	});

	$('.js-listBtn').on('click',function()
	{
		//alert('prove button');
		if(display == 'flex'){
			//$('.js-optionList').css("display","none");
			alert(dis);
		}
		
		
	});


	/*FUnction for update product--->>>>>>>>> *//*FUnction for update product--->>>>>>>>> */
	/*FUnction for update product--->>>>>>>>> *//*FUnction for update product--->>>>>>>>> */
	/*FUnction for update product--->>>>>>>>> *//*FUnction for update product--->>>>>>>>> */
	$('.btnCancel-js').on('click', function(){
		//alert("Prove button");
		//$(this).removeClass('btn-primary')
		var textBtn = $(this).text();

		if(textBtn == "Cancelar"){
			$(this).text('Editar info');
			$(this).removeClass('btn-danger');
			$(this).addClass('btn-primary');
			$('#js-inpProfilePh').attr('disabled', true);
			$('#js-inpProfileU').attr('disabled', true);
			$('#js-inpProfileP').attr('disabled', true);

			$('.js-btnUpdateInfoU').attr('disabled', true);
		}else{

			$(this).text('Cancelar');
			$(this).removeClass('btn-primary');
			$(this).addClass('btn-danger');
		
			$('#js-inpProfilePh').removeAttr('disabled');
			$('#js-inpProfileU').removeAttr('disabled');
			$('#js-inpProfileP').removeAttr('disabled');
			$('.js-btnUpdateInfoU').attr('disabled', false);
		}

		//alert(textBtn);

	});


	$('.js-btnShowMain').click(function()
	{

		//$('.js-conlistBtnMain').show();
		/*$('.js-listBtn').css('color','white')
		$('.js-optionList').addClass('optionList');
		$('.js-listBtn').css('text-decoration', 'none');*/
		
		if($('.js-conlistBtnMain').each(function(){
			displaying = $(this).css("display");
			if (displaying == 'flex') {
				$(this).fadeOut('slow', function(){
					$(this).css("display","none")
					/*$('.js-listBtn').css('color','white');*/
					/*$('.js-listBtn').css('text-decoration', 'none');*/
				});
				
			}else{
				$(this).fadeIn('slow', function() {
					$(this).css("display", "flex");
					/*$('.js-listBtn').css('color','white');*/
					/*$('.js-listBtn').css('text-decoration', 'none');*/
				})
			}
		}));
		
		
	});













});

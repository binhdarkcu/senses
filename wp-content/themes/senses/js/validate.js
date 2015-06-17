$(document).ready(function() {
	$('#p_files').on( 'change', function() {
	   myfile= $( this ).val();
	   var filename = $(this)[0].files[0].name;
	   var ext = myfile.split('.').pop();
	   if(ext=="txt" || ext=="rtf" || ext=="pdf" || ext=="docx" || ext=="doc"){
			$('.fileUpload').removeClass('error');
		   $('.file_message').html('Your CV: '+filename).removeClass('error');
	   } else{
		   $('.file_message').addClass('error').html('Your file must be in Word (.doc or .docx), Text (.txt), Rich Text (.rtf) or PDF (.pdf) format');
	   }
	});
	jQuery.validator.addMethod('selectcheck', function (value) {
        return (value != '0');
    }, "");
	$("#contactFormSubmit").validate({
		rules: {
			'u_name': { 
				required: true
			},
			'u_firstname': { 
				required: true
			},
			'u_email': { 
				required: true,
				email: true
			},
			'u_phone': { 
				required: true,
				number: true
			},
			'u_gender': {
				selectcheck: true
			},
			'u_birthday': {
				required: true
			},
			'u_postalcode': {
				required: true,
				number: true
			},
			'u_country': {
				selectcheck: true
			},
			'p_files': {
				required: true,
			}
		},
		errorPlacement: function(error, element){},
        highlight: function(element) {
            if(jQuery(element).is(':file'))
			{
				var name = jQuery(element).attr('name');
				jQuery('input[name='+name+']').parent().addClass('error');
			}else{
				jQuery(element).addClass('error');
			}
        },
        unhighlight: function(element, errorClass, validClass) {
            jQuery(element).removeClass(errorClass).addClass(validClass); // remove error class from elements/add valid class
            var name = jQuery(element).attr('name');
            jQuery('input[name='+name+']').parent().removeClass('error');
        },
		submitHandler: function(form) {
			
			//form.submit();
		},
	});
	$("#contactFormSubmit").on('submit',(function(e){
		$form = $(this);
		$u_name = $form.find('input[name=u_name]').val();
		$u_firstname = $form.find('input[name=u_firstname]').val();
		$u_email = $form.find('input[name=u_email]').val();
		$u_phone = $form.find('input[name=u_phone]').val();
		$u_gender = $form.find('select[name=u_gender]').val();
		$u_birthday = $form.find('input[name=u_birthday]').val();
		$u_postalcode = $form.find('input[name=u_postalcode]').val();
		$u_country = $form.find('select[name=u_country]').val();
		$p_files = $form.find('input[name=p_files]').val();
		$.ajax({
			type : "post",
			url : $('.ajaxurl').val(),
			//data : {action: "user_contact_form", u_name : $u_name, u_firstname : $u_firstname, u_email : $u_email, u_phone : $u_phone, u_gender : $u_gender, u_birthday : $u_birthday, u_postalcode : $u_postalcode, u_country : $u_country, p_files : $p_files},
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(response) {
			console.log(response);
				if(response == 1){
					$('.file_message').html('Contact succesful!').removeClass('error');
				}
			}            
		});
	}));
});
$(document).ready(function(){


		$('#supp-form').validate({
	    rules: {
	       matricule: {
	        required: true
	       
	      },
		  
		 nom: {
	       
	        required: true
	      },
		  
		  prenom: {
				required: true
			
			},
			
		  
		  
	    },
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

}); // end document.ready
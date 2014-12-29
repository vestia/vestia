$(document).ready(function(){
	handleSignupForm();
	handleReviewForm();
});

// TODO - these should really be OO functions that align with our models...
// and ideally they are separated into specific files/modules...
// and this file becomes more or less a register for those things...
// feels like there is a library for this...

var baseURL = "http://localhost:8888/realco/public";

function handleReviewForm(){

	//show the form
	$('#bid-toggle').click(function(e){

		//TODO Need to ask PHP if the user is eligible (our rules) before showing the form
		e.preventDefault();

		$.ajax({
			type:"GET",
			url: baseURL+'/reviews/create',
		}).done(function(response){
			$('#bid-content').html(response);	
		}).fail(function(error){
			console.log(error);
			if(error.status == 401){
				//TODO - call the login module
				alert('You are not logged in');
			}
		});
	});


	//close the form
	$('#review-close').click(function(){
		form.slideUp();
		$('#review-toggle').show();
	});

	//submit the form
	$('#review-submit').click(function(e){
		e.preventDefault();
		var data = form.serialize();
		$.ajax({
			type: "POST",
			url: baseURL+'/reviews',
			data: data,
		}).done(function(response){

			//TODO Need to handle errors here....will respond with 401 if user isn't logged in
			alert(response);
			$('.review-container').html(response);
		});
		form.slideUp();
	});
}


// First test of the shade function - signup
function handleSignupForm(){

	var form = $('form.create-user');

	//show the form
	$('.signup').click(function(e){
		e.preventDefault();
		alert('init signup form');
		$.get(baseURL+'/users/create', function(data){
			$('#shade-content').html(data);
			$('#shade').modal({
				'backdrop': 'static',
			});
			submitSignupForm();
		});

	});
}


function submitSignupForm(){

	$(form).submit(function(e){

		//Prevent form from being submitted
   		e.preventDefault();

   		//Clear out some error messages
   		$('span.error').fadeOut('fast').html('');

   		//Store data from the form
		var newUser = form.serialize();
		console.log(newUser);

		//Create a request to the server
		$.ajax({
			type: "POST",
			url: baseURL+'/users',
			data: newUser,
			dataType: "json",
			success: function(response){

				//Handle any errors
				if(response.error == true){
					handleFormErrors(response.data);
				}

				//If all is well, redirect
				window.location.href = $.trim(baseURL+response.data);
			}
		});
	});
}

//Expects a JSON object - should be an instance of Laravel's message bag object
//
function handleFormErrors(messageBag){
	console.log(messageBag);

	//Loop through the error messages and put them in the right spot.
	$.each(messageBag, function(inputName, errorMessage){
		var inputMessageElement = $('.'+inputName+'.error');
		console.log(inputName,':', errorMessage[0]);
		inputMessageElement.html(errorMessage[0]).fadeIn('fastd ');
	});
}


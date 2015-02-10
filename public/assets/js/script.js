$(document).ready(function(){
	handleSignupForm();
	handleLoginForm();
	Review.init();
	handleProfileEdits()
});

// TODO - these should really be OO functions that align with our models...
// and ideally they are separated into specific files/modules...
// and this file becomes more or less a register for those things...
// feels like there is a library for this...

var baseURL = "http://localhost:8888/realco/public";


var Review = {

	init : function(){

		//show the bid form
		$('#bid-toggle').click(function(e){

			//TODO Need to ask PHP if the user is eligible (our rules) before showing the form
			e.preventDefault();

			var home_id = $(this).attr('data-home-id');

			$.ajax({
				type:"POST",
				data:"home_id="+home_id,
				url: baseURL+'/reviews/create/bid',
			}).done(function(response){
				//Populate the form
				$('#bid-content').html(response).fadeIn();
				//Change the button content
				$('#bid-toggle').attr('id','bid-submit').html('Submit Bid');
				
				//Setup our submit function
				Review.submitBid();

			}).fail(function(error){
				console.log(error);
				if(error.status == 401){
					//TODO - call the login module here
					alert('You are not logged in');
				}
			});

			//Unbind our click event so that we can re-attach with the new submit function
			$(this).unbind('click');
		});
	}, 

	submitBid : function(){

		//submit the bid
		$('#bid-submit').click(function(e){
			e.preventDefault();
			console.log('click captured');
			var data = $('#bid-form').serialize();
			console.log(data);
			$.ajax({
				type: "POST",
				url: baseURL+'/reviews',
				data: data,
			}).done(function(response){
				//TODO Need to handle errors here....will respond with 401 if user isn't logged in
				console.log(response);
				$('#bid-content').html(response);
				$('#bid-slider').slider('enable');

				//Change the button content
				$('#bid-submit').attr('id','project-submit').html('Submit Vote');

				//Setup our submit function
				Review.submitProject();

			}).fail(function(error){
				console.log('error submitting bid', error);
			});

			//Unbind our click event so that we can re-attach with the new submit function
			$(this).unbind('click');
		});
	},

	submitProject : function(){

		//Submit our project
		$('#project-submit').click(function(e){
			e.preventDefault();

			var review_id = $('#review_id').val();
			var data = $('#project-form').serialize();
			console.log(data);
			$.ajax({
				type: "PUT",
				url: baseURL+'/reviews/'+review_id,
				data: data,
			}).done(function(response){
				console.log(response);
				$('#bid-content').html(response);

				//Change the button content
				$('#bid-submit').attr('id','project-submit').html('Submit Vote');

			}).fail(function(error){
				console.log('error submitting project', error);
			});

			//Unbind our click event so that we can re-attach with the new submit function
			$(this).unbind('click');
		});
	}
}


// First test of the shade function - signup
function handleSignupForm(){

	//show the form
	$('.signup').click(function(e){
		e.preventDefault();
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

	var form = $('#create-new-user');

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

function handleLoginForm(){

	//show the form
	$('.login').click(function(e){
		e.preventDefault();
		$.get(baseURL+'/sessions/create', function(data){
			$('#shade-content').html(data);
			$('#shade').modal({
				'backdrop': 'static',
			});
			submitLoginForm();
		});
	});
}

function submitLoginForm(){

	var form = $('#create-new-session');

	$(form).submit(function(e){

		//Prevent form from being submitted
   		e.preventDefault();

   		//Clear out some error messages
   		$('span.error').fadeOut('fast').html('');

   		//Store data from the form
		var newSession = form.serialize();
		console.log(newSession);

		//Create a request to the server
		$.ajax({
			type: "POST",
			url: baseURL+'/sessions',
			data: newSession,
			dataType: "json",
			success: function(response){
				console.log(response);

				//Handle any errors
				if(response.error == true){
					console.log(response.data);
					handleFormErrors(response.data);
					exit;
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


function handleProfileEdits(){
	$('i.edit').click(function(){
		var section = $(this).data('section');
		alert(section);
	})
}


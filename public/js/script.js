$(document).ready(function(){
	handleReviewForm();
});

var baseURL = "http://localhost:8888/realco/public	";

function handleReviewForm(){
	var form = $('#review-form');

	//show the form
	$('#review-toggle').click(function(){
		form.slideDown('fast','swing');
		$(this).hide();
	});

	//closer the form
	$('#review-close').click(function(){
		form.slideUp();
		$('#review-toggle').show();
	})

	//submit the form
	$('#review-submit').click(function(){
		var data = form.serialize();
		$.ajax({
			type: "POST",
			url: baseURL+'/reviews',
			data: data,
		}).done(function(response){

			//Need to handle errors here....will respond with 401 if user isn't logged in
			alert(response);
			$('.review-container').html(response);
		});
		form.slideUp();
	});


}
$(document).ready(function() {

/////////////Show and Forms////////////////////////////////////
	$('#login').click(function(e) {
		e.preventDefault();
		$('#signupForm').css({
			display: 'none'
			
		});
		$('#loginFrom').css({
			display: 'block'
			
		});
	});

	$('#sign').click(function(e) {
		e.preventDefault();
		$('#loginFrom').css({
			display: 'none'
			
		});
		$('#signupForm').css({
			display: 'block'
			
		});
	});
////////////////////////////////////////////////////////////

$('#signFormMain').on('submit',function(e) {
	e.preventDefault();
	var email = $('#semail').val();
	var password = $('#spassword').val();
	$.ajax({
		url:'../ajaxLogin/includes/signUp.php',
		type:'POST',
		data:{email:email,password:password},
		success:function(data){
			
			$('#msg').html(data);
			$('#signFormMain')[0].reset();
			$('#signFormMain')[1].reset();
		}
	});

	
	
});

	$('#storyInput').keyup(function(event) {
		var input = $('#storyInput').val();
		
		$.ajax({
			url:'storyUpdate.php',
			type:'POST',
			data:{input:input},
			success:function(data){
				console.log(data);
			}
		})
	});
});
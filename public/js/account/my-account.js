$(document).ready(function(){
	$("#username").focus(function() {
		if ($(this).val() == 'Username or email')
			$(this).val('');
	});
	$("#username").blur(function() {
		if ($(this).val() == '')
			$(this).val('Username or email');
	});
	$("#password").focus(function() {
		if ($(this).val() == 'Password')
			$(this).val('');
	});
	$("#password").blur(function() {
		if ($(this).val() == '')
			$(this).val('Password');
	});
});
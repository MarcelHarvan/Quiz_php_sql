$(document).ready(function () {
	$('a.login-window').click(function () {
		var loginBox = $(this).attr('href');
		$(loginBox).fadeIn(300);
		var popMargTop = ($(loginBox).height() + 24) / 2;
		var popMargLeft = ($(loginBox).width() + 24) / 2;
		$(loginBox).css({
			'margin-top': -popMargTop,
			'margin-left': -popMargLeft
		});
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		return false;
	});
	$('a.close, #mask').live('click', function () {
		$('#mask , .login-popup').fadeOut(300, function () {
			$('#mask').remove();
		});
		return false;
	});
});

$(document).ready(function () {
	$('a.register-window').click(function () {
		var registerBox = $(this).attr('href');
		$(registerBox).fadeIn(300);
		var popRegMargTop = ($(registerBox).height() + 24) / 2;
		var popRegMargLeft = ($(registerBox).width() + 24) / 2;
		$(registerBox).css({
			'margin-top': -popRegMargTop,
			'margin-left': -popRegMargLeft
		});
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		return false;
	});
	$('a.close, #mask').live('click', function () {
		$('#mask , .register-popup').fadeOut(300, function () {
			$('#mask').remove();
		});
		return false;
	});
});


function sendMail() {
	var link = "mailto:c0671081@mylambton.ca";
	window.location.href = link;
}

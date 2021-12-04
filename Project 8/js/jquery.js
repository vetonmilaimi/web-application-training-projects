$(document).ready(function () {

	var btn = $('#goup-button');

	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});

	btn.on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: 0 }, '300');
	});
});

$("#name").on("blur", function() {
	if ($("#name").val() == "") {
		$("#name").addClass("empty-input");
	} else {
		$("#name").removeClass("empty-input");
	}
})

$("#message").on("blur", function() {
	if ($("#message").val() == "") {
		$("#message").addClass("empty-input");
		if ($("#name").val() == "") {
			$("#name").addClass("empty-input");
		}
	} else {
		$("#message").removeClass("empty-input");
	}
})

$("#datepicker").on("blur", function() {
	if ($("#datepicker").val() == "") {
		$("#datepicker").addClass("empty-input");
		if ($("#message").val() == "") {
			$("#message").addClass("empty-input");
		}
		if ($("#name").val() == "") {
				$("#name").addClass("empty-input");
		}
	} else {
		$("#datepicker").removeClass("empty-input");
	}
})
$("#name").on("blur", function() {
	if ($("#name").val() == "") {
		$("#name").addClass("empty-input");
	} else {
		$("#name").removeClass("empty-input");
	}
})

$("#email").on("blur", function() {
	if ($("#email").val() == "") {
		$("#email").addClass("empty-input");
		if ($("#name").val() == "") {
			$("#name").addClass("empty-input");
		}
	} else {
		$("#email").removeClass("empty-input");
	}
})

$("#message").on("blur", function() {
	if ($("#message").val() == "") {
		$("#message").addClass("empty-input");
        if($("#email").val() == "") {
            $("#email").addClass("empty-input");
        }
        if($("#name").val() == "") {
            $("#name").addClass("empty-input");
        } else {
            $("#name").removeClass("empty-input")
        }
	} else {
		$("#message").removeClass("empty-input");
	}
})
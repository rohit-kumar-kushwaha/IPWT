var btnUpload = $("#upload_file_sig"),
		btnOuter = $(".button_outer_sig");
	btnUpload.on("change", function(e){
		var ext = btnUpload.val().split('.').pop().toLowerCase();
		if($.inArray(ext, ['jpg','jpeg']) == -1) {
			this.value = "";
			$(".error_msg_sig").text("Please upload 'jpg' or 'jpeg' formate.");
		}
		else if(this.files[0].size/1024 < 10 || this.files[0].size/1024 > 100) {
			this.value = "";
			//  alert(this.files[0].size/1024);
			$(".error_msg_sig").text("Please upload between 10KB to 100KB.");
		}
		else {
			$(".error_msg_sig").text("");
			btnOuter.addClass("file_uploading_sig");
			setTimeout(function(){
				btnOuter.addClass("file_uploaded_sig");
			},3000);
			var uploadedFile = URL.createObjectURL(e.target.files[0]);
			setTimeout(function(){
				$("#uploaded_view_sig").append('<img src="'+uploadedFile+'" />').addClass("show");
			},3500);
		}
	});
	$(".file_remove_sig").on("click", function(e){
		$("#uploaded_view_sig").removeClass("show");
		$("#uploaded_view_sig").find("img").remove();
		btnOuter.removeClass("file_uploading_sig");
		btnOuter.removeClass("file_uploaded_sig");
	});


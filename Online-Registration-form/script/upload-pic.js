var btnUpload1 = $("#upload_file"),
	btnOuter1 = $(".button_outer");
	btnUpload1.on("change", function (e) {
		var ext1 = btnUpload1.val().split('.').pop().toLowerCase();
		if ($.inArray(ext1, ['jpg', 'jpeg']) == -1 ) {
			this.value = "";
			//  alert(this.files[0].size/1024);
			$(".error_msg").text("Please upload 'jpg' or 'jpeg' formate.");
		}
		else if(this.files[0].size/1024 > 500 || this.files[0].size/1024 < 30){
			this.value = "";
			// alert(this.files[0].size/1024);
			$(".error_msg").text("Please upload between 30KB to 500KB.");
		}
		else {
	
			$(".error_msg").text("");
			btnOuter1.addClass("file_uploading");
			setTimeout(function () {
				btnOuter1.addClass("file_uploaded");
			}, 3000);
			var uploadedFile1 = URL.createObjectURL(e.target.files[0]);
			setTimeout(function () {
				$("#uploaded_view").append('<img src="' + uploadedFile1 + '" />').addClass("show");
			}, 3500);
		}
	});


$(".file_remove").on("click", function (e) {
	$("#uploaded_view").removeClass("show");
	$("#uploaded_view").find("img").remove();
	btnOuter1.removeClass("file_uploading");
	btnOuter1.removeClass("file_uploaded");
});


function fun(objFileControl) {
	var myFile = objFileControl.value;
	var len = myFile.length;
	var size = objFileControl.files[0].size/1024 ;
	var ext = myFile.slice(len - 4, len)
  if(ext.toUpperCase() == ".PDF" && size <= 1024){
	 
    // alert("File uploaded is pdf "+size)
  }else{
	// myFile.value = "";
	objFileControl.value = "";
    alert("Only PDF are allowed and size less than 1 MB")
	// this.valu="";
	
  }
 
}

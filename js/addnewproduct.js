$(document).ready(function (e) {
	var rootUrl = 'http://localhost/work/api/public/';
	

	function readURL(input, selector) {

	    if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $(selector).attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}

	$("#product-image-1").change(function(){
	    readURL(this,'.product-image-1');
	});
	$("#product-image-2").change(function(){
	    readURL(this,'.product-image-2');
	});
	$("#product-image-3").change(function(){
	    readURL(this,'.product-image-3');
	});
	$("#product-image-4").change(function(){
	    readURL(this,'.product-image-4');
	});
	$("#product-image-5").change(function(){
	    readURL(this,'.product-image-5');
	});


	//on submit
	$( "form" ).submit(function( e ) {
		// get data
		var name = $("#product-name").val();
		var price = $("#product-price").val();
		var description = $("#product-description").val();
		var additionalInformation = $("#product-additional-information").val();
		var cod = $( "#product-cod" ).val();
		var material = $( "#product-material option:selected" ).text();
		var featured = $("#product-featured").val();
	
		//validate the data 
		/*TODO*/

		//validate images
		/*TODO*/
		e.preventDefault();
		console.log("root url is " + rootUrl);
		
		console.log("data : " + name + price + description + additionalInformation + cod + material 
			 + featured);

		//upload images first
		var imageData = new FormData();
		var data = $("#insert-product").serializeArray();
		
		var imageName = name;
		imageName = imageName.toLowerCase().replace(/ /g, '-');
		

	    $.each(data,function(key,input){
	        imageData.append(input.name,input.value);
	    })
		
		$.each($('#product-image-1')[0].files, function (i, file)
		{
		    var fname = imageName + "_1";
		    imageData.append(fname, file);
		});

		$.each($('#product-image-2')[0].files, function (i, file)
		{
		    var fname = imageName + "_2";
		    imageData.append(fname, file);
		});
		$.each($('#product-image-3')[0].files, function (i, file)
		{
		    var fname = imageName + "_3";
		    imageData.append(fname, file);
		});
		$.each($('#product-image-4')[0].files, function (i, file)
		{
		    var fname = imageName + "_4";
		    imageData.append(fname, file);
		});
		$.each($('#product-image-5')[0].files, function (i, file)
		{
		    var fname = imageName + "_5";
		    imageData.append(fname, file);
		});

		//imageData.append("product", JSON.stringify(data));
		console.log(imageData);
		//make the actual request
		$.ajax({
            type : "POST",
            url: rootUrl + "product/normal",
            //dataType : "json",
            data : imageData,
            contentType: false,
        	processData: false,
            success : function(result) {
                if (result["success"]) {
                	alert("Product Added");
                }
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
	});

});
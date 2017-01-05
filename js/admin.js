$(document).ready(function (e) {
	var rootUrl = 'http://localhost/work/api/public/';
	var color = [];
	var colorList = "";
	//adding color to color list
	$("#add-color").click(function(e) {
		e.preventDefault();
		var addedColor = $("#product-color").val();
		//var isOk  = /^#[0-9A-F]{6}$/i.test(addedColor);
		var isOk = /^#[0-9a-f]{3}(?:[0-9a-f]{3})?$/i.test(addedColor);
		if (isOk) {
			color.push(addedColor);
			colorList += '<li class="clearfix"><span style="background-color: '+addedColor+';"></span> &nbsp;&nbsp;&nbsp;'+ addedColor+'</li>';
			$(".color-list").html(colorList);
			$("#product-color").val('');
		}
	})
	var isOk  = /^#[0-9A-F]{6}$/i.test('#aabbcc');

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
	$("#product-dimention").change(function(){
	    readURL(this,'.product-dimention');
	});
	$("#product-customize").change(function(){
	    readURL(this,'.product-customize');
	});


	//on submit
	$( "form" ).submit(function( e ) {
		// get data
		var name = $("#product-name").val();
		var price = $("#product-price").val();
		var description = $("#product-description").val();
		var additionalInformation = $("#product-additional-information").val();
		var cod = $( "#product-cod option:selected" ).text();
		var material = $( "#product-material option:selected" ).text();
		var use = $( "#product-use option:selected" ).text();
		var fittingPlace = $( "#product-fitting-place option:selected" ).text();
		
		//validate the data 
		/*TODO*/

		//validate images
		/*TODO*/
		e.preventDefault();
		console.log("root url is " + rootUrl);
		
		console.log("data : " + name + price + description + additionalInformation + cod + material 
			+ use + fittingPlace);

		//upload images first
		var imageData = new FormData();
		var data = $("#insert-nameplate").serializeArray();
		
		var imageName= name;
		imageName = imageName.toLowerCase().replace(/ /g, '-');
		

	    $.each(data,function(key,input){
	        imageData.append(input.name,input.value);
	    });
		
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
		$.each($('#product-dimention')[0].files, function (i, file)
		{
		    var fname = imageName + "_4";
		    imageData.append(fname, file);
		});
		$.each($('#product-customize')[0].files, function (i, file)
		{
		    var fname = imageName + "_5";
		    imageData.append(fname, file);
		});

		//imageData.append("product", JSON.stringify(data));
		console.log(imageData);
		//make the actual request
		$.ajax({
            type : "POST",
            url: rootUrl + "product/new",
            //dataType : "json",
            data : imageData,
            contentType: false,
        	processData: false,
            success : function(result) {
                console.log(result);
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        })
	});

});
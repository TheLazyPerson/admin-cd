$(document).ready(function (e) {
	var rootUrl = 'http://localhost/work/api/public/';
  	var getUrlParameter = function getUrlParameter(sParam) {
	    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
	        sURLVariables = sPageURL.split('&'),
	        sParameterName,
	        i;

	    for (i = 0; i < sURLVariables.length; i++) {
	        sParameterName = sURLVariables[i].split('=');

	        if (sParameterName[0] === sParam) {
	            return sParameterName[1] === undefined ? true : sParameterName[1];
	        }
	    }
	};

	//do validation for id whether it is number  or not
	var id = getUrlParameter('id');


	function loadSubCategories(categoryid){
    	$.ajax({
	        url: rootUrl + "/category/"+categoryid,
	        dataType: "json",
	        success : function(result) {
	        	var categoryId;
	            var categoryName = "";
	            var data = result['subcategories'];
	            var html = "<option> --SELECT OPTION-- </option>";
	            $.each(data, function (key, value) {
	            	categoryId = data[key]['id'];
	                categoryName = data[key]['name'];
	                html+='<option value="'+categoryId+'">'+categoryName+'</option>';
	            });
	            $("#product-sub-category").html(html);
	        },
	        error: function(xhr, resp, text) {
	            console.log(xhr, resp, text);
	        }
	    });
    }
	
    $.when(

    	$.ajax({
	        url: rootUrl + "categories",
	        dataType: "json",
	        success : function(result) {
	        	var categoryId;
	            var categoryName = "";
	            var data = result['categories'];
	            var html = "<option> --SELECT OPTION-- </option>";
	            $.each(data, function (key, value) {
	            	categoryId = data[key]['id'];
	                categoryName = data[key]['name'];
	                html+='<option value="'+categoryId+'">'+categoryName+'</option>';
	            });
	            $("#product-category").html(html);

	        },
	        error: function(xhr, resp, text) {
	            console.log(xhr, resp, text);
	        }
	    }),
	    $.ajax({
	        url: rootUrl + "materials",
	        dataType: "json",
	        success : function(result) {
	        	var materialId;
	            var materialName = "";
	            var data = result['materials'];
	            var html = "<option> --SELECT OPTION-- </option>";
	            $.each(data, function (key, value) {
	            	materialId = data[key]['id'];
	                materialName = data[key]['name'];
	                html+='<option value="'+materialId+'">'+materialName+'</option>';
	            });
	            $("#product-material").html(html);

	        },
	        error: function(xhr, resp, text) {
	            console.log(xhr, resp, text);
	        }
	    }),
	    $("#product-category").change(function(){
	    	var categoryid = $(this).val();
	    	
	    	loadSubCategories(categoryid);
	    })
    	).then(
    		 $.ajax({
            
            url: rootUrl + "productnormal/" + id,
            dataType: "json",
            success : function(result) {
                
                var data = result['product'];

                productId = data['id'];
                productName = data['name'];
                productPrice = data['price'];
                productDescription = data['description'];
                productAddtionalInformation = data['additionalInformation'];
                productMaterial = data['material'];
                productLength = data['length'];
                productWidth = data['width'];
                productDepth = data['depth'];
                productWeight = data['weight'];
                productSubCategory = data['subcategory'];
                productCategory = data['category'];
                productNotes = data['notes'];

                productCod = data['cod'];
                productFeatured = data['featured'];
                productStatus = data['status'];
                    
                
                $('#product-name').val(productName);
                $('#product-price').val(productPrice);
                $('#product-description').val(productDescription);
                $('#product-additional-information').val(productAddtionalInformation);
                $('#product-cod').val(productCod);
                $('#product-length').val(productLength);
                $('#product-width').val(productWidth);
                $('#product-depth').val(productDepth);
                $('#product-weight').val(productWeight);
                $('#product-featured').val(productFeatured);
                $('#product-notes').val(productNotes);

                $("#product-category option").filter(function() {
				    return this.text == productCategory; 
				}).attr('selected', true);
				$.ajax({
			        url: rootUrl + "/category/"+$("#product-category").val(),
			        dataType: "json",
			        success : function(result) {
			        	var categoryId;
			            var categoryName = "";
			            var data = result['subcategories'];
			            var html = "<option> --SELECT OPTION-- </option>";
			            $.each(data, function (key, value) {
			            	categoryId = data[key]['id'];
			                categoryName = data[key]['name'];
			                html+='<option value="'+categoryId+'">'+categoryName+'</option>';
			            });
			            $("#product-sub-category").html(html);
			            $("#product-sub-category option").filter(function() {
						    return this.text == productSubCategory; 
						}).attr('selected', true)
			        },
			        error: function(xhr, resp, text) {
			            console.log(xhr, resp, text);
			        }
	
				});
				$("#product-material option").filter(function() {
				    return this.text == productMaterial; 
				}).attr('selected', true);
				
                var images = data['images'];
                $i = 1;
                $.each(images, function (key, value) {

                    var selector = ".product-image-"+$i;
                    $(selector).attr('src', rootUrl+value);
                    $i++;
                });
                
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        })

    	);

       

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


	$( "form" ).submit(function( e ) {
		
		var name = $("#product-name").val();
		var price = $("#product-price").val();
		var description = $("#product-description").val();
		var additionalInformation = $("#product-additional-information").val();
		var notes = $("#product-notes").val();
		var length = $("#product-length").val();
		var depth = $("#product-depth").val();
		var weight = $("#product-weight").val();
		var height = $("#product-height").val();
		var Category = $("#product-category").val();
		var subCategory = $("#product-sub-category").val();
		var cod = $( "#product-cod" ).val();
		var material = $( "#product-material").val();
		var featured = $("#product-featured").val();
	
		e.preventDefault();
		

		//upload images first
		var projectData = new FormData();
		
		var imageName = name;
		imageName = imageName.toLowerCase().replace(/ /g, '-');
		
		projectData.append("name",name);
		projectData.append("price",price);
		projectData.append("description",description);
		projectData.append("addtional_information",additionalInformation);
		projectData.append("notes",notes);
		projectData.append("length",length);
		projectData.append("depth",depth);
		projectData.append("height",height);
		projectData.append("weight",weight);
		projectData.append("category",Category);
		projectData.append("subcategory",subCategory);
		projectData.append("cod",cod);
	    projectData.append("material",material);
	    projectData.append("featured",featured);

		$.each($('#product-image-1')[0].files, function (i, file)
		{
		    var fname = "1";
		    projectData.append(fname, file);
		});

		$.each($('#product-image-2')[0].files, function (i, file)
		{
		    var fname = "2";
		    projectData.append(fname, file);
		});
		$.each($('#product-image-3')[0].files, function (i, file)
		{
		    var fname = "3";
		    projectData.append(fname, file);
		});
		$.each($('#product-image-4')[0].files, function (i, file)
		{
		    var fname = "4";
		    projectData.append(fname, file);
		});
		$.each($('#product-image-5')[0].files, function (i, file)
		{
		    var fname = "5";
		    projectData.append(fname, file);
		});

		
		
		//make the actual request
		$.ajax({
            type : "POST",
            url: rootUrl + "product/normal/update/"+id,
            dataType : "json",
            data : projectData,
            contentType: false,
        	processData: false,
            success : function(result) {
                if (result["success"]) {
                	alert("Product Updated");
                }
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
	});

});
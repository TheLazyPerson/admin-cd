$(document).ready(function (e) {
	var rootUrl = 'http://localhost/work/api/public/';
    var imageUrl = 'http://localhost/work/api/public/';
	var color = [];
	var colorList = "";
	var motifs = [];
	var patterns = [];
	var fonts = [];
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
    });

	 $.ajax({
            
        url: rootUrl + "fonts/list",
        dataType: "json",
        success : function(result) {
            var fontId = "";
            var fontName ="";
            var fontPath = "";
            //console.log(result);
            var data = result['fonts'];
            
            var html = "<option> --SELECT OPTION-- </option>";
            $.each(data, function (key, value) {
                fontId = data[key]['id'];
                fontName = data[key]['name'];
                fontPath = data[key]['filepath'];
               
               	html+='<option value="'+fontId+'">'+fontName+'</option>';
            });

            $("#product-fonts").html(html);
        },
        error: function(xhr, resp, text) {
            console.log(xhr, resp, text);
        }
    });

	  $("#add-font-button").click(function(e){
    	e.preventDefault();
    	var fontId = $("#product-fonts").val();
    	var fontName = $( "#product-fonts option:selected" ).text();
    	var idx = $.inArray(fontId, fonts);
    	if (idx == -1) {
		  fonts.push(fontId);
	    	var html ='<option value="'+fontId+'">'+fontName+'</option>';
	    	$("#product-selected-fonts").append(html);
		} 
    	
    });
    $("#product-category").change(function(){
    	var categoryid = $(this).val();
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

    });


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
    });

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
	});
	
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
		var maxCharacters = $("#product-max-characters").val();
		var priceAfterMaxCharacterForEachCharacter = $("#product-price-after-max-characters").val();
		var maxFontSize = $("#product-max-fontsize").val();
		var priceAfterMaxFontSizeForEachCharacter = $("#product-price-after-font-max").val();
		var length = $("#product-length").val();
		var depth = $("#product-depth").val();
		var weight = $("#product-weight").val();
		var height = $("#product-height").val();
		var category = $("#product-category").val();
		var subcategory = $("#product-sub-category").val();
		var description = $("#product-description").val();
		var additionalInformation = $("#product-additional-information").val();
		var notes = $("#product-notes").val();
		var cod = $( "#product-cod" ).val();
		var material = $( "#product-material" ).val();
		var trending = $( "#product-trending" ).val();
		var use = $( "#product-use option:selected" ).text();
		var letterType = $( "#product-letter-type" ).val();
		var fontEffect = $( "#product-font-effect" ).val();
		var fittingPlace = $( "#product-fitting-place option:selected" ).text();
		
		//validate the data 
		/*TODO*/

		//validate images
		/*TODO*/
		e.preventDefault();
		//upload images first
		var productData = new FormData();
		var data = $("#insert-nameplate").serializeArray();
		
		var imageName= name;
		imageName = imageName.toLowerCase().replace(/ /g, '-');
		
		
		productData.append("name", name);
		productData.append("description", description);
		productData.append("addtional_information", additionalInformation);
		productData.append("notes", notes);
		productData.append("per_char_charge",priceAfterMaxCharacterForEachCharacter);
		productData.append("max_characters",maxCharacters);
		productData.append("max_font_size",maxFontSize);
		productData.append("price_after_max_font_size",priceAfterMaxFontSizeForEachCharacter);
		productData.append("material",material);
		productData.append("category", category);
		productData.append("subcategory", subcategory);
		productData.append("cod", cod);
		productData.append("letter_type", letterType);
		productData.append("nameplate_used", use);
		productData.append("fitting_place",fittingPlace);
		productData.append("length",length);
		productData.append("depth",depth);
		productData.append("height",height);
		productData.append("weight",weight);
		productData.append("price", price);
		productData.append("trending", trending);
		productData.append("font_effect", fontEffect);
		productData.append("colors", JSON.stringify(color));
		productData.append("motifs", JSON.stringify(motifs));
		productData.append("patterns", JSON.stringify(patterns));
		productData.append("fonts", JSON.stringify(fonts));

		$.each($('#product-image-1')[0].files, function (i, file)
		{
		    var fname = "1";
		    productData.append(fname, file);
		});

		$.each($('#product-image-2')[0].files, function (i, file)
		{
		    var fname = "2";
		    productData.append(fname, file);
		});
		$.each($('#product-image-3')[0].files, function (i, file)
		{
		    var fname = "3";
		    productData.append(fname, file);
		});
		$.each($('#product-dimention')[0].files, function (i, file)
		{
		    var fname = "4";
		    productData.append(fname, file);
		});
		$.each($('#product-customize')[0].files, function (i, file)
		{
		    var fname = "5";
		    productData.append(fname, file);
		});

		//make the actual request
		$.ajax({
            type : "POST",
            url: rootUrl + "product/nameplate",
            //dataType : "json",
            data : productData,
            contentType: false,
        	processData: false,
            success : function(result) {
            	alert("Nameplate added");
                $("form")[0].reset();
                $("#image-1").attr('src','http://placehold.it/200x200');
                $("#image-2").attr('src','http://placehold.it/200x200');
                $("#image-3").attr('src','http://placehold.it/200x200');
                $("#image-4").attr('src','http://placehold.it/200x200');
                $("#image-5").attr('src','http://placehold.it/200x200');

            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
	});
	$('#myModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) 
		var modal = $(this)
		$.ajax({
	            
            url: rootUrl + "motifs",
            dataType: "json",
            success : function(result) {
                var html = "";
                var motifId = "";
                var motifName ="";
                var motifDescription = "";
                //console.log(result);
                var data = result['motifs'];
                
                $.each(data, function (key, value) {
                    motifId = data[key]['id'];
                    motifName = data[key]['name'];
                    motifDescription = data[key]['description'];
                    motifImagePath = data[key]['motif_path'];
                    html += '<div class="col-xs-12 col-sm-6 col-md-3"><div class="thumbnail"><img src="'+ imageUrl+motifImagePath+'" class="img-responsive"  alt=""><div class="caption"><h4>'+motifName+'</h4><p>'+ motifDescription+'</p><p><a href="#" class="btn btn-info select-motif" id="'+motifId+'"  role="button">Select </a> </p></div>  </div></div>';

                });
                modal.find("#motifs-data").html(html);
                $('.select-motif').click(function(e){
					e.preventDefault();
					if ($(this).hasClass("btn-danger") && $(this).text() == "selected") {
						$(this).removeClass(" btn-danger");
						$(this).text("select");
						var id = this.id;
						motifs = jQuery.grep(motifs, function(value) {
							  return value != id;
							});
					}else{
						motifs.push(this.id);
						$(this).addClass(" btn-danger");
						$(this).text("selected");
					}
				});  
               
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
	  });
	  $('#select-patterns').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		  var modal = $(this)
		  $.ajax({
		            
	            url: rootUrl + "patterns",
	            dataType: "json",
	            success : function(result) {
	                var html = "";
	                var patternId = "";
	                var patternName ="";
	                var patternImagePath = "";
	                //console.log(result);
	                var data = result['patterns'];
	                
	                $.each(data, function (key, value) {
	                    patternId = data[key]['id'];
	                    patternName = data[key]['name'];
	                    patternImagePath = data[key]['pattern_path'];
	                    html += '<div class="col-xs-12 col-sm-6 col-md-3"> <div class="thumbnail"> <img src="'+ imageUrl+patternImagePath+'" class="img-responsive" alt=""> <div class="caption"> <h4>'+patternName+'</h4> <p><a href="" class="btn btn-info select-pattern" id="'+patternId+'" role="button">Select </a> </p></div></div></div>';

	                   
	                });
	                modal.find("#patterns-data").html(html);
	                $('.select-pattern').click(function(e){

	                	e.preventDefault();
						if ($(this).hasClass("btn-danger") && $(this).text() == "selected") {
							$(this).removeClass(" btn-danger");
							$(this).text("select");
							var id = this.id;
							patterns = jQuery.grep(patterns, function(value) {
								return value != id;
							});
						}else{
							patterns.push(this.id);
							$(this).addClass(" btn-danger");
							$(this).text("selected");
						}
						e.preventDefault();
						patterns.push(this.id);
					}); 
	               
	            },
	            error: function(xhr, resp, text) {
	                console.log(xhr, resp, text);
	            }
	        });

		 
		 
		});
		
	
});

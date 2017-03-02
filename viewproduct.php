<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative Design </title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?php 

            require_once("includes/header.php");
        ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Product Details</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                   <div class="col-lg-12">
                        <div class="panel panel-default">
                          
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6 view-product">
                                        
                                            <div class="form-group">
                                                <p>Product Name</p>
                                                <p><strong class="product-name"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Price</p>
                                                <p><strong class="product-price"></strong></p>
                                                
                                            </div>
                                            <div class="form-group">
                                                <p>Description</p>
                                                <p><strong class="product-description"></strong></p>
                                            </div>

                                            <div class="form-group">
                                                <p>Additional Information</p>
                                                <p><strong class="product-additional-information"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Maximum Characters</p>
                                                <p><strong class="product-max-characters"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Price After Maximum Characters</p>
                                                <p><strong class="product-price-per-character"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Product Category</p>
                                                <p><strong class="product-category"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Letter Type</p>
                                                <p><strong class="product-letter-type"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Fitting Place</p>
                                                <p><strong class="product-fitting-place"></strong></p>
                                            </div>

                                            <div class="form-group">
                                                <p>Length</p>
                                                <p><strong class="product-length"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Height</p>
                                                <p><strong class="product-height"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Weight</p>
                                                <p><strong class="product-weight"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Cash On Delivery</p>
                                                <p><strong class="product-cod"></strong></p>
                                                
                                            </div>
                                            <div class="form-group">
                                                <p>Material Used</p>
                                                <p><strong class="product-material"></strong></p>
                                               
                                            </div>
                                            <div class="form-group">
                                                <p>Trending Product</p>
                                                <p><strong class="product-trending"></strong></p>
                                                
                                            </div>
                                           
                                            
                                        
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                       <h4>Product Images</h4>
                                        <div class="row">  
                                        <div class="col-lg-6">
                                            <label>Product Image 1</label>
                                            
                                            <br>
                                            <img class="img-responsive product-image-1" src="http://placehold.it/200x200" />

                                        </div>
                                        <div class="col-lg-6">
                                            <label>Product Image 2</label>
                                            
                                            <br>
                                            <img class="img-responsive product-image-2" src="http://placehold.it/200x200" />
                                        </div>
                                        </div>
                                        <br>
                                        <div class="row">  
                                        <div class="col-lg-6">
                                            <label>Product Image 3</label>
                                            
                                            <br>
                                            <img class="img-responsive product-image-3" src="http://placehold.it/200x200" />
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Product Image 4</label>
                                            
                                            <br>
                                            <img class="img-responsive product-image-4" src="http://placehold.it/200x200" />
                                        </div>
                                        </div>
                                        <br>
                                        <div class="row">  
                                            <div class="col-lg-6">
                                                <label>Product Image 5</label>
                                                
                                                <br>
                                                <img class="img-responsive  product-image-5" src="http://placehold.it/200x200" />
                                            </div>
                                        
                                        </div>
                                        
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
  
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
     <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        

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

        var rootUrl = 'http://localhost/work/api/public/';
        $.ajax({
            
            url: rootUrl + "product/nameplate/" + id,
            dataType: "json",
            success : function(result) {
                
                var data = result['product'];


                productId = data['id'];
                productName = data['name'];
                productDescription = data['description'];
                productAddtionalInformation = data['addtional_information'];
                productPriceAfterMaxCharacters = data['per_char_charge'];
                productMaxCharacter = data['max_characters'];
                productMaterial = data['material'];
                productCategory = data['category'];
                productCod = data['cod'];
                productLetterType = data['letter_type'];
                productFittingPlace = data['fitting_place'];
                productLength = data['length'];
                productHeight = data['height'];
                productWeight = data['weight'];
                productPrice = data['price'];
                productTrending = data['trending'];
                if (productCod == 1) { productCod = "Yes" }
                if (productCod == 0) { productCod = "No" }    
                if (productTrending == 1) { productTrending = "Yes" }    
                if (productTrending == 0) { productTrending = "No" }   
            
                $('.view-product .product-name').text(productName);
                $('.view-product .product-description').text(productDescription);
                $('.view-product .product-additional-information').text(productAddtionalInformation);
                $('.view-product .product-price-per-character').text(productPriceAfterMaxCharacters);
                $('.view-product .product-max-characters').text(productMaxCharacter);
                $('.view-product .product-material').text(productMaterial);
                $('.view-product .product-category').text(productCategory);
                $('.view-product .product-cod').text(productCod);
                $('.view-product .product-letter-type').text(productLetterType);
                $('.view-product .product-fitting-place').text(productFittingPlace);
                $('.view-product .product-length').text(productLength);
                $('.view-product .product-height').text(productHeight);
                $('.view-product .product-weight').text(productWeight);
                $('.view-product .product-price').text(productPrice);
                $('.view-product .product-trending').text(productTrending);

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


    });
    </script>

</body>

</html>

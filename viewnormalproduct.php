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
                                    <div class="col-lg-6 view-normal-product">
                                        
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
                                                <p>Notes</p>
                                                <p><strong class="product-notes"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Length</p>
                                                <p><strong class="product-length"></strong></p>
                                            </div>
                                            
                                            <div class="form-group">
                                                <p>Depth</p>
                                                <p><strong class="product-depth"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Weight</p>
                                                <p><strong class="product-weight"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Category</p>
                                                <p><strong class="product-category"></strong></p>
                                                
                                            </div>
                                            <div class="form-group">
                                                <p>SubCategory</p>
                                                <p><strong class="product-sub-category"></strong></p>
                                                
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
                                                <p>Featured Product</p>
                                                <p><strong class="product-featured"></strong></p>
                                                
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
                if (productMaterial == 1) { productMaterial = "Yes" }
                if (productCod == 1) { productCod = "Yes" }
                if (productFeatured == 1) { productFeatured = "Yes" }
                    
                
                $('.view-normal-product .product-name').text(productName);
                $('.view-normal-product .product-price').text(productPrice);
                $('.view-normal-product .product-description').text(productDescription);
                $('.view-normal-product .product-additional-information').text(productAddtionalInformation);
                $('.view-normal-product .product-cod').text(productCod);
                $('.view-normal-product .product-material').text(productMaterial);
                $('.view-normal-product .product-length').text(productLength);
                $('.view-normal-product .product-width').text(productWidth);
                $('.view-normal-product .product-depth').text(productDepth);
                $('.view-normal-product .product-weight').text(productWeight);
                $('.view-normal-product .product-sub-category').text(productSubCategory); 
                $('.view-normal-product .product-category').text(productCategory);
                $('.view-normal-product .product-featured').text(productFeatured);
                $('.view-normal-product .product-notes').text(productNotes);

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

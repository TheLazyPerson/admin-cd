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
    <style type="text/css">
        .color-list{
            list-style: none;
        }
        .color-list li span {
            width: 35px;
            height: 25px;
            background: #000000;
            border: 1px solid #ccc;
            display: block;
            float: left;
        }
        .color-list li  {
            line-height: 25px;
        }
    </style>
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
                        <h3 class="page-header">Add New Nameplate</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
              <!-- /.row -->
            <form role="form" id="insert-nameplate" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                
                                    <div class="col-lg-6">
                                    
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" class="form-control"  placeholder="Product Name" id="product-name" name="name" required>
                                            <p class="help-block">Please write the product name first</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" class="form-control" placeholder="Price" name="price" id="product-price" required>
                                            <p class="help-block">Starting Price of the nameplate</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Max Characters</label>
                                            <input type="number" class="form-control"  placeholder="Max Characters" id="product-max-characters" name="max_charcters" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Price For Each Character</label>
                                            <input type="number" class="form-control" placeholder="Price" name="price" id="product-price" required>
                                            <p class="help-block">If user adds more than max characters this price will be fabricated</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Product Description" id="product-description" name="description" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Additional Information</label>
                                            <textarea class="form-control" rows="3" placeholder="Additional Information" id="product-additional-information" name="additionalInfo" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Height</label>
                                            <input type="number" class="form-control" placeholder="Height" name="height" id="product-height" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Width</label>
                                            <input type="number" class="form-control" placeholder="Width" name="wdith" id="product-width" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Depth</label>
                                            <input type="number" class="form-control" placeholder="Depth" name="depth" id="product-depth" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Colors</label>
                                            <input type="text" class="form-control" placeholder="Color" name="colors" id="product-color" required>
                                            <br>
                                            <button class="btn btn-primary" id="add-color"><span class="glyphicon glyphicon-plus"></span> Add Color</button>
                                            <br>
                                            <br>
                                            <ul class="color-list">
                                                
                                            </ul>
                                        </div>
                                        

                                        <div class="form-group">
                                            <label>Cash On Delivery</label>
                                            <select class="form-control" id="product-cod" name="cod">
                                                <option>--SELECT OPTION--</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Material Used</label>
                                            <select class="form-control"  id="product-material" name="material">
                                                <option>--SELECT OPTION--</option>
                                                <option value="Wooden">Wooden</option>
                                                <option value="Metal">Metal</option>
                                                <option value="Stone">Stone</option>
                                                <option value="Wooden">Wooden</option>
                                                <option value="Metal">Metal</option>
                                                <option value="Stone">Stone</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Nameplate Use</label>
                                            <select class="form-control"  id="product-use" name="use">
                                                <option>--SELECT OPTION--</option>
                                                <option value="Indoor">Indoor</option>
                                                <option value="Outdoor">Outdoor</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Fitting Place</label>
                                            <select class="form-control"  id="product-fitting-place" name="fittingPlace">
                                                <option> --SELECT OPTION-- </option>
                                                <option value="Door">Door</option>
                                                <option value="Wall">Wall</option>
                                            </select>
                                        </div>
                                        
                                       
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="reset" class="btn btn-warning">Reset Button</button>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    
                                    <h4>Product Images</h4>
                                    <div class="row">  
                                    <div class="col-lg-6">
                                        <label>Product Image 1</label>
                                        <input type="file" name="productimage" class="product-image" id="product-image-1">
                                        <br>
                                        <img class="img-responsive product-image-1" src="http://placehold.it/200x200" />

                                    </div>
                                    <div class="col-lg-6">
                                        <label>Product Image 2</label>
                                        <input type="file" name="productimage" class="product-image" id="product-image-2">
                                        <br>
                                        <img class="img-responsive product-image-2" src="http://placehold.it/200x200" />
                                    </div>
                                    </div>
                                    <br>
                                    <div class="row">  
                                    <div class="col-lg-6">
                                        <label>Product Image 3</label>
                                        <input type="file" name="productimage" class="product-image"  id="product-image-3">
                                        <br>
                                        <img class="img-responsive product-image-3" src="http://placehold.it/200x200" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Add Nameplate Dimention</label>
                                        <input type="file" name="productdimention" class="product-image"  id="product-dimention">
                                        <br>
                                        <img class="img-responsive product-dimention" src="http://placehold.it/200x200" />
                                    </div>
                                    </div>
                                    <br>
                                    <div class="row">  
                                        <div class="col-lg-6">
                                            <label>Add Customize Images</label>
                                            <input type="file" name="productdimention" class="product-image"  id="product-customize">
                                            <br>
                                            <img class="img-responsive  product-customize" src="http://placehold.it/200x200" />
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
            </form>
        </div>
        <!-- /#page-wrapper -->

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
    <script src="js/admin.js"></script>

</body>

</html>

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
                        <h3 class="page-header">Add New Product</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
              <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" class="form-control"  placeholder="Product Name">
                                            <p class="help-block">Please write the product name first</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" class="form-control" placeholder="Price">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Product Description"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Add Images</label>
                                            <input type="file">
                                            <div>
                                                <button type="button" class="btn btn-default"><i class=" fa fa-upload fa-fw "></i> Upload</button>    
                                            </div>
                                            <p class="help-block">Images will be uploaded one at a time</p>
                                            <p class="help-block">Only 5 Images can be uploaded.</p>
                                            <p class="help-block">Image size should be less than 5mb if not then use <a href="https://tinypng.com/">TinyPng Image Size Reducer</a>.</p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Additional Information</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Cash On Delivery</label>
                                            <select class="form-control">
                                                <option> --SELECT OPTION-- </option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Material Used</label>
                                            <select class="form-control">
                                                <option> --SELECT OPTION-- </option>
                                                <option>Wooden</option>
                                                <option>Metal</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Featured Product</label>
                                            <select class="form-control">
                                                <option> --SELECT OPTION-- </option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="reset" class="btn btn-warning">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <h4>Uploaded Images</h4>
                                    <div class="row">  
                                    <div class="col-lg-6">
                                        <img class="img-responsive" src="http://placehold.it/200x200" />
                                    </div>
                                    <div class="col-lg-6">
                                        <img class="img-responsive" src="http://placehold.it/200x200" />
                                    </div>
                                    </div>
                                    <br>
                                    <div class="row">  
                                    <div class="col-lg-6">
                                        <img class="img-responsive" src="http://placehold.it/200x200" />
                                    </div>
                                    <div class="col-lg-6">
                                        <img class="img-responsive" src="http://placehold.it/200x200" />
                                    </div>
                                    </div>
                                    <br>
                                    <div class="row">  
                                    <div class="col-lg-6">
                                        <img class="img-responsive" src="http://placehold.it/200x200" />
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

</body>

</html>

<!DOCTYPE html>
<html lang="en" ng-app>

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

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0/angular.min.js"></script>
    <script type="text/javascript">
        

    </script>
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
                        <h3 class="page-header">Product Showcase</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <form role="form">
                            
                                <div class="form-group">
                                    <label>Select Image block</label>
                                    <select type="submit" class="form-control"  id="showcase-block-image" name="blockImage">
                                        <option> --SELECT OPTION-- </option>
                                        <option value="1">Block 1</option>
                                        <option value="2">Block 2</option>
                                        <option value="3">Block 3</option>
                                        <option value="4">Block 4</option>
                                        <option value="5">Block 5</option>
                                        <option value="6">Block 6</option>
                                        
                                    </select>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Load Image </button> 
                                </div>   
                            </form>
                            <img class="img-responsive block-image" src="" />

                        </div>
                        <div class="col-lg-6">
                            <form role="form">
                            
                                <div class="form-group">
                                    <label>Update Image</label>
                                    <input type="file" name="productimage" class="product-image" id="product-image-1">
                                    <br>
                                    <img class="img-responsive product-image-1" src="" />
                                    <br>
                                    <button type="submit" class="btn btn-primary">Upload Image at Block <span id="block-number"></span></button> 
                                </div>   
                            </form>
                            <img class="img-responsive replaced-block-image" src="" />

                        </div>


                    </div>
                    
                    
                     
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
    $(document).ready(function(e) {
        
        var rootUrl = 'http://localhost/work/api/public/';

        $("form").submit(function(e){
            e.preventDefault();
            var selected = $("#showcase-block-image").val();
            
            $(".block-image").attr('src','../api/public/images/showcase/block'+selected+".jpg");
            $("#block-number").text(selected);
        });
        $.ajax({
            
            url: rootUrl + "products/normal",
            dataType: "json",
            success : function(result) {
              
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        })
    });
    </script>



</body>

</html>

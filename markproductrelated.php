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


    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">



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
                        <h3 class="page-header">Mark Related Product</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Name Of the Product</th>
                                                <th>Price</th>
                                                <th>Material Used</th>
                                                <th>Cash On Delivery</th>
                                                <th>Visible</th>
                                                <th>Details</th>
                                                <th>Select Product for adding related Products</th>
                                            </tr>
                                        </thead>
                                        <tbody id="products-table-data">
                                            
                                        </tbody>
                                    </table>
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
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
     <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>


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
            
            url: rootUrl + "products/nameplate",
            dataType: "json",
            success : function(result) {
                var html = "";
                var productId = "";
                var productName ="";
                var productPrice = "";
                var productMaterial ="";
                var productCod = "";
                var productStatus = "";
                //console.log(result);
                var total_count = result["product_count"];
                var data = result['products'];
                
                $.each(data, function (key, value) {
                
                    productId = data[key]['id'];
                    productName = data[key]['name'];
                    productPrice = data[key]['price'];
                    productMaterial = data[key]['material'];
                    productCod = data[key]['cod'];
                    productStatus = data[key]['status'];
                    if (productMaterial == 1) { productMaterial = "Yes" }
                    if (productMaterial == 0) { productMaterial = "No" }
                    if (productCod == 1) { productCod = "Yes" }
                    if (productCod == 0) { productCod = "No" }
                    html += '<tr class="odd "><td>'+ productName +'</td><td>'+ productPrice+'</td><td>' + productMaterial + '</td><td>'+ productMaterial +'</td><td>'+ productCod  +'</td><td class="center"><a href="viewproduct.php?id='+ productId +'">View Product</a></td><td class="center"><a href="selectrelated.php?id='+ productId +'">Select Product</a></td></tr>'; 
                    
                });

                $("#products-table-data").html(html);
                $('#dataTables-example').DataTable({
                        responsive: true
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

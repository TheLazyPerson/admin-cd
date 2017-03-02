<!DOCTYPE html>
<html lang="en" ng-app>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative Design</title>

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
                        <h3 class="page-header">Update Category</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                   <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" id="insert-category">
                                    <div class="col-lg-6">
                                        
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="text" class="form-control" id="category-name" name="name" placeholder="Category Name" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Category Description</label>
                                            <textarea class="form-control" id="category-description" name="description" placeholder="Category Description" required></textarea>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                    </div>
                                    
                                </form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
        var imageUrl = 'http://localhost/work/api/public/';

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

        var id = getUrlParameter('id');
        var categoryName,categoryDescription;
        $.ajax({
            
            url: rootUrl + "/category/detail/" + id,
            dataType: "json",
            success : function(result) {
                
                var data = result['category'];
                categoryName = data['name'];
                categoryDescription = data['description'];
                
                $('#category-name').val(categoryName);
                $('#category-description').val(categoryDescription);

            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });

        $("form").submit(function(e){
            e.preventDefault();
            var categoryName = $("#category-name").val();
            var categoryDescription = $("#category-description").val();
            var categoryData = new FormData();
            $("#insert-category").serialize();
            categoryData.append("name",categoryName);
            categoryData.append("description",categoryDescription);
            $.ajax({
                type : "POST",
                url: rootUrl + "category/update",
                /*dataType: "json",*/
                data: categoryData,
                contentType: false,
                processData: false,
                success : function(result) {
                    if (result["success"]) {

                        alert("category updated");
                    }
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            });
        });
       
    });
    </script>



</body>

</html>

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
                        <h3 class="page-header">Add New Subcategory</h3>
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
                                                <label>SubCategory Name</label>
                                                <input type="text" class="form-control" id="sub-category-name" name="name" placeholder="Sub Category Name" required>
                                            </div>

                                            <div class="form-group">
                                                <label>SubCategory Description</label>
                                                <textarea class="form-control" id="sub-category-description" name="description" placeholder="Sub Category Description" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Select Category</label>
                                                <select class="form-control" id="parent-category" name="parent-category" required>
                                                    <option>--SELECT OPTION--</option>
                                                    
                                                </select>
                                            </div>
                                           
                                            <button type="submit" class="btn btn-primary">Submit </button>
                                            <button type="reset" class="btn btn-warning">Reset Button</button>
                                        
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
                $("#parent-category").html(html);

            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });

        $("form").submit(function(e){
            e.preventDefault();
            var subcategoryName = $("#sub-category-name").val();
            var subcategoryDescription = $("#sub-category-description").val();
            var parentCategory = $("#parent-category").val();
            var categoryData = new FormData();
            categoryData.append("name",subcategoryName);
            categoryData.append("description",subcategoryDescription);
            categoryData.append("parent",parentCategory);
            $.ajax({
                type : "POST",
                url: rootUrl + "subcategory/add",
                /*dataType: "json",*/
                data: categoryData,
                contentType: false,
                processData: false,
                success : function(result) {
                    if (result["success"]) {

                        alert("subcategory added");
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

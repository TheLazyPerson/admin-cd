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
                        <h3 class="page-header">Blog Details</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                   <div class="col-lg-12">
                        <div class="panel panel-default">
                          
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                            <img class="img-responsive blog-image" src="http://placehold.it/1280x368" />
                                            <br>
                                            <div class="form-group">
                                                <p>Blog Title</p>
                                                <p><strong class="blog-title"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Meta Description</p>
                                                <p><strong class="blog-description"></strong></p>
                                                
                                            </div>
                                            <div class="form-group">
                                                <p>Content</p>
                                                <p><strong class="blog-content"></strong></p>
                                            </div>
                                            <div class="form-group">
                                                <p>Visible</p>
                                                <p><strong class="blog-visible"></strong></p>
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

        var imageUrl = 'http://localhost/work/api/public/';
        var blogId = "";
        var blogTitle ="";
        var blogShortDescription = "";
        var blogContent ="";
        var blogImagePath = "";
        var blogVisible ="";
        $.ajax({
            
            url: rootUrl + "blog/" + id,
            dataType: "json",
            success : function(result) {
                
                var data = result['blog'];

                blogId = data['id'];
                blogTitle = data['title'];
                blogShortDescription = data['short_description'];
                blogContent = data['content'];
                blogImagePath = data['image_path'];
                blogVisible = data['visible'];
                
                $('.blog-content').html(blogContent);
                $('.blog-description').text(blogShortDescription);
                $('.blog-title').text(blogTitle);
                $('.blog-image').attr('src',imageUrl+blogImagePath);  

                $('.blog-visible').text((blogVisible == "1") ? "Yes" : "No"); 


                        
                   
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });


    });
    </script>

</body>

</html>

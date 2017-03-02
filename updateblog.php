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
    

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'#blog-content' });</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0/angular.min.js"></script>
    
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
                        <h3 class="page-header">Publish New Blog</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                   <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" name="blog-insert" id="insert-blog" novalidate>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                            
                                            <div class="form-group">
                                                <label>Blog Title</label>
                                                <input type="text" class="form-control" id="blog-title" name="blog-title" placeholder="Blog Title" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Blog Image</label>
                                                <input type="file" class="form-control" id="blog-image" name="image" required>
                                                <p class="help-block">Please select image of high quality with less size.</p>
                                                <p class="help-block">Image Should be in Rectangular shape.</p>

                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Visible</label>
                                                <select class="form-control" name="visible"  id="blog-visible">
                                                    <option> --SELECT OPTION-- </option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            
                                            <div class="form-group">
                                                <label>Meta Description</label>
                                                <textarea class="form-control" id="blog-meta-description" name="description" placeholder="Meta Description" required></textarea>
                                                <p class="help-block">Please mention short amount of text </p>
                                            </div>
                                            <div class="form-group">
                                                <img class="img-responsive blog-cover-image" src="http://placehold.it/1280x768" />
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Blog Content</label>
                                            <textarea class="form-control" id="blog-content" name="content" placeholder="Blog Content" required></textarea>
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


        //do validation for id whether it is number  or not
        var id = getUrlParameter('id');

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
                
                $('#blog-content').html(blogContent);
                $('#blog-meta-description').val(blogShortDescription);
                $('#blog-title').val(blogTitle);
                $('.blog-cover-image').attr('src',imageUrl+blogImagePath);  

                $('#blog-visible').val(parseInt(blogVisible)); 

                tinymce.activeEditor.setContent(blogContent);
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
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
        $("#blog-image").change(function(){
            readURL(this,'.blog-cover-image');
        });
        $("form").submit(function(e){
            e.preventDefault();
            var blogTitle = $("#blog-title").val();
            var blogMetaDescription = $("#blog-meta-description").val();
            var blogVisible = $("#blog-visible").val();
            var blogContent = tinymce.get('blog-content').getContent();
            var blogData = new FormData();
            
            var blogCoverImageName = blogTitle;
            blogCoverImageName = blogCoverImageName.toLowerCase().replace(/ /g, '-');
        
            $.each($('#blog-image')[0].files, function (i, file)
            {
                var fname = blogCoverImageName + "_1";
                blogData.append(fname, file);
            });

            blogData.append("title",blogTitle);
            blogData.append("description",blogMetaDescription);
            blogData.append("content",blogContent);
            blogData.append("visible",blogVisible);
            
            $.ajax({
                type : "POST",
                url: rootUrl + "blog/update/"+id,
                /*dataType: "json",*/
                data: blogData,
                contentType: false,
                processData: false,
                success : function(result) {
                    if (result["success"]) {
                        alert("blog updated successfully");
                        location.reload();
                    }else{
                        alert(result["error"]);
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

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
                    <form role="form" name="recent-images-insert" id="insert-recent-images">
                        <div class="col-lg-12" style="padding-bottom: 20px;">
                            <div class="col-lg-4">
                                <label>Showcase Image 1</label>
                                <input type="file" name="showcaseimage" class="showcase-image" id="showcase-image-1">
                                <br>
                                <img class="img-responsive showcase-image-1"  id="showcase-1" src="" />
                            </div>
                            <div class="col-lg-4">
                                <label>Showcase Image 2</label>
                                <input type="file" name="showcaseimage" class="showcase-image" id="showcase-image-2">
                                <br>
                                <img class="img-responsive showcase-image-2"  id="showcase-2" src="" />
                            </div>
                            <div class="col-lg-4">
                                <label>Showcase Image 3</label>
                                <input type="file" name="showcaseimage" class="showcase-image" id="showcase-image-3">
                                <br>
                                <img class="img-responsive showcase-image-3"  id="showcase-3" src="" />

                            </div>
                        </div>
                        <div class="col-lg-12" style="padding-bottom: 20px;">
                            <div class="col-lg-4">
                                <label>Showcase Image 4</label>
                                <input type="file" name="showcaseimage" class="showcase-image" id="showcase-image-4">
                                <br>
                                <img class="img-responsive showcase-image-4"  id="showcase-4" src="" />
                            </div>
                            <div class="col-lg-4">
                                <label>Showcase Image 5</label>
                                <input type="file" name="showcaseimage" class="showcase-image" id="showcase-image-5">
                                <br>
                                <img class="img-responsive showcase-image-5"  id="showcase-5" src="" />

                            </div>
                            <div class="col-lg-4">
                                <label>Showcase Image 6</label>
                                <input type="file" name="showcaseimage" class="showcase-image" id="showcase-image-6">
                                <br>
                                <img class="img-responsive showcase-image-6"  id="showcase-6" src="" />

                            </div>
                    
                        </div>
                        <div class="col-lg-12" style="padding-bottom: 20px;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset Button</button>
                        </div>                
                    </form>
                    
                     
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
    $(document).ready(function (e) {
    var rootUrl = 'http://localhost/work/api/public/';
    var imageUrl = 'http://localhost/work/api/public/';
     $.ajax({
            url: rootUrl + "showcase",
            dataType: "json",
            success : function(result) {
                var imagePath = "";
                var data = result['showcase'];
                var selector = "#showcase-"
                $.each(data, function (key, value) {
                    imagePath = data[key]['image_path'];
                    $(selector+key).attr('src', imageUrl+imagePath);
                });
                
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

    $("#showcase-image-1").change(function(){
        readURL(this,'.showcase-image-1');
    });
    $("#showcase-image-2").change(function(){
        readURL(this,'.showcase-image-2');
    });
    $("#showcase-image-3").change(function(){
        readURL(this,'.showcase-image-3');
    });
    $("#showcase-image-4").change(function(){
        readURL(this,'.showcase-image-4');
    });
    $("#showcase-image-5").change(function(){
        readURL(this,'.showcase-image-5');
    });
    $("#showcase-image-6").change(function(){
        readURL(this,'.showcase-image-6');
    });

    //on submit
    $( "form" ).submit(function( e ) {
 
        //validate images
        /*TODO*/
        e.preventDefault();
     

        //upload images first
        var imageData = new FormData();
        

        $.each($('#showcase-image-1')[0].files, function (i, file)
        {
            var fname = "1";
            imageData.append(fname, file);
        });

        $.each($('#showcase-image-2')[0].files, function (i, file)
        {
            var fname = "2";
            imageData.append(fname, file);
        });
        $.each($('#showcase-image-3')[0].files, function (i, file)
        {
            var fname = "3";
            imageData.append(fname, file);
        });
        $.each($('#showcase-image-4')[0].files, function (i, file)
        {
            var fname = "4";
            imageData.append(fname, file);
        });
        $.each($('#showcase-image-5')[0].files, function (i, file)
        {
            var fname = "5";
            imageData.append(fname, file);
        });
         $.each($('#showcase-image-6')[0].files, function (i, file)
        {
            var fname = "6";
            imageData.append(fname, file);
        });
       
        //imageData.append("product", JSON.stringify(data));
        console.log(imageData);
        //make the actual request
        $.ajax({
            type : "POST",
            url: rootUrl + "showcase",
            //dataType : "json",
            data : imageData,
            contentType: false,
            processData: false,
            success : function(result) {
                if (result["success"]) {
                    alert("images changed");
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

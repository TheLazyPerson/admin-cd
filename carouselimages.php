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
                        <h3 class="page-header">Timeline Images</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <form role="form" name="timeline-images-insert" id="insert-timeline-images">
                    <div class="col-lg-12" style="padding-bottom: 20px;"> 

                        <div class="col-lg-6">
                            <label>Timeline Image 1</label>
                            <input type="file" name="timelineimage" class="timeline-image" id="timeline-image-1">
                            <br>
                            <img class="img-responsive timeline-image-1" id="timeline-1" src="" />

                        </div>
                        <div class="col-lg-6">
                            <label>Timeline Image 2</label>
                            <input type="file" name="timelineimage" class="timeline-image" id="timeline-image-2">
                            <br>
                            <img class="img-responsive timeline-image-2" id="timeline-2" src="" />
                        </div>
                    </div> 
                    
                    <div class="col-lg-12" style="padding-bottom: 20px;"> 
                        <div class="col-lg-6">
                            <label>Timeline Image 3</label>
                            <input type="file" name="timelineimage" class="timeline-image" id="timeline-image-3">
                            <br>
                            <img class="img-responsive timeline-image-3" id="timeline-3" src="" />

                        </div>
                        <div class="col-lg-6">
                            <label>Timeline Image 4</label>
                            <input type="file" name="timelineimage" class="timeline-image" id="timeline-image-4">
                            <br>
                            <img class="img-responsive timeline-image-4" id="timeline-4" src="" />
                        </div>
                    </div>
                    
                    <div class="col-lg-12" style="padding-bottom: 20px;"> 
                        <div class="col-lg-6">
                            <label>Timeline Image 5</label>
                            <input type="file" name="timelineimage" class="timeline-image" id="timeline-image-5">
                            <br>
                            <img class="img-responsive timeline-image-5" id="timeline-5" src="" />

                        </div>
                        
                    </div>
                    <div class="col-lg-12" style="padding-bottom: 20px;">
                        
                         <button type="submit" class="btn btn-primary">Submit </button>
                        <button type="reset" class="btn btn-warning">Reset Button</button>
                    </div>
                </div>
                </form>
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
            url: rootUrl + "timeline",
            dataType: "json",
            success : function(result) {
                var imagePath = "";
                var data = result['timeline'];
                var selector = "#timeline-"
                var i = 1;
                $.each(data, function (key, value) {
                    imagePath = data[key]['image_path'];
                    $(selector+i).attr('src', imageUrl+imagePath);
                    i++;
                });
                //timeline
               
  
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

                $("#timeline-image-1").change(function(){
                    readURL(this,'.timeline-image-1');
                });
                $("#timeline-image-2").change(function(){
                    readURL(this,'.timeline-image-2');
                });
                $("#timeline-image-3").change(function(){
                    readURL(this,'.timeline-image-3');
                });
                $("#timeline-image-4").change(function(){
                    readURL(this,'.timeline-image-4');
                });
                $("#timeline-image-5").change(function(){
                    readURL(this,'.timeline-image-5');
                });


                //on submit
                $( "form" ).submit(function( e ) {
             
                    //validate images
                    /*TODO*/
                    e.preventDefault();
                 

                    //upload images first
                    var imageData = new FormData();
                    

                    $.each($('#timeline-image-1')[0].files, function (i, file)
                    {
                        var fname = "1";
                        imageData.append(fname, file);
                    });

                    $.each($('#timeline-image-2')[0].files, function (i, file)
                    {
                        var fname = "2";
                        imageData.append(fname, file);
                    });
                    $.each($('#timeline-image-3')[0].files, function (i, file)
                    {
                        var fname = "3";
                        imageData.append(fname, file);
                    });
                    $.each($('#timeline-image-4')[0].files, function (i, file)
                    {
                        var fname = "4";
                        imageData.append(fname, file);
                    });
                    $.each($('#timeline-image-5')[0].files, function (i, file)
                    {
                        var fname = "5";
                        imageData.append(fname, file);
                    });

                    //imageData.append("product", JSON.stringify(data));
                    console.log(imageData);
                    //make the actual request
                    $.ajax({
                        type : "POST",
                        url: rootUrl + "timeline",
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

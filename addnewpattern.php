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
                        <h3 class="page-header">Add New Pattern</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <form role="form" name="add-new-pattern" id="add-new-pattern">
                        <div class="col-lg-12" style="padding-bottom: 20px;"> 
                            <div class="col-lg-6">
                                
                                <div class="form-group">
                                    <label>Pattern Name</label>
                                    <input type="text" class="form-control" id="pattern-name" name="name" placeholder="Pattern Name" required>
                                </div>

                                <div class="form-group">

                                    <label>Pattern Image</label>
                                    <input type="file" name="patternimage" class="pattern-image" id="pattern-image-1">
                                    <img class="img-responsive pattern-image-1" src="" />

                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="col-lg-12" style="padding-bottom: 20px;">
                            
                             <button type="submit" class="btn btn-primary">Submit </button>
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
                
                function readURL(input, selector) {

                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $(selector).attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#pattern-image-1").change(function(){
                    readURL(this,'.pattern-image-1');
                });
               
                $( "form" ).submit(function( e ) {
                    var name = $('#pattern-name').val();
                    e.preventDefault();
                    var imageData = new FormData();
                    $.each($('#pattern-image-1')[0].files, function (i, file)
                    {
                        var fname = "1";
                        imageData.append(fname, file);
                    });

                    imageData.append("name", name);
                    $.ajax({
                        type : "POST",
                        url: rootUrl + "pattern/add",
                        //dataType : "json",
                        data : imageData,
                        contentType: false,
                        processData: false,
                        success : function(result) {
                            if (result["success"]) {
                                alert("pattern added");
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

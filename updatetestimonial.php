<!DOCTYPE html>
<html lang="en" ng-app>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="om">

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
                        <h3 class="page-header">Update Testimonial</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                   <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" id="insert-testimonial">
                                    <div class="col-lg-6">
                                        
                                            <div class="form-group">
                                                <label>Author Name</label>
                                                <input type="text" class="form-control" id="testimonial-author" name="author" placeholder="Author Name" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea class="form-control" id="testimonial-message" name="message" placeholder="Message" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Place</label>
                                                <input type="text" class="form-control" id="testimonial-place" name="place" placeholder="Place" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control" id="testimonial-date" name="date" placeholder="Date" required>
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
        $.ajax({
            
            url: rootUrl + "testimonials/"+id,
            dataType: "json",
            success : function(result) {
                
                var data = result['testimonial'];
                var testimonialAuthor,testimonialMessage,testimonialPlace,testimonialDate;

                $.each(data, function(key,value){

                    testimonialAuthor = data[key]['author'];
                    testimonialMessage = data[key]['message'];
                    testimonialPlace = data[key]['place'];
                    testimonialDate = data[key]['date'];
                });
               
            
                $("#testimonial-author").val(testimonialAuthor);
                $("#testimonial-message").val(testimonialMessage);
                $("#testimonial-place").val(testimonialPlace);
                $("#testimonial-date").val(testimonialDate);
                
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        })

        $("form").submit(function(e){
            e.preventDefault();
            var testimonialAuthor = $("#testimonial-author").val();
            var testimonialMessage = $("#testimonial-message").val();
            var testimonialPlace = $("#testimonial-place").val();
            var testimonialDate = $("#testimonial-date").val();
            var testimonialData = new FormData();
            $("#insert-category").serialize();
            testimonialData.append("message",testimonialMessage);
            testimonialData.append("author",testimonialAuthor);
            testimonialData.append("place",testimonialPlace);
            testimonialData.append("date",testimonialDate);
            $.ajax({
                type : "POST",
                url: rootUrl + "testimonials/update/"+id,
                /*dataType: "json",*/
                data: testimonialData,
                contentType: false,
                processData: false,
                success : function(result) {
                    if (result["success"]) {

                        alert("testimonial updated");
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

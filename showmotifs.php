<!DOCTYPE html>
<html lang="en" >

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

<style type="text/css">
    
.row-eq-height {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display:         flex;
}
</style>

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
                        <h3 class="page-header">Motif Data</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
      
                <div class="row " id="motif-data">
                    
                    

                    
                    
                </div><!-- End row -->
      
              
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
        
        var rootUrl = 'http://localhost/work/api/public/';
        var imageUrl = 'http://localhost/work/api/public/';
        $.ajax({
            
            url: rootUrl + "motifs",
            dataType: "json",
            success : function(result) {
                var html = "";
                var motifId = "";
                var motifName ="";
                var motifDescription = "";
                //console.log(result);
                var data = result['motifs'];
                
                $.each(data, function (key, value) {
                    motifId = data[key]['id'];
                    motifName = data[key]['name'];
                    motifDescription = data[key]['description'];
                    motifImagePath = data[key]['motif_path'];
                    html += '<div class="col-xs-12 col-sm-6 col-md-3"><div class="thumbnail"><img src="'+ imageUrl+motifImagePath+'" class="img-responsive"  alt=""><div class="caption"><h4>'+motifName+'</h4><p>'+ motifDescription+'</p><p><a href="#" class="btn btn-info" role="button">Update </a> <a href="#" class="btn btn-default delete-motif" role="button" data-id="'+motifId+'">Delete</a></p></div>  </div></div>';

                   
                });
                $("#motif-data").html(html);
                $(".delete-motif").click(function(e){
                    e.preventDefault();
                    var link = $(this);
                    var id = link.data("id");
                    if (confirm('Are you sure?')) {
                        $.ajax({
                            url: rootUrl + "motif/delete/"+id,
                            dataType: "json",
                            success: function(result){
                                
                                location.reload(true);
                            },
                            error: function(xhr, resp, text) {
                                console.log(xhr, resp, text);
                            }
                        })

                    }
                    
                })
               
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
        
                
        });        
            
    </script>



</body>

</html>

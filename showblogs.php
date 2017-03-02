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
                        <h3 class="page-header">Blogs</h3>
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
                                        
                                            <th>Title Of Blog</th>
                                            <th>Short Description</th>
                                            <th>Visible</th>
                                            <th>Update</th>
                                            <th>Preview</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody id="blog-table-data">
                                         
                                       
                                    </tbody>
                                </table>
                                
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

     <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        
        var rootUrl = 'http://localhost/work/api/public/';
        $.ajax({
            
            url: rootUrl + "blogs",
            dataType: "json",
            success : function(result) {
                var html = "";
                var blogId = "";
                var blogTitle ="";
                var blogShortDescription = "";
                var blogContent ="";
                var blogImagePath = "";
                var blogVisible ="";
                //console.log(result);
                var data = result['blogs'];
                
                $.each(data, function (key, value) {
                    blogId = data[key]['id'];
                    blogTitle = data[key]['title'];
                    blogShortDescription = data[key]['short_description'];
                    /*blogContent = data[key]['content'];
                    blogImagePath = data[key]['image_path'];*/
                    blogVisible = data[key]['visible'];
                    if (blogVisible == '1') {
                        blogVisible = 'Yes';
                    }else if (blogVisible =='0') {
                        blogVisible = 'No';
                    }
                    /*<td>'+ blogContent+'</td><td>'+ blogImagePath+'</td>*/
                    html += '<tr class="odd "><td>'+ blogTitle +'</td><td>'+ blogShortDescription+'</td><td>'+ blogVisible+'</td><td class="center"><a href="updateblog.php?id='+ blogId +'">Update Blog</a></td><td class="center"><a href="viewblog.php?id='+ blogId +'">View Blog</a></td><td class="center"><a href="#" class="delete-blog" data-id="'+blogId+'">Delete</a></td></tr>'; 
                });
                $("#blog-table-data").html(html);
                
                $('#dataTables-example').DataTable({
                    responsive: true
                });
                 $(".delete-blog").click(function(e){
                        e.preventDefault();
                        var link = $(this);
                        var id = link.data("id");
                        if (confirm('Are you sure?')) {
                            $.ajax({
                                url: rootUrl + "blog/delete/"+id,
                                dataType: "json",
                                success: function(result){
                                    
                                    location.reload(true);
                                },
                                error: function(xhr, resp, text) {
                                    console.log(xhr, resp, text);
                                }
                            });

                        }
                        
                    })
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        })
    });
    </script>



</body>

</html>
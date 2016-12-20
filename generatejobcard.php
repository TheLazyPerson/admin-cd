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
                    <div class="col-lg-12 text-center">
                        <h2 class="page-header">Creative Design</h2>
                        <p class="support-text">website: www.gharkonacha.com, e-mail: rakeshkarli@gmail.com</p>
                        <p class="support-text">Mobile #: 8087676981</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-8">
                            <h2>JOB CARD</h2>
                            <p class="normal-text">NAMEPLATE TEXT: SHOME'S</p>
                            <p class="normal-text">CLIENT MOBILE #: </p>
                        </div>
                        <div class="col-lg-4">
                            <p class="normal-text">WORK ORDER #: 1003</p>
                            <p class="normal-text">NAMEPLATE CODE: CUSTOM</p>
                            <p class="normal-text">DATE : 18/11/2015</p>
                        </div>    
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-12">     
                            <p class="normal-text">CLIENT ADDRESS: RAIPUR</p>
                            <p class="normal-text">CLIENT EMAIL ID: omkomawar222@gmail.com</p>
                            <p class="normal-text">FRANCHISOR NAME : VINNAY KOTHARI</p>
                            <p class="normal-text">FRANCHISOR MOBILE # :9548999909</p>
                            <p class="normal-text">FRANCHISOR EMAIL ID : aestheticworld09@gmail.com</p>
                        </div>

                    </div><div class="col-lg-12">
                        <h2>NAMEPLATE DETAILS</h2>  
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                               
                            <p class="normal-text">CLIENT ADDRESS: RAIPUR</p>
                            <p class="normal-text">CLIENT EMAIL ID: omkomawar222@gmail.com</p>
                            <p class="normal-text">FRANCHISOR NAME : VINNAY KOTHARI</p>
                            <p class="normal-text">FRANCHISOR MOBILE # :9548999909</p>
                            <p class="normal-text">FRANCHISOR EMAIL ID : aestheticworld09@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <p class="normal-text">TOTAL CHARACTERS : 6 & 1 MOTIF </p>
                            <p class="normal-text">LETTERS RUNNING INCHES: 18 </p>
                            <p class="normal-text">CUTTING TYPE : WATERJET</p>
                            <p class="normal-text">COMPANY RATE : 7950/-</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="normal-text">TOTAL OBJECT : 11</p>
                            <p class="normal-text">PLATING TYPE : GOLD PLATING</p>
                            <p class="normal-text">CUTTING LETTERS BACK SIDE HOLES :</p>
                            <p class="normal-text">FRANCHISOR RATE :-</p>
                        </div> 
                    </div>
                    <div class="col-lg-12">
                       <h2>COURIER DETAILS</h2> 
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <p class="normal-text">COMPANY NAME : </p>
                            <p class="normal-text">COURRIER BOY NAME : </p>
                            <p class="normal-text">CONTACT NUMBER :</p>
                            <p class="normal-text">DISPATCH DATE / TIME :</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="normal-text">TRAIN NAME :</p>
                            <p class="normal-text">TRAIN DATE / TIME :</p>
                            <p class="normal-text">COACH NO. :</p>
                            <p class="normal-text">ATTENDACE MOB. #:</p>
                        </div> 
                    </div>
                    
                    <div class="col-lg-12">
                        <button class="btn btn-primary print">Print Job Card</button> 
                    </div>
                    
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
    <script type="text/javascript">
        $(document).ready(function(){
            $(".print").click(function(){
                window.print();

            });

        });

    </script>
</body>

</html>

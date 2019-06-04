<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>PROFILE</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/GREEN.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        include 'header.php';
        ?>
         <?php
         include 'sidebar.php';
         ?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                
                
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30"> <img src="data:image/jpeg;base64,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" height="300" width="250" />
                                   
                                    
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Profile</a> </li>
                                
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-block">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="JAYESH JAIPAL ARUMUGAM" class="form-control form-control-line">
                                                </div>
                                                </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="jayeshjaipal670@gmail.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Mobile No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="9653480020" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Career Objective</label>
                                                <div class="col-md-12"><br>
                                                    <textarea rows="5" class="form-control form-control-line">To be a successful professional and to achieve the objective of the company with honesty fairness, where i can contribute my knowledge and skills to the orgnization to continuously upgrade my knowledge and skills and to enhance my experience through continuous learning and teamwork </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>India</option>
                                                        <option>London</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>

                                        
                                        
                                        
                                        
                                       
                                                                       
                                        
                                         <div class="form-group">
                                                <div class="col-sm-12">
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">submit</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel1">FORM HAS BEEN SUBMITTED SUCCESSFULLY</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <!--Second tab-->
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <?php
           include "footer.php";
           ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>
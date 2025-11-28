<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Course</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css"> 
  <?php
  include('dbconection.php');
  ?>
</head>
<body class="hold-transition sidebar-min layout-fixed">
  <div class="wrapper">
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <a href="#" class="brand-link">
       <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
       <span class="brand-text font-weight-light"> Enrollment </span>
     </a>
     <div class="sidebar">
       <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           
           <li class="nav-item">
             <a href="#" class="nav-link"><i class="fas fa-copy"></i><p>&nbsp;Course Operation<i class="fas fa-angle-left right"></i> </p></a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                 <a href="add-course.php" class="nav-link"><i class="far fa-circle"></i><p>&nbsp;Add Course</p></a>
                </li>
                <li class="nav-item">
                 <a href="view-course.php" class="nav-link"><i class="far fa-circle"></i><p>&nbsp;View Course</p></a>
                </li>
            
              </ul>
           </li>
           <li class="nav-item">
             <a href="#" class="nav-link"><i class="fas fa-book"></i><p>&nbsp;Enrollment Operation<i class="fas fa-angle-left right"></i> </p></a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                 <a href="add-enrollment.php" class="nav-link"><i class="far fa-circle"></i><p>&nbsp;Add Enrollment</p></a>
                </li>
                <li class="nav-item">
                 <a href="view-enrollment.php" class="nav-link"><i class="far fa-circle"></i><p>&nbsp;View Enrollment</p></a>
                </li>
                
              </ul>
           </li>
         </ul>
       </nav>
     </div><!--sidebar-->
   </aside>
  
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid" align="center"><br/>
        <div class="col-md-5">
          <div class="card card-primary" style="border: solid;border-radius: 5px;">
            <div class="card-header">
            <h3>Add Course</h3></div>
            <div class="card-body" style="padding:5px">
            <form method="post">
            <div class="col-md-12">
              <label style="float: left;">Add Content</label>
              <input type="text" required name="content1" class="form-control" placeholder="Enter...">
            </div><!--col div-->
              <div class="col-md-12">
              <label style="float: left;">Course Controller</label>
               <input type="text" required name="controller1" class="form-control" placeholder="Enter...">
             
            </div><!--col div-->
            <br/>
            <div align="center"><input type="submit" style="width:120px" name="btn" value="Submit" class="btn btn-primary"><p><br/></p></div>
          </form>
        <?php
         if(isset($_POST['btn'])){
            $q=mysqli_query($conn,"INSERT INTO `course`(`course_content`, `course_controller`) VALUES ('".$_POST['content1']."','".$_POST['controller1']."')");
            if($q>0){
                ?>
                <script type="text/javascript">
                  window.location="view-course.php";
                </script>
                <?php
            }
         }
        ?>
           </div><!--card body-->
          </div><!--card-->
        </div><!--col div-->
      </div><!--container fluid-->
    </section>
  </div><!--content wrapper-->

  </div><!--wrapper-->
 
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>


</body>
</html>

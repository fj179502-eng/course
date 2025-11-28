<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Course</title>

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
   <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <?php
 include('dbconection.php');
  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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
                <li class="nav-item">
                 <a href="deactive-enrollment.php" class="nav-link"><i class="far fa-circle"></i><p>&nbsp;Deactive Enrollment</p></a>
                </li>
              </ul>
           </li>
         </ul>
       </nav>
     </div><!--sidebar-->
   </aside>
 
 <div class="content-wrapper">
   <section class="content">
     <div class="container-fluid">
      <br/>
       <div class="col-md-12">
         <div class="card card-primary">
           <div class="card-header">
             <h3 align="center">View Course</h3>
           </div>
           <div class="card-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <th>Sno#</th>
                 <th>Course Content</th>
                 <th>Course Controller</th>
                 <th>Active</th>
               </thead>
               <tbody>
                 <?php
                $q=mysqli_query($conn,"SELECT * FROM course WHERE is_active=1");
                $s=0;
                while($row=mysqli_fetch_array($q)){
                $s++;
                 ?> 
                 <tr>
                   <td><?php echo $s;?></td>
                   <td><?php echo $row['course_content']?></td>
                   <td><?php echo $row['course_controller']?></td>
                   <td><a href="course-profile.php?cid=<?php echo $row['course_id']?>" class="btn btn-primary">View</a>
                        <a href="update-course.php?cid=<?php echo $row['course_id']?>" class="btn btn-success">Update</a>
                        <a href="delete-course.php?stdid=<?php echo $row['course_id']?>" class="btn btn-danger">Delete</a>
                       
                 </tr>
                  
                  <?php 
                 }
                 ?>
                
               </tbody>
             </table>
           </div><!--card body-->
         </div><!--card-body-->
       </div><!--co ldiv-->
     </div><!--container fluid-->
   </section>
 </div><!--content wrapper-->  

</div><!-- ./wrapper -->

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
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

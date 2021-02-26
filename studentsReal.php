<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <!-- <link href="<?=base_url();?>/stemp/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <link href="<?=base_url();?>/stemp/vendor/font-awesome/css/all.css" rel="stylesheet"> -->

  <!-- Custom styles for this template -->
  <link href="<?=base_url();?>/stemp/css/simple-sidebar.css" rel="stylesheet">
  <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body>

  <div class="d-flex" id="wrapper">
<!-- ******************************************************************************************************* -->
    <!-- Sidebar -->
        <!-- <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar"> -->
        <!-- <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: rgb(128, 0, 0);" id="accordionSidebar"> -->
        <div class="navbar-nav sidebar sidebar-dark accordion" style="background-color: rgb(128, 0, 0);" id="accordionSidebar" id="sidebar-wrapper">       
                <a class="d-flex align-items-center justify-content-center">
                    <li><img src="<?=base_url();?>public/img/taguig.png" style="width: 90px; height: 90px"></li>
                </a>
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-text mx-3"> Admin </div>
                </a>
    
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
    
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>
    
                <!-- Divider -->
                <hr class="sidebar-divider">
    
                <!-- Heading -->
              <div class="sidebar-heading">
                    Management
                </div>
    
                <!-- Nav Item - Time-in Management Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?=base_url();?>/students" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-user"></i>
                       
                        <a href="<?=base_url();?>/students" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user"></i> Student</a>
                          
                    </a>
                    <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Components:</h6>
                            <a class="collapse-item" href="buttons.html">Scan</a>
                            <a class="collapse-item" href="cards.html">Manual</a>
                        </div>
                    </div> -->
                </li>
    
                <!-- Nav Item - Schedule Management Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?=base_url();?>/professors" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-user-tie"></i>
                        <!-- <span>Professor</span> -->
                        <a href="<?=base_url();?>/professors" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-tie"></i> Professor</a>
                    </a>
                    <!-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Select:</h6>
                            <a class="collapse-item" href="utilities-color.html">Students</a>
                            <a class="collapse-item" href="utilities-border.html">Subject</a>
                            <a class="collapse-item" href="utilities-animation.html">Event</a>
                            <a class="collapse-item" href="utilities-other.html">Other</a>
                        </div>
                    </div> -->
                </li>
    
                <!-- Nav Item - Report Management Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?=base_url();?>/courses" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-address-card"></i>
                        <!-- <span>Course</span> -->
                        <a href="<?=base_url();?>/courses" class="list-group-item list-group-item-action bg-light"><i class="fas fa-address-card"></i> Course</a>
                    </a>
                    <!-- <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Select:</h6>
                            <a class="collapse-item" href="tables.html">Tables</a>
                            <a class="collapse-item" href="">Subject</a>
                        </div>
                    </div> -->
                </li>
                <!-- Nav Item - Report Management Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?=base_url();?>/subjects" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-book"></i>
                        <!-- <span>Subject</span> -->
                        <a href="<?=base_url();?>/subjects" class="list-group-item list-group-item-action bg-light"><i class="fas fa-book"></i> Subject</a>
                    </a>
                    <!-- <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Select:</h6>
                            <a class="collapse-item" href="tables.html">Tables</a>
                            <a class="collapse-item" href="">Subject</a>
                        </div>
                    </div> -->
                </li>
                <!-- Nav Item - Report Management Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?=base_url();?>/visitors" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-users"></i>
                        <!-- <span>Visitors</span> -->
                        <a href="<?=base_url();?>/visitors" class="list-group-item list-group-item-action bg-light"><i class="fas fa-users"></i> Visitor</a>
                    </a>
                    <!-- <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Select:</h6>
                            <a class="collapse-item" href="tables.html">Tables</a>
                            <a class="collapse-item" href="">Subject</a>
                        </div>
                    </div> -->
                </li>
    
                <!-- Divider -->
                <hr class="sidebar-divider"> 
    
    
            
    
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
    
        </div>
         <!-- </ul> -->
<!-- End of Sidebar -->
<!-- ******************************************************************************************************** -->

    <!-- Page Content -->
    <div id="page-content-wrapper" class="d-flex flex-column">

       <!-- Main Content -->
        <div id="content">

            <!-- topbar -->
            <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color:rgb(68,68,68);">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                </button>

                  <!-- button para sa toggle -->
                  <!-- <button class="btn btn-dark" id="menu-toggle"><i class="fas fa-bars"></i></button> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <!-- <li> -->
                      <h5 id="time" style="color: WHITE"></h5>
                    <!-- </li> -->
                    <!-- ----------------------------------------- -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white-600 small">Mr. Lim</span>
                                <!-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg" > -->
                                <i class="fas fa-user-circle" style="color: WHITE"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                    <!-- ----------------------------------------- -->

                    <!-- <li class="nav-item active">
                      <a class="nav-link" href="http://localhost/clas/public/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Option
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li> -->
                  </ul>
                </div>
            </nav>
              <!-- Begin Page Content -->
              <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tables</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Student
                                <a href="<?php echo base_url('students/create') ?>" class="btn btn-sm btn-success">Create</a>

                            </h6>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="students" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Student Number</th>
                                             <th>Name</th>
                                             <th>Course</th>
                                             <th>Year and Section</th>
                                             <th>PC#</th>
                                             <th>Action</th>
                                            
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                      <?php if(!empty($students)): ?>
                                      <?php foreach($students as $student): ?>
                                      <tr class="text-center">
                                         <td><?php echo $student['studentnumber']; ?></td>
                                         <td><?php echo $student['lastname'].', '.$student['firstname'].' '.$student['m_initial']; ?></td>
                                         <td><?php echo $student['course']; ?></td>
                                         <td><?php echo $student['year']; ?></td>
                                         <td><?php echo $student['pcnum']; ?></td>
                                         <td>
                                          <a href="<?php echo base_url('students/edit/'.$student['id']);?>" class="btn btn-sm btn-success">Edit</a>
                                          <a href="<?php echo base_url('students/delete/'.$student['id']);?>" class="btn btn-sm btn-danger">Delete</a>
                                         </td>
                                      </tr>
                                     <?php endforeach; ?>
                                     <?php endif; ?>
                                   </tbody>
                                    
                                   
                                    <tfoot>
                                        <tr class="text-center">
                                             <th>Student Number</th>
                                             <th>Name</th>
                                             <th>Course</th>
                                             <th>Year and Section</th>
                                             <th>PC#</th>
                                             <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
      
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
   <!--  <script src="<?=base_url();?>/stemp/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>/stemp/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url();?>/stemp/vendor/font-awesome/js/all.min.js"></script> -->

    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

    <script>
        $(document).ready( function () {
          $('#students').DataTable();
      } );
    </script>

    <script type="text/javascript">
      var timestamp = '<?=time();?>';
      function updateTime(){
      $('#time').html(Date(timestamp));
      timestamp++;
      }
      $(function(){
        setInterval(updateTime, 1000);
      });
  </script>
  <!-- ****************************************************************************************** -->
      <!-- Bootstrap core JavaScript-->
        <script src="<?=base_url();?>/stemp/vendor/jquery/jquery.min.js"></script>
        <script src="<?=base_url();?>/stemp/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?=base_url();?>/stemp/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="public/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?=base_url();?>/stemp/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url();?>/stemp/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="public/js/demo/datatables-demo.js"></script>
  <!-- ******************************************************************************************* -->
</body>
</html>

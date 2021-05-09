<!DOCTYPE html>
<html>
<head>
    <title>Visitors</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

     <!-- Custom fonts for this template-->
     <link href="<?=base_url();?>/stemp/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
       <link
           href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
           rel="stylesheet">

       <!-- Custom styles for this template-->
       <link href="<?=base_url();?>/stemp/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: rgb(128, 0, 0);" id="accordionSidebar">
                <a class="d-flex align-items-center justify-content-center">
                    <li><img src="<?=base_url();?>/stemp/img/taguig.png" style="width: 90px; height: 90px"></li>
                </a>

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="http://localhost/clas/public/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=base_url();?>/students/create">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <span>Registration</span>
                </a>
            </li>
            <!-- Nav Item - Students Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=base_url();?>/students">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Students</span>
                </a>
            </li>

            <!-- Nav Item - Professors Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=base_url();?>/professors">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Professors</span>
                </a>
            </li>

             <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url();?>/visitors">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Visitors</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Others:
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url();?>/schedules">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Schedule Subject</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?=base_url();?>/courses">
                <!-- <a href="<?=base_url();?>/courses" class="list-group-item list-group-item-action bg-light"><i class="fas fa-address-card"></i> Course</a> -->
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Courses</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url();?>/subjects">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Subjects</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color:rgb(68,68,68);">
                <h5 id="time" style= "color: WHITE"></h5>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- nan dito dati yung topbar search -->

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="<?=base_url();?>/stemp/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
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
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <!-- Page Content -->
            <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h4 class="h3 mb-0 text-gray-800">Time-in | Time-out Record</h4>
                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                </div>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Log
                        <a href="<?php echo base_url('visitors/timein') ?>" class="btn btn-sm btn-success">Time In</a>
                        <a href="<?php echo base_url('visitors/timeout') ?>" class="btn btn-sm btn-outline-primary">Time Out</a>
                        <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="myModal"> -->
                        </h6>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="visitors" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                    <th>Name</th>
                                    <th>Purpose</th>
                                    <th>Laboratory</th>
                                    <th>Time In</th>
                                    <th>Time Out</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php if($visitors): ?>
                                    <?php foreach($visitors as $visitor): ?>
                                   <tr class="text-center">
                                      <td><?php echo $visitor['visitor_name']; ?></td>
                                      <td><?php echo $visitor['visitor_purpose']; ?></td>
                                      <td><?php echo $visitor['visitor_lab']; ?></td>
                                      <td><?php echo $visitor['time_in']; ?></td>
                                      <td><?php echo $visitor['time_out']; ?></td>
                                    </tr>
                                  <?php endforeach; ?>
                                  <?php endif; ?>
                                </tbody>
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
                        <span>Copyright &copy; Beyond Errors for Easy Solution 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url('login') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
<!-- ******************************************************************* -->

<!-- ******************************************************************* -->

<script>
$(document).ready( function () {
$('#visitors').DataTable();
} );
</script>
<!-- Bootstrap core JavaScript-->
<script src="<?=base_url();?>/stemp/vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url();?>/stemp/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url();?>/stemp/vendor/font-awesome/js/all.min.js"></script>
<!--  -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

<!--  -->
<!-- Core plugin JavaScript-->
<script src="<?=base_url();?>/stemp/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?=base_url();?>/stemp/js/sb-admin-2.min.js"></script>

<!-- time -->
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
</body>
</html>

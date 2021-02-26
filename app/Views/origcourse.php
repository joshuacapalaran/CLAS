<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Course</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url();?>/stemp/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url();?>/stemp/vendor/font-awesome/css/all.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=base_url();?>/stemp/css/simple-sidebar.css" rel="stylesheet">

</head>
<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">CLAS</div>
      <div class="list-group list-group-flush">
        <!-- <a href="http://localhost/clas/public/" class="list-group-item list-group-item-action bg-light"><i class="fas fa-chart-line"></i> Dashboard</a> -->
        <a href="<?=base_url();?>/students" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user"></i> Student</a>
        <a href="<?=base_url();?>/professors" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-tie"></i> Professor</a>
        <a href="<?=base_url();?>/courses" class="list-group-item list-group-item-action bg-light"><i class="fas fa-address-card"></i> Course</a>
        <a href="<?=base_url();?>/subjects" class="list-group-item list-group-item-action bg-light"><i class="fas fa-book"></i> Subject</a>
        <a href="<?=base_url();?>/visitors" class="list-group-item list-group-item-action bg-light"><i class="fas fa-users"></i> Visitor</a>
        <!-- <a href="<?=base_url();?>/schedules" class="list-group-item list-group-item-action bg-light"><i class="fas fa-calendar"></i> Schedule</a> -->
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-dark" id="menu-toggle"><i class="fas fa-bars"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li>
                <h5 id="time"></h5>
            </li>
            <!-- <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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

      <div class="container-fluid">
        <h1>Add Course</h1>
        <div class="container mt-5">
          <a href="<?php echo base_url('courses/create') ?>" class="btn btn-sm btn-success">Create</a>
          <div class="row mt-3">
             <table class="table table-bordered" id="courses">
               <thead>
                  <tr class="text-center">
                     <th>Course</th>
                     <!-- <th>Year and Section</th> -->
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php if($courses): ?>
                  <?php foreach($courses as $course): ?>
                <tr class="text-center">
                     <td><?php echo $course['course']; ?></td>

                     <td>
                      <a href="<?php echo base_url('courses/edit/'.$course['id']);?>" class="btn btn-sm btn-success">Edit</a>
                      <a href="<?php echo base_url('courses/delete/'.$course['id']);?>" class="btn btn-sm btn-danger">Delete</a>
                      </td>
                  </tr>
                 <?php endforeach; ?>
                 <?php endif; ?>
               </tbody>
             </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="<?=base_url();?>/stemp/vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url();?>/stemp/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url();?>/stemp/vendor/font-awesome/js/all.min.js"></script>

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
      $('#courses').DataTable();
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
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Add Schedule</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

</head>
<body>
 <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>

    <span class="d-none alert alert-success mb-3" id="res_message"></span>

    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('schedules/store');?>" name="schedule_form" id="schedule_form" method="schedule" accept-charset="utf-8">
          <div class="form-group">
            <label for="subject">Subject</label>
              <select name="subject_id" id="subject" class="form-control">
                <option>-- Please Select Course --</option>
                <?php foreach ($subjects as $subject): ?>
                  <option value="<?= $subject['id']?>">
                    <?=$subject['subject_code']." ".$subject['subject_name']?>
                  </option>
                <?php endforeach; ?>
              </select>
          </div>

          <div class="form-group">
          <label for="course_id">Course</label>
              <select name="course_id" id="course_id" class="form-control" required>
              <option>-- Please Select Course --</option>
              <?php foreach ($courses as $course): ?>
                  <option value="<?= $course['id']?>">
                  <?=$course['course']?>
                  </option>
              <?php endforeach; ?>
              </select>
          </div>

          <div class="form-group">
              <label for="professor">Professor</label>
              <select name="professor_id" id="professor" class="form-control" required>
              <option>-- Please Select Professor --</option>
              <?php foreach ($professors as $professor): ?>
                  <option value="<?= $professor['id']?>">
                  <?=$professor['faculty_name']?>
                  </option>
              <?php endforeach; ?>
              </select>
          </div>

          <div class="form-group">
              <label for="start_time">Start time</label>
              <input type="time" name="start_time" id="start_time" class="form-control" required>
          </div>
          <div class="form-group">
              <label for="end_time">End Time</label>
              <input type="time" name="end_time" id="end_time" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="date_sched">Date Schedule</label>
            <input type="date" name="date_sched" id="date_sched" class="form-control" required>
          </div>

          <div class="form-group">
              <label for="lab_used">Laboratory</label>
              <select name="lab_used" id="lab_used" class="form-control" required>
              <option>-- Please Select Laboratory --</option>
              <option value="dost">DOST Laboratory</option>
              <option value="aboitiz">Aboitiz Laboratory</option>
              </select>
          </div>

          <div class="form-group">
              <label for="semester">Semester</label>
              <input type="text" name="semester" id="semester" class="form-control" required>
          </div>

          <div class="form-group">
              <label for="school_year">School Year</label>
              <input type="year" name="school_year" id="school_year" class="form-control" required>
          </div>

          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>

        </form>
      </div>

    </div>

</div>
 <script>
   if ($("#schedule_form").length > 0) {
      $("#schedule_form").validate({

    rules: {
      title: {
        required: true,
      },

      description: {
        required: true,
      },
    },
    messages: {

      title: {
        required: "Please enter title",
      },
      description: {
        required: "Please enter description",
      },
    },
  })
}
</script>
</body>
</html>

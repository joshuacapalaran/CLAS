<!DOCTYPE html>
<html>
<head>
  <title>Edit Schedule</title>
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
        <form action="<?php echo base_url('schedules/update');?>" name="schedule_form" id="schedule_form" method="schedule" accept-charset="utf-8">

           <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $schedule['id'] ?>">


           <div class="form-group">
             <label for="subject">Subject</label>
               <select name="subject" id="subject" class="form-control">
                 <option>-- Please Select Course --</option>
                 <?php foreach ($subjects as $subject): ?>
                   <option value="<?= $subject['id']?>" <?=$subject['id'] == $schedule['subject_id']?'selected':''?> >
                     <?=$subject['subject_code']." ".$subject['subject_name']?>
                   </option>
                 <?php endforeach; ?>
               </select>
           </div>

          <div class="form-group">
            <label for="course_id">Course</label>
            <input type="number" name="course_id" class="form-control" id="course_id" placeholder="Please enter course_id" value="<?php echo $schedule['course_id'] ?>">

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

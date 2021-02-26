<!DOCTYPE html>
<html>
<head>
  <title>Edit Visitor</title>
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
        <form action="<?php echo base_url('visitors/update');?>" name="visitor_form" id="visitor_form" method="visitor" accept-charset="utf-8">

           <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $visitor['id'] ?>">


          <div class="form-group">
            <label for="visitor_name">Name</label>
            <input type="text" name="visitor_name" class="form-control" id="visitor_name" placeholder="Please enter visitor_name" value="<?php echo $visitor['visitor_name'] ?>">

          </div>

          <div class="form-group">
            <label for="visitor_purpose">Purpose</label>
            <input type="text" name="visitor_purpose" class="form-control" id="visitor_purpose" placeholder="Please enter visitor_purpose" value="<?php echo $visitor['visitor_purpose'] ?>">

          </div>

          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>

        </form>
      </div>

    </div>

</div>
<script>
   if ($("#visitor_form").length > 0) {
      $("#visitor_form").validate({

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

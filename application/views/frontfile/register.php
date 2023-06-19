<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontfile/' ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/frontfile/' ?>css/dynamic.css">
    <title>Register</title>
  </head>
  <style type="text/css"></style>
  <body>
  <div class="back">
    <div class="div-Register">
      <div class="row">
      
        <div class="col-lg-8 padding">
            
          <div class="contents">
          <p class="fw">&lt; <a class="white-text" href="<?php echo base_url().'home'; ?>">Go back</a></p>
          <h3 class="center fw">Welcome!</h3>
          <p class="center fw">We are so excited to see you on board !</p>
          <p class="margin-top-bottom-class-register">Fill all the details to join the new world!</p>
          
          <form method="post" action="<?= base_url(); ?>Home/register_post">
          
            <div class="form-group">
              <input name="username" type="text" class="form-control" id="placeholderColor" placeholder="Enter Username">
              <?php echo form_error('username'); ?>
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control" id="placeholderColor" placeholder="Enter Password">
              <?php echo form_error('password'); ?>
            </div>
            <div class="form-group">
              <input name="phone" type="text" class="form-control" id="placeholderColor" placeholder="Phone Number">
              <?php echo form_error('phone'); ?>
            </div>
            <div class="form-group">
              <input name="email" type="email" class="form-control" id="placeholderColor" placeholder="Email ID">
              <?php echo form_error('email'); ?>
            </div>
            <div class="form-group">
              <input name="dob" type="date" class="form-control" id="placeholderColor" placeholder="Date of birth (17/04/2023)">
              <?php echo form_error('dob'); ?>
            </div>

            <input type="submit" class="btn-css white-text margin-top-bottom-class fw" name="save" value="Register" />
            <?php if (isset($massage)) { ?>
              <h6 style="color:green;">Data inserted successfully</h6><br>
            <?php }  ?>
          </form>

        </div>
      </span>
        </div>
        <div class="col-lg-4 padding-top-bottom">
          <p class="fw font-20">Already have an account?</p>
          <div class="img">
            <div class="QR-Code margin-top-bottom-class"></div>
          </div>
          <p class="font-30 fw">Log in with QR</p>
          <p class="font-16 fw">Scan this with <span class="white-text">backdoor mobile app</span> to login instantly</p>
          <a href="<?php echo base_url().'home/login'; ?>"><button type="submit" class="btn-css white-text margin-top-bottom-class fw">Login</button></a>
        </div>
      </div>
    </div>
  </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
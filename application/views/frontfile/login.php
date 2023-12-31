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
    <title>Login</title>
  </head>
  <body>
  <div class="back">
    <div class="div-center">
      <div class="contents">
        <!--error message -->
          <?php if($this->session->flashdata('error')){ ?>
          <p class="text-center" style="color:red"><?php  echo $this->session->flashdata('error');?></p>
          <?php } ?>
          <h3 class="center fw">Welcome!</h3>
          <p class="center fw">We are so excited to see you on board !</p>
          <form action="<?php echo base_url(); ?>/Home/loginAuth" method="post">
            <div class="form-group">
              <!-- <label for="exampleInputEmail1">Username</label> -->
              <input name="username" type="email" class="form-control" id="placeholderColor" placeholder="Username">
              <?php echo form_error('username',"<div style='color:red'>","</div>");?>
            </div>
            <div class="form-group">
              <!-- <label for="exampleInputPassword1">Password</label> -->
              <input name="password" type="password" class="form-control" id="placeholderColor" placeholder="Password">
              <?php echo form_error('password',"<div style='color:red'>","</div>");?>
            </div>
            <button type="submit" class="btn-css white-text margin-top-bottom-class fw">Login</button>
            <p class="center"><span class="account">Don’t have an account?</span><a href="<?php echo base_url().'home/register'; ?>" class="white-text"> Register</a></p>
          </form>
         </div>
      </span>
  </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
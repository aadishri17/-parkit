<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  
  
  
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css') ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <style>

     
</style> 
</head>
<body class="hold-transition login-page">
<div class="login-logo">
    <a href=""><b>Parking Manager Login</b></a>
  </div>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php echo validation_errors(); ?>  

    <?php if(!empty($errors)) {
      echo $errors;
    } ?>

    <form action="<?php echo base_url('auth/login') ?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>

<div style= "left: 45%; position: relative;  ">
    <img src="data:image/jpeg;base64,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" alt="tiet-img" height=200px width=200px>
</div>

<div style="margin-bottom: 50px " > </div>

<div class="col-xs-4" style="text-align:center"> 
  <button type="submit" style="margin-left: 107%" class="btn btn-primary btn-block btn-flat">View slot availability</button>
  
  
</div>





<!-- /.login-box -->

<!-- jQuery 3 -->

<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js') ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

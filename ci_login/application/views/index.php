<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link href="<?= base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body class="bg-warning">
<br><br>
<center>
<div class="card mt-5 ml-3 shadow-lg" style="width:30%;">
  <center><img src="<?= base_url('assets/img/download.png');?>" class="mt-2 mb-0" style="width:100px;"></center>
  <div class="card-body">
    <?= form_open('auth/login');?>
  		<div class="form-group">
    		<?= form_input(['name'=>'username', 'class'=>'form-control bg-light mb-4 text-center', 'placeholder'=>'username']);?>
          	<?= form_error('username', '<div class="alert alert-danger">', '</div>');?>
  		</div>
  		<div class="form-group">
    		<?= form_password(['name'=>'password', 'class'=>'form-control bg-light mb-4 text-center', 'placeholder'=>'password']);?>
          <?= form_error('password', '<div class="alert alert-danger">', '</div>');?>
  		</div>
  		<button type="submit" class="btn btn-primary" style="width:50%;">Submit</button>
	<?= form_close();?>
  </div>
</div>
</center>
</body>
</html>

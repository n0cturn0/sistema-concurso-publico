<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Bootstrap -->
    <link href="<?php echo base_url('assets_admin/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets_admin/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets_admin/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets_admin/build/css/custom.min.css'); ?>" rel="stylesheet">
	<meta charset="utf-8">
	<title>Colegio Militar de Campo Grande Concurso de Admissão</title>

</head>
<body>
	<div class="container">
	 <div class="row">
	 <div class="col-md-12">
	  <img src="<?php echo base_url('assets/images/logo.gif'); ?>"><br>
	<?php 
	echo $concurso;
	echo '<br>';
	echo 'Data da Geração:'.$info;
	echo $boleto->getOutput();

	?>
	</div>
	</div>
</div>
</body>
</html>
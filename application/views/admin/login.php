  
   <script src="<?php echo base_url('assets/js/jquery.111.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/particles.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/login.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
   <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/login.css');?>" rel="stylesheet">
   <br>
<div class="controls">
  <div id="login-box">
    <div class="logo">
        <h1 class="logo-caption">CMCG</h1>
      <h1 class="logo-caption"><img src="<?php echo base_url('assets/images/logo.gif'); ?>" class="img img-responsive img-circle center-block"/></h1>
    </div><!-- /.logo -->
    <div class="controls">

      <h1 style="color:white;"><?php echo lang('login_heading');?></h1>
<p style="color:white;"><?php echo lang('login_subheading');?></p>

<div id="infoMessage" style="color:white;"><?php echo $message;?></div>

<?php echo form_open("admin/login");?>

  <div class="form-group">
    <label>Usuário</label>
    <?php 
    $identity = array(
        'type'  => 'text',
        'name'  => 'identity',
        'class' => 'form-control',
        'placeholder' => 'CPF RESPONSÁVEL'
        );
    echo form_input($identity); ?>
  </div>
  
  <div class="form-group">
   
    <?php
    $password = array(
      'type'    => 'password',
      'name'    => 'password',
      'class' => 'form-control',
      'placeholder' => 'IDENTIDADE RESPONSÁVEL');
    

     ?>
    <?php echo form_input($password);?>
  </div>

   


  <div class="form-group">
  <?php $submit = array(
    'class'=>'btn btn-default btn-block btn-custom'
    
  ); ?>
  <?php echo form_submit('submit', lang('login_submit_btn'), $submit);?>
  </div>

<?php echo form_close();?>

<!--<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->



     <!-- <input type="text" name="username" placeholder="Username" class="form-control" />
      <input type="text" name="username" placeholder="Password" class="form-control" />
      <button type="button" class="btn btn-default btn-block btn-custom">Login</button> -->
    </div><!-- /.controls -->
  </div><!-- /#login-box -->
</div><!-- /.container -->
<div id="particles-js"></div>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->

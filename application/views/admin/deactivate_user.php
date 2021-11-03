  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    



                                <h1><?php echo lang('deactivate_heading');?></h1>
            <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

            <?php echo form_open("admin/deactivate/".$user->id);?>

              <p>
                <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
                <input type="radio" name="confirm" value="yes" checked="checked" />
                <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
                <input type="radio" name="confirm" value="no" />
              </p>

              <?php echo form_hidden($csrf); ?>
              <?php echo form_hidden(array('id'=>$user->id)); ?>

              <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

            <?php echo form_close();?>






                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
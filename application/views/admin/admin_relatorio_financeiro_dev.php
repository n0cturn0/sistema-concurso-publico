  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pagos</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="<?php echo base_url('boleto/pago'); ?>" class="btn btn-success active" role="button">Visualisar Pagos</a></h2>
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
                     

                     <table class="table table-condensed">
                     <thead>
                       <th>Inscrição</th>
                       <th>Nome</th>
                       <th>Identidade</th>
                       <th>Cpf</th>
                       <th>Status</th>
                       <?php foreach ($x->result() as  $value) {
                     
                      ?>
                     </thead>
                     <tr>
                      <td><?php echo $value->idcandidatos; ?></td>
                      <td><?php echo $value->candidato_nome; ?></td>
                      <td><?php echo $value->identidade; ?></td>
                      <td><?php echo $value->cpf; ?></td>
                      <td>
                        <?php
                        if ($value->status=='0') 
                        { ?>
                      <img width="30" height="30" src="<?php echo base_url('assets/images/negativo.gif'); ?>">
                      <?php
                         
                        } else { ?>
                        <img src="<?php echo base_url('assets/images/confirmado.png'); ?>">
                        <?php
                            
                           
                           
                        }

                        ?>
                      </td>
                     </tr>
                     <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Relatório Financeiro</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="<?php echo base_url('index.php/boleto/pago'); ?>" class="btn btn-success active" role="button">Visualisar Pagos</a></h2>
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
                     

                


                <table class="table table-bordered">
                 <thead>
                 <th>Identificador</th>
                   <th>Nome</th>
                   <th>Identidade</th>
                   <th>Cpf</th>
                    <th>Status</th>
                 </thead>
                 <tbody>
                 <?php foreach ($relatorio->result() as $value) { 
                  //print_r($value);
                  ?>
                 <tr>
                  <td><?php echo $value->idcandidatos; ?></td>
                   <td><?php echo $value->candidato_nome; ?></td>
                  <td><?php echo $value->identidade; ?></td>
                   <td><?php echo $value->cpf; ?></td>
                   <td>
                    <?php
                        if ($value->status=='0') 
                        { ?>
                     <a href="<?php echo base_url('index.php/boleto/mudastatus/'.$value->idcandidatos); ?>"> <img width="30" height="30" src="<?php echo base_url('assets/images/negativo.gif'); ?>"> </a>
                     <?php
                      }
                      if ($value->status=='3') {
                      ?>
                      <a href="<?php echo base_url('index.php/boleto/mudastatus/'.$value->idcandidatos); ?>"><img width="40" height="40" src="<?php echo base_url('assets/images/atencao.jpg'); ?>"> </a>
                      <?php
                        }
                       if ($value->status=='1'){ ?>
                        <img  width="30" height="30" src="<?php echo base_url('assets/images/confirmado.png'); ?>">
                        <?php
                       }
                      ?>
                      



                   </td>
                   </tr>
                   <?php } ?>
                 </tbody>
                </table>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

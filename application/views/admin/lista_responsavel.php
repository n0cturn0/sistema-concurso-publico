  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Relação de Responsáveis</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>
                      <button class="btn btn-primary" type="button">
                      CANDIDATOS: <span class="badge">  <?php echo $contador; ?></span>
                    </button>
                    </h2>
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
                    


                     <table class="table bordered" >

                     <thead>
                       <th>Nome</th>
                       <th>Usuário</th>
                       <th>Telefone</th>
                        <th>Telefone</th>
                       <th>Email</th>
 			<th>Força</th>
                     </thead>
                     <tbody>
                       <?php
                       foreach ($responsavel->result() as $key) {
                         # code...
                       

                        ?>
                       <tr>
                        <td><?php echo $key->nome; ?></td>
                         <td><?php echo $key->username; ?></td>
                        <td><?php echo $key->telefone; ?></td>
                         <td><?php echo $key->celular; ?></td>
                         <td><?php echo $key->email; ?></td>
			<td><?php echo $key->tipo; ?></td>

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

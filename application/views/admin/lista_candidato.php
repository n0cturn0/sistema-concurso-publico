  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?php echo $stt; ?></h3>
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
                      <li><a class="close-link"></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    


                  <table class="table bordered" >

                  <thead>
                    
                  <th>ID</th>
                   <th><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span> Responsável</th>
                  <th><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span> Candidato</th>
                  <th>Serie</th>  
                  <th>Força</th>
                  <th><span class="glyphicon glyphicon glyphicon-earphone" aria-hidden="true"></span> Telefone </th>
                 <th><span class="glyphicon glyphicon glyphicon-phone" aria-hidden="true"></span> Telefone </th>

                  </thead>


                  <tbody>

                  <?php 

                  foreach ($lista->result() as $row) {
                  
                  ?>
                    <tr>
                    <td><?php echo $row->idcandidatos; ?></td>
                     <td><?php echo $row->nome; ?></td>
                    <td><span class="badge"><?php echo $row->candidato_nome; ?></span></td>
                    <td><?php echo $row->serie; ?></td>
                    <td><?php echo $row->forca; ?></td>
                    <td><?php echo $row->telefone; ?></td>
                    <td><?php echo $row->celular; ?></td>
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
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
                    <h2><?php echo $mensagem; ?></h2>
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

                    <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> RESPONSÁVEIS</span>
              <div class="count"><?php echo $contador; ?></div>
               <span class="count_bottom"><i class="green">Responsáveis </i> Inscritos</span> 
            </div>
           <!-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div> -->
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Candidatos</span>
              <div class="count green"><?php  echo $candidatos; ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>Candidatos </i> Inscritos</span> 
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-check-square-o"></i> Pagamentos</span>
              <div class="count"><?php echo $pagos; ?></div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>Pagamentos </i> Realizados</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-warning"></i> ISENTOS</span>
              <div class="count"><?php echo $isento; ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>Candidatos </i> Isentados</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-money"></i> Sem Pagamento</span>
              <div class="count"><?php echo $sempagamento; ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>Sem </i> Confirmação</span>
            </div>
          </div>

























                    <h1><?php echo lang('index_heading');?></h1>
<p><?php echo lang('index_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<table class="table" cellpadding=0 cellspacing=10>
  <tr>
    <th>Nome</th>
    <th>Usuário</th>
    <th><?php echo lang('index_email_th');?></th>
    <th><?php echo lang('index_groups_th');?></th>
    <th>Status</th>
    <th><?php echo lang('index_action_th');?></th>
  </tr>
  <?php foreach ($users as $user):?>
    <tr>
            <td><?php echo htmlspecialchars($user->nome,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
      <td>
        <?php foreach ($user->groups as $group):?>
          <?php echo anchor("admin/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                <?php endforeach?>
      </td>
      <td><?php echo ($user->active) ? anchor("admin/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
      <td><?php echo anchor("admin/edit_user/".$user->id, 'Editar', 'class="btn btn-warning"') ;?></td>
    </tr>
  <?php endforeach;?>
</table>

<p><?php echo anchor('admin/create_user', lang('index_create_user_link'), 'class="btn btn-default"')?> | <?php echo anchor('admin/create_group', lang('index_create_group_link'),'class="btn btn-primary"' )?></p>







                     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
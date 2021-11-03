  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Valor e data de Vencimento</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $boletos; ?></h2>
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
                      <li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
              <?php $attributes = array('class' => 'form-horizontal form-label-left', 'id' => 'demo-form2');
              echo form_open('admin/inserirboleto', $attributes); ?>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Valor do Boleto <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input type="text" id="valor" name="valor" required="required" class="form-control col-md-7 col-xs-12" placeholder="0,00">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Data de Vencimento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        
                           <div class="col-xs-8">
            <div class="form-inline">
              <div class="form-group">
                <select name="dd" class="form-control">
                  <option value="">Dia</option>
                  <option value="01" >01 </option><option value="02" >02 </option><option value="03" >03 </option><option value="04" >04 </option><option value="05" >05 </option><option value="06" >06 </option><option value="07" >07 </option><option value="08" >08 </option><option value="09" >09 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
              </div>
              <div class="form-group">
                <select name="mm" class="form-control">
                  <option value="">Mês</option>
                  <option value="01">Jan</option><option value="02">Fev</option><option value="03">Mar</option><option value="04">Abr</option><option value="05">Mai</option><option value="06">Jun</option><option value="07">Jul</option><option value="08">Ago</option><option value="09">Set</option><option value="10">Out</option><option value="11">Nov</option><option value="12">Dez</option>                </select>
              </div>
              <div class="form-group" >
                <select name="yyyy" class="form-control">
                  <option value="0">Ano</option>
                  <option value="2015" >2015 </option><option value="2016" >2016 </option><option value="2017" >2017 </option><option value="2018" >2018  </option>                 


                  </select>
              </div>














                        </div>





                        <div class="form-inline">
                       <div class="form-group">
                        
                        <div class="col-md-3 col-sm-6 col-xs-12">
                        <br>
                       <button type="submit" class="btn btn-primary">Inserir</button>
                        </div>
                      </div>
                      </div>

                      <br>
                      <div class="alert alert-info" role="alert">
                       <span class="glyphicon glyphicon-th-large" aria-hidden="true"> VALORES VIGENTES </span>
                       <br><hr>
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"> <?php echo $valor->boleto_valor ?></span>
                        <br>
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"> <?php
                       echo nice_date($valor->boleto_vencimento, 'd-m-Y');

                        ?></span>
                       
                    </div>








                      </div>







                      </form>















                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
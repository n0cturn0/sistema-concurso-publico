  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Página de Estatisticas</h3>
              </div>



               <script src="<?php echo base_url('assets_admin/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets_admin/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets_admin/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets_admin/vendors/nprogress/nprogress.js'); ?>"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets_admin/build/js/custom.min.js'); ?>"></script>

 <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets_admin/vendors/Chart.js/dist/Chart.min.js'); ?>"></script>














   
              <!-- jQuery -->
               <script src="<?php echo base_url('assets_admin/vendors/jquery/dist/jquery.min.js'); ?>"></script>
               <!-- jQuery -->
    <script src="<?php echo base_url('assets_admin/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets_admin/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets_admin/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets_admin/vendors/nprogress/nprogress.js'); ?>"></script>
     <script src="<?php echo base_url('assets_admin/build/js/custom.min.js'); ?>"></script>
            </div>

            <div class="clearfix"></div>

                






            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
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
                    
                

                        <div class="row">
              

              <div class="col-md-8 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pagamentos <small>Estatistica</small></h2>
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
                    <canvas id="mybarChart"></canvas>
                  </div>
                </div>
              </div>
            </div>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

          <!-- Chart.js -->
    <script>
      Chart.defaults.global.legend = {
        enabled: false
      };

    

      // Bar chart
      var ctx = document.getElementById("mybarChart");
      var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["ORIGEMS"],
          datasets: [
          {
            label: '# Exercito',
            backgroundColor: "#26B99A",
            data: [<?php echo $exercito; ?>]
          }, 
          {
            label: '# Civil',
            backgroundColor: "#03586A",
            data: [<?php echo $civil; ?>],
          },
          {
            label: '# Aeronáutica',
            backgroundColor: "#ff0000",
            data: [<?php echo $fab; ?>],
          }


          ]
        },

        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });

      // Doughnut chart
      var ctx = document.getElementById("canvasDoughnut");
      var data = {
        labels: [
          "Dark Grey",
          "Purple Color",
          "Gray Color",
          "Green Color",
          "Blue Color"
        ],
        datasets: [{
          data: [120, 50, 140, 180, 100],
          backgroundColor: [
            "#455C73",
            "#9B59B6",
            "#BDC3C7",
            "#26B99A",
            "#3498DB"
          ],
          hoverBackgroundColor: [
            "#34495E",
            "#B370CF",
            "#CFD4D8",
            "#36CAAB",
            "#49A9EA"
          ]

        }]
      };

      var canvasDoughnut = new Chart(ctx, {
        type: 'doughnut',
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: data
      });

      // Radar chart
      var ctx = document.getElementById("canvasRadar");
      var data = {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [{
          label: "My First dataset",
          backgroundColor: "rgba(3, 88, 106, 0.2)",
          borderColor: "rgba(3, 88, 106, 0.80)",
          pointBorderColor: "rgba(3, 88, 106, 0.80)",
          pointBackgroundColor: "rgba(3, 88, 106, 0.80)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          data: [65, 59, 90, 81, 1, 55, 40]
        }, {
          label: "My Second dataset",
          backgroundColor: "rgba(38, 185, 154, 0.2)",
          borderColor: "rgba(38, 185, 154, 0.85)",
          pointColor: "rgba(38, 185, 154, 0.85)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [28, 48, 40, 19, 96, 27, 100]
        }]
      };

      var canvasRadar = new Chart(ctx, {
        type: 'radar',
        data: data,
      });

      // Pie chart
      var ctx = document.getElementById("pieChart");
      var data = {
        datasets: [{
          data: [120, 50, 140, 180, 100],
          backgroundColor: [
            "#455C73",
            "#9B59B6",
            "#BDC3C7",
            "#26B99A",
            "#3498DB"
          ],
          label: 'My dataset' // for legend
        }],
        labels: [
          "Dark Gray",
          "Purple",
          "Gray",
          "Green",
          "Blue"
        ]
      };

      var pieChart = new Chart(ctx, {
        data: data,
        type: 'pie',
        otpions: {
          legend: false
        }
      });

      // PolarArea chart
      var ctx = document.getElementById("polarArea");
      var data = {
        datasets: [{
          data: [120, 50, 140, 180, 100],
          backgroundColor: [
            "#455C73",
            "#9B59B6",
            "#BDC3C7",
            "#26B99A",
            "#3498DB"
          ],
          label: 'My dataset'
        }],
        labels: [
          "Dark Gray",
          "Purple",
          "Gray",
          "Green",
          "Blue"
        ]
      };

      var polarArea = new Chart(ctx, {
        data: data,
        type: 'polarArea',
        options: {
          scale: {
            ticks: {
              beginAtZero: true
            }
          }
        }
      });
       </script>
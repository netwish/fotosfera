
<?php include 'inc_topo.php' ?>


<div class="content-wrapper">
       
  <section class="content-header">
    <h1>Relatórios de Venda<small>- Pedido Online</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Relatórios de Venda </a></li>
      <li class="active">Pedido Online</li>
    </ol>
  </section>

  <section class="content">

  <div class="box">
    <div class="box-body">
          
        <div class="row">
            <div class="col-md-6">

                <!-- DATA BAR -->
                <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">Acumulo de vendas no mês</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
    
                    <div class="box-body">
                        <div class="chart">
                          <canvas id="barChart" style="height:250px"></canvas>
                        </div>
                    </div><!-- /.box-body -->
                  </div>

                <!-- GEO CHART -->
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">Faturamento mensal por região</h3>
                    <ul class="nav nav-tabs pull-right">
                      <li class="active mapa_faturamento"><a href="#mapa_faturamento" data-toggle="tab">Area</a></li>
                      <li class="BR-SP"><a href="#BR-SP" data-toggle="tab">SP</a></li>
                      <li class="BR-CE"><a href="#BR-CE" data-toggle="tab">CE</a></li>
                      <li class="BR-PE"><a href="#BR-PE" data-toggle="tab">PE</a></li>
                      <li class="BR-MT"><a href="#BR-MT" data-toggle="tab">MT</a></li>
                      <li class="BR-BA"><a href="#BR-BA" data-toggle="tab">BA</a></li>
                    </ul>
                  </div>

                  <div class="box-body">
                    <div class="tab-content no-padding">
                      <div class="chart tab-pane active" id="mapa_faturamento" >
                        <div id="chart_div"></div>
                      </div>
                      <div class="chart tab-pane active " id="BR-SP" style="position: relative;">
                        <div class="chart">
                          <canvas id="lineSP" ></canvas>
                        </div>
                      </div>
                      <div class="chart tab-pane active " id="BR-CE" style="position: relative;">
                        <div class="chart">
                          <canvas id="lineCE" ></canvas>
                        </div>
                      </div>
                      <div class="chart tab-pane active " id="BR-PE" style="position: relative;">
                        <div class="chart">
                          <canvas id="linePE" ></canvas>
                        </div>
                      </div>
                      <div class="chart tab-pane active " id="BR-MT" style="position: relative;">
                        <div class="chart">
                          <canvas id="lineMT" ></canvas>
                        </div>
                      </div>
                      <div class="chart tab-pane active " id="BR-BA" style="position: relative;">
                        <div class="chart">
                          <canvas id="lineBA" ></canvas>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->


                <!-- PIE CHART -->
                <div class="box box-warning">
                    <div class="box-header with-border">
                      <h3 class="box-title">OEE mês a mês</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
    
                    <div class="box-body">
                        <div class="chart">
                          <canvas id="pieChart" style="height:250px"></canvas>
                        </div>
                    </div><!-- /.box-body -->
                  </div>


            </div><!-- /.col (LEFT) -->

            <div class="col-md-6">
            <!-- LINE CHART -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Margem de contribuição/lucro</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <div class="box-body">
                        <div class="chart">
                          <canvas id="lineChart" style="height:250px"></canvas>
                        </div>
                  </div><!-- /.box-body -->
                </div>

            <!-- PIE CHART -->
                <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">Preço médio do kg por segmento - Abril 2016</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
    
                    <div class="box-body">
                        <div class="chart">
                          <canvas id="pieChart2" style="height:250px"></canvas>
                        </div> 
                    </div><!-- /.box-body -->
                  </div>

            <!-- AREA CHART -->
                <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">Venda por segmento - Abril 2016</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
    
                    <div class="box-body">
                        <div class="chart">
                          <canvas id="areaChart" style="height:250px"></canvas>
                        </div>
                    </div><!-- /.box-body -->
                  </div>

                <!-- BARRA Unica -->
                <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">Nível de estoque de PA na expedição (em R$)</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
    
                    <div class="box-body">
                        <div class="chart">
                          <canvas id="barChart2" style="height:250px"></canvas>
                        </div>
                    </div><!-- /.box-body -->
                  </div>

            </div><!-- /.col (RIGHT) -->
        </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


    <!-- Includes -->
    <?php include 'inc_jquery.php' ?>
    

    <!--GOOGLE CHARTS-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  
    <!--Js da pagina-->
    <script type="text/javascript" src="teste.js"></script>


<?php include 'inc_footer.php' ?>
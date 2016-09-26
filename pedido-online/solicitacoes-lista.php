<?php include 'inc_topo.php' ?>



      <div class="content-wrapper">


        <section class="content-header">
          <h1>
            Minhas Solicitações 
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Minhas Solicitações</a></li>
          </ol>
        </section>


        <section class="content">

    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-md-1">
            <div class="form-group">
              <button type="button" class="btn bg-green form-control"  >TODOS</button>
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-group">
              <button type="button" class="btn bg-blue form-control"  >ATIVOS</button>
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-group">
              <button type="button" class="btn bg-red form-control"  >INATIVOS</button>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
                      <select class="form-control select2" style="width: 100%;" >
                        <option selected="selected">MÊS</option>
                        <option>JUNHO</option>
                        <option>JULHO</option>
                        <option>AGOSTO</option>
                      </select>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
                      <select class="form-control select2" style="width: 100%;" >
                        <option selected="selected">ANO</option>
                        <option>2016</option>
                        <option>2015</option>
                        <option>2014</option>
                      </select>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
                      <select class="form-control select2" style="width: 100%;" >
                        <option selected="selected">STATUS</option>
                        <option>ENTREGUE</option>
                        <option>AGUARDANDO</option>
                        <option>PRODUÇÃO</option>
                      </select>
            </div>
          </div>
            <div class="col-md-3">
              <div class="form-group">
                      <select class="form-control select2" style="width: 100%;" >
                        <option selected="selected">Local de Entrega</option>
                        <option>Av Prof Noé Azevedo, 208 - São Paulo</option>
                        <option>Rua Major Freite, 548 - São Paulo</option>
                        <option>Rua Antonio Costa Magueta, 62 - Cerquilho</option>
                      </select>
                    </div>
            </div>
        </div>
      </div>
    </div>
         
          <ul class="timeline"> 

              <!-- timeline time label -->
              <li class="time-label">
                  <span class="bg-black">
                      05 Agosto
                  </span>
              </li>
              <!-- /.timeline-label -->

              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-time bg-blue"></i>
                  <div class="timeline-item">
                  <button class="btn btn-box-tool  time" data-toggle="tooltip" title="" data-original-title="Collapse" style="color: #ff6600;"><i id="" class="fa  fa-close"></i> CANCELAR</button>
                    <button class="btn btn-box-tool abrir time" data-toggle="tooltip" title="Collapse"><i id="amplia" class="fa fa-plus"></i></button>
                     <h3 class="timeline-header"><strong><a href="#">PR-0045754</a> / Batom /  6500 unidade / Aguardando</strong></h3>
                  
                  
                  
                  <div class="conteudo timeline-body" style="display:none">

                     <div class="row " id="example2">
                    <div class="col-md-12">

                    <strong>Data da Solicitação:</strong> 10/08/2016 <br>
                  <strong>Entrega:</strong> Av Prof Noé Azevedo, 208, cj 61<br><br>

                      
                      <img src="images/exemplo.jpg" class="img-responsive">


                    </div>
                  </div>

                   </div>
                   
                   <script>
              					$( ".abrir" ).click(function() {
              					  $( ".conteudo" ).toggle( "slow" );
                          $("#amplia").toggleClass('fa-minus');
              					  
              					});

        					</script>    
				</div>

                  
                  
              </li>
              <!-- END timeline item -->

              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-ok bg-green"></i>
                  <div class="timeline-item">
                     <h3 class="timeline-header"><strong><a href="#">PR-0045754</a> / Maquiagem / 8000 unidade / Aguardando</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->

              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-remove bg-red"></i>
                  <div class="timeline-item">
                     <h3 class="timeline-header"><strong><a href="#">PR-0045754</a> /  Maquiagem /900 unidade / Aguardando</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->
                
              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-cog bg-yellow"></i>
                  <div class="timeline-item">
                     <h3 class="timeline-header"><strong><a href="#">PR-0045754</a> / Batom / 600 unidade / Aguardando</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->


          </ul>
          <ul class="timeline"> 

              <!-- timeline time label -->
              <li class="time-label">
                  <span class="bg-black">
                      10 Julho
                  </span>
              </li>
              <!-- /.timeline-label -->

              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-time bg-blue"></i>
                  <div class="timeline-item">
                     <h3 class="timeline-header"><strong><a href="#">PR-0045754</a> /  Maquiagem /200 unidade / Aguardando</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->

              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-ok bg-green"></i>
                  <div class="timeline-item">
                     <h3 class="timeline-header"><strong><a href="#">PR-0045754</a> / Batom / 400 unidade / Aguardando</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->

              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-remove bg-red"></i>
                  <div class="timeline-item">
                     <h3 class="timeline-header"><strong><a href="#">PR-0045754</a> /  Maquiagem / 20 unidade / Aguardando</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->
                
              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-cog bg-yellow"></i>
                  <div class="timeline-item">
                     <h3 class="timeline-header"><strong><a href="#">PR-0045754</a> / Perfume / 5100 unidade / Aguardando</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->


          </ul>

        </section>
      </div>






<!-- footer -->
<?php include 'inc_footer.php' ?>
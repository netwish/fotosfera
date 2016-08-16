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
                    <button class="btn btn-box-tool abrir time" data-toggle="tooltip" title="Collapse"><i id="amplia" class="fa fa-plus"></i></button>
                     <h3 class="timeline-header"><strong><a href="#">SE-0045754</a> / Produto XY / 500 unidade / Produção</strong></h3>
                  
                  
                  
                  <div class="conteudo timeline-body" style="display:none">
                  <strong>Data da Solicitação:</strong> 10/08/2016 <br>
                  <strong>Entrega:</strong> Av Prof Noé Azevedo, 208, cj 61<br>
                  <img src="images/exemplo.jpg" class="img-responsive" height="150"> </div>
                   
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
                     <h3 class="timeline-header"><strong><a href="#">SE-0045754</a> / Produto XY / 500 unidade / Produção</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->

              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-remove bg-red"></i>
                  <div class="timeline-item">
                     <h3 class="timeline-header"><strong><a href="#">SE-0045754</a> / Produto XY / 500 unidade / Produção</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->
                
              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-cog bg-yellow"></i>
                  <div class="timeline-item">
                     <h3 class="timeline-header"><strong><a href="#">SE-0045754</a> / Produto XY / 500 unidade / Produção</strong></h3>
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
                     <h3 class="timeline-header"><strong><a href="#">SE-0045754</a> / Produto XY / 500 unidade / Produção</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->

              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-ok bg-green"></i>
                  <div class="timeline-item">
                     <h3 class="timeline-header"><strong><a href="#">SE-0045754</a> / Produto XY / 500 unidade / Produção</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->

              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-remove bg-red"></i>
                  <div class="timeline-item">
                     <h3 class="timeline-header"><strong><a href="#">SE-0045754</a> / Produto XY / 500 unidade / Produção</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->
                
              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="glyphicon glyphicon-cog bg-yellow"></i>
                  <div class="timeline-item">
                     <h3 class="timeline-header"><strong><a href="#">SE-0045754</a> / Produto XY / 500 unidade / Produção</strong></h3>
                  </div>
              </li>
              <!-- END timeline item -->


          </ul>

        </section>
      </div>






<!-- footer -->
<?php include 'inc_footer.php' ?>
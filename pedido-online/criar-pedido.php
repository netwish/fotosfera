<?php include 'inc_topo.php' ?>



<div class="content-wrapper">




       
  <section class="content-header">
    <h1>Criar <small>- Pedido Online</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Criar</a></li>
      <li class="active">Pedido Online</li>
    </ol>
  </section>

  <section class="content">




  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Criar Solicitação</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
        <div class="row">
                      
                      
                      
                               <div class="col-md-6">
                                <div class="form-group">
                                  <label>Produto</label>
                                  <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Selecione</option>
                                    <option>Batom</option>
                                    <option>Base</option>
                                    <option>Rimel</option>
                                    <option>Amostra</option>
                                  </select>
                                </div><!-- /.form-group -->
                               </div><!-- /.col --> 
                                               
                            
                               

		  <div class="col-md-2">
                                <div class="form-group">
                                  <label>Quantidade</label>
                                  <input class="form-control" type="text" />
                                </div><!-- /.form-group -->
                              </div><!-- /.col --> 
                              
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Local de Entrega</label>
                                  <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Selecione</option>
                                    <option>Av Prof Noé Azevedo, 208 - São Paulo</option>
                                    <option>Rua Major Freite, 548 - São Paulo</option>
                                    <option>Rua Antonio Costa Magueta, 62 - Cerquilho</option>
                                  </select>
                                </div><!-- /.form-group -->
                              </div><!-- /.col -->       



        </div>
     </div><!-- /.box-body -->
    
   </div>
   
   
   

  <div class="box">
    <div class="box-header with-border">
        <div class="pull-right"><h3 class="box-title orange"><strong>BTG 2.0</strong></h3></div>
        <div class="pull-left"><h3 class="box-title">Layout Previsto</h3></div>
      </div>
    <div class="box-body">
      <div class="row"><img class="img-responsive" src="images/exemplo.jpg" style="margin: 0 auto;"></div>
    </div><!-- /.box-body -->
  </div>


  <button type="button" class="btn bg-orange">ENVIAR</button>

  </section>


</div>


<!-- footer -->
<?php include 'inc_footer.php' ?>
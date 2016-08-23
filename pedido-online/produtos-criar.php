<?php include 'inc_topo.php' ?>



<div class="content-wrapper">




       
  <section class="content-header">
    <h1>Criar Produto<small> - Pedido Online</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Criar Produto</a></li>
      <li class="active">Pedido Online</li>
    </ol>
  </section>

  <section class="content">

  <div class="box">

    <div class="box-body">
        <div class="row">

              <div class="col-md-1">
                  <div class="form-group">
                      <label>Código</label>
                      <input type="text" class="form-control" value="" />
                  </div><!-- /.form-group -->
              </div><!-- /.col --> 

              <div class="col-md-7">
                  <div class="form-group">
                      <label>Nome</label>
                      <input type="text" class="form-control" value="" />
                   </div><!-- /.form-group -->
              </div><!-- /.col --> 

              <div class="col-md-4">
                  <div class="form-group">
                      <label>Categoria</label>
                      <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Selecione</option>
                          <option>Categoria 1</option>
                          <option>Categoria 2</option>
                          <option>Categoria 3</option>
                      </select>
                   </div><!-- /.form-group -->
              </div><!-- /.col --> 

              <div class="col-md-2">
                  <div class="form-group">
                      <label>Marca</label>
                      <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Selecione</option>
                          <option>Marca 1</option>
                          <option>Marca 2</option>
                          <option>Marca 3</option>
                      </select>
                   </div><!-- /.form-group -->
              </div><!-- /.col --> 

              <div class="col-md-2">
                        <div class="form-group">
                            <label>Tipo</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Selecione</option>
                                <option>Fragrância</option>
                                <option>Collors</option>
                                <option>Skil</option>
                            </select>
                         </div><!-- /.form-group -->
                    </div><!-- /.col --> 

                                         
      				<div class="col-md-4">
                  <div class="form-group">
                      <label>Descrição 1</label>
                      <input type="text" class="form-control" value="" />
                   </div><!-- /.form-group -->
              </div><!-- /.col --> 

              <div class="col-md-4">
                  <div class="form-group">
                      <label>Descrição 2</label>
                      <input type="text" class="form-control" value="" />
                   </div><!-- /.form-group -->
              </div><!-- /.col --> 

              
        </div>

                <div class="row">

                <div class="col-md-2">
                          <div class="form-group">
                             <label>Preço</label>
                             <input type="text" class="form-control" value="" />
                          </div><!-- /.form-group -->
                      </div><!-- /.col -->

                      <div class="col-md-2">
                          <div class="form-group">
                             <label>Preço 2 </label>
                             <input type="text" class="form-control" value="" />
                          </div><!-- /.form-group -->
                      </div><!-- /.col -->                  

                      <div class="col-md-1">
                            <div class="form-group">
                               <label>Volumetria</label>
                               <input type="text" class="form-control" value="" />
                            </div><!-- /.form-group -->
                       </div><!-- /.col -->

                       <div class="col-md-3">
                          <div class="form-group">
                             <label>Modelo de etiqueta</label>
                             <select class="form-control select2" style="width: 100%;">
                                 <option selected="selected">Selecione</option>
                                 <option>Modelo 1</option>
                                 <option>Modelo 2</option>
                                 <option>Modelo 3</option>
                             </select>
                          </div><!-- /.form-group -->
                     </div><!-- /.col -->
                     
                      <div class="col-md-4">
                          <div class="form-group">
                             <label>Modelo de etiqueta 2</label>
                             <select class="form-control select2" style="width: 100%;">
                                 <option selected="selected">Selecione</option>
                                 <option>Modelo 1</option>
                                 <option>Modelo 2</option>
                                 <option>Modelo 3</option>
                             </select>
                          </div><!-- /.form-group -->
                     </div><!-- /.col -->        

                </div><!-- /.row -->


     </div><!-- /.box-body -->
    
   </div>
   
   
   
<!--
  <div class="box">
    <div class="box-header with-border">
        <div class="pull-left"><h3 class="box-title">Imagem do Produto</h3></div>
      </div>
    <div class="box-body">
      <div class="row"><img class="img-responsive" src="images/produto.jpg" style="margin: 0 auto;"></div><br>
      <div align="center"><button type="button" class="btn bg-orange ">ALTERAR IMAGEM</button></div>
    </div><!-- /.box-body 
  </div> -->


  <button type="button" class="btn bg-orange">CADASTRAR</button>

  </section>


</div>


<!-- footer -->
<?php include 'inc_footer.php' ?>
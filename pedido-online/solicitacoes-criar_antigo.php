<?php include 'inc_topo.php' ?>



<div class="content-wrapper">




       
  <section class="content-header">
    <h1>Criar Solicitação <small>- Pedido Online</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Criar Solicitação</a></li>
      <li class="active">Pedido Online</li>
    </ol>
  </section>

  <section class="content">

  <div class="box">
    <div class="box-body">
        <div class="row">
                      


                      
                              
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Tipo</label>
                                  <select class="form-control select2" style="width: 100%;" id="txttipo">
                                    <option selected="selected">Selecione</option>
                                    <option>Colors</option>
                                    <option>Fragrância</option>
                                    <option>Skincare</option>
                                  </select>
                                </div><!-- /.form-group -->
                               </div><!-- /.col --> 


                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Marca</label>
                                  <select class="form-control select2" style="width: 100%;" id="txtmarca">
                                    <option selected="selected">Selecione</option>
                                    <option>Marca 1</option>
                                    <option>Marca 2</option>
                                    <option>Marca 3</option>
                                  </select>
                                </div><!-- /.form-group -->
                               </div><!-- /.col --> 

                                <div class="col-md-4">
                                <div class="form-group">
                                  <label>Categoria</label>
                                  <select class="form-control select2" style="width: 100%;" id="txtcateg">
                                    <option selected="selected">Selecione</option>
                                    <option>Categoria 1</option>
                                    <option>Categoria 2</option>
                                    <option>Catgoria 3 </option>
                                  </select>
                                </div><!-- /.form-group -->
                               </div><!-- /.col --> 
                      
                               <div class="col-md-6">
                                <div class="form-group">
                                  <label>Produto</label>
                                  <select class="form-control select2 busca_facil" style="width: 100%;" id="txttipo">
                                    <option selected="selected">Selecione</option>
                                    <option>Produto 1</option>
                                    <option>Produto 2</option>
                                    <option>Produto 3</option>
                                  </select>
                                </div><!-- /.form-group -->
                               </div><!-- /.col -->  
                                               
                            
                               

		                         <div class="col-md-2">
                                <div class="form-group">
                                  <label>Quantidade</label>
                                  <input class="form-control" type="text" id="txtqtd" />
                                </div><!-- /.form-group -->
                              </div><!-- /.col --> 
                              
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Local de Entrega</label>
                                  <select class="form-control select2" style="width: 100%;" id="txtent">
                                    <option selected="selected">Selecione</option>
                                    <option>Av Prof Noé Azevedo, 208 - São Paulo</option>
                                    <option>Rua Major Freite, 548 - São Paulo</option>
                                    <option>Rua Antonio Costa Magueta, 62 - Cerquilho</option>
                                  </select>
                                </div><!-- /.form-group -->
                              </div><!-- /.col -->       



 </div>



                    <div class="row">
                      <div class="col-md-1">
                        <button type="button" onclick="AddTableRow()" class="btn bg-blue">ADICIONAR</button>
                      </div>
                    </div>


     </div><!-- /.box-body -->    
   </div><!-- /.box -->

              <div class="box">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr> 
                        <th></th>        
                        <th>Tipo</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Local da Entrega</th>
                      </tr>
                    </thead>

                    <tbody>
                      <!--<tr>
                        <td> 
                            <button type="button" class="btn btn-default" aria-label="Alinhar na esquerda" onclick="RemoveTableRow(this)">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                         </td>                        
                        <td>SE78946</td>
                        <td>Base xyz</td>
                        <td>Modelo 1</td>
                        <td>40 ml</td>
                        <td>58.50</td>
                      </tr>
                      
                      <tr>
                        <td>  
                         <button type="button" class="btn btn-default" aria-label="Alinhar na esquerda" onclick="RemoveTableRow(this)">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                           </td> 
                        <td>SE78946</td>
                        <td>Batom</td>
                        <td>Modelo 1</td>
                        <td>50g</td>
                        <td>15.80</td>
                      </tr>  -->                   
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->



  <button type="button" class="btn bg-green">ENVIAR</button>
  <a href="solicitacoes-criar.php" class="btn btn-danger" role="button">CANCELAR</a>

  </section>


</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Produto 1</h4>
      </div>
      <div class="modal-body">
        <p><img src="http://www.netwish.com.br/clientes/fotosfera/pedido-online/images/exemplo.jpg" class="img-responsive" /></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<script>
(function($) {
  AddTableRow = function() {

    var newRow = $("<tr>");
    var cols = "";


    cols += '<td>';
      cols += '<button type="button" class="btn_mini btn-default" aria-label="Alinhar na esquerda" onclick="RemoveTableRow(this)">';
      cols += '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
      cols += '</button>   <button type="button" class="btn_mini btn-default" data-toggle="modal" data-target="#myModal"  ><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></button>';
    cols += '</td>';

    cols += '<td>';
      cols += $('#txttipo').val();
    cols += '</td>'

    cols += '<td>';
      cols += $('#txtmarca').val();
    cols += '</td>'

    cols += '<td>';
      cols += $('#txtcateg').val();
    cols += '</td>'

    cols += '<td>';
      cols += $('#txtprod').val();
    cols += '</td>'

    cols += '<td>';
      cols += $('#txtqtd').val();
    cols += '</td>'

    cols += '<td>';
      cols += $('#txtent').val();
    cols += '</td>'

    newRow.append(cols);
    $("#example1").append(newRow);

    return false;
  };
})(jQuery);


(function($) {

  RemoveTableRow = function(handler) {
    var tr = $(handler).closest('tr');

    tr.fadeOut(400, function(){ 
      tr.remove(); 
    }); 

    return false;
  };
})(jQuery);

</script>

<script type="text/javascript">
$(document).ready(function() {
  $(".busca_facil").select2();
});
</script>


<!-- footer -->
<?php include 'inc_footer.php' ?>
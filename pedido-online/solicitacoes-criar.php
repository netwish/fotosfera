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
                      
                               <div class="col-md-4">
                                <div class="form-group">
                                  <label>Produto</label>
                                  <input type="text" class="form-control" id="txtprod">
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
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Local da Entrega</th>
                      </tr>
                    </thead>

                    <tbody>
                      <!-- Aqui vão os produtos da tabela -->         
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->



  <button type="button" class="btn bg-orange">ENVIAR</button>
  <button type="button" class="btn btn-danger">CANCELAR</button>

  </section>


</div>

<script>
$(document).ready(function(){
    $('#example2').DataTable({
      "language": {
            "sEmptyTable": "Nenhum registro encontrado",
          "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
          "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
          "sInfoFiltered": "(Filtrados de _MAX_ registros)",
          "sInfoPostFix": "",
          "sInfoThousands": ".",
          "sLengthMenu": "_MENU_ resultados por página",
          "sLoadingRecords": "Carregando...",
          "sProcessing": "Processando...",
          "sZeroRecords": "Nenhum registro encontrado",
          "sSearch": "Pesquisar",
          "oPaginate": {
              "sNext": "Próximo",
              "sPrevious": "Anterior",
              "sFirst": "Primeiro",
              "sLast": "Último"
          },
          "oAria": {
              "sSortAscending": ": Ordenar colunas de forma ascendente",
              "sSortDescending": ": Ordenar colunas de forma descendente"
          }
        }
    });
});

(function($) {
  AddTableRow = function() {

    var newRow = $("<tr>");
    var cols = "";


    cols += '<td>';
      cols += '<button type="button" class="btn btn-default" aria-label="Alinhar na esquerda" onclick="RemoveTableRow(this)">';
      cols += '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
      cols += '</button>';
    cols += '</td>';

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


<!-- footer -->
<?php include 'inc_footer.php' ?>
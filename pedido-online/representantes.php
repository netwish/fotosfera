
<?php $url = $_SERVER['PHP_SELF']; ?>

<?php include 'inc_topo.php' ?>

    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Cliente </h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
              
              
              
                 <div class="col-md-2">
                  <div class="form-group">
                    <label>Tipo do pedido</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Selecione</option>
                      <option>Novo</option>
                      <option>Modificação</option>
                      <option>Repetição</option>
                      <option>Amostra</option>
                      <option>Lote Teste</option>
                    </select>
                  </div>
                 </div>
                                 
                 

               <div class="col-md-10">
                  <div class="form-group">
                    <label>Cliente</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Selecione</option>
                      <option>Netwish</option>
                      <option>Camargo Embalagens</option>
                      <option>Cipatex</option>
                      <option>Santa Elena</option>
                      <option>Dia Brasil</option>
                      <option>M dias Branco</option>
                    </select>
                  </div><!-- /.form-group -->
                </div>
                
                <div class="col-md-10">
                  <div class="form-group">
                    <label>Transportadora</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Selecione</option>
                      <option>TRANSBOM</option>
                      <option>OSTEL-CARGAS</option>
                      <option>TRANSLLOYDS</option>
                      <option>SOUL</option>
                      <option>RODOCERTO</option>
                      <option>LUNA EXPRESS</option>
                      <option>TRANSWELL'S</option>
                    </select>
                  </div><!-- /.form-group -->
                  
                </div><!-- /.col -->              
                
                
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Frete</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Selecione</option>
                      <option>CIF</option>
                      <option>FOB</option>
                      <option>RETIRADA</option>
                    </select>
                  </div><!-- /.form-group -->
                  
                </div><!-- /.col -->
              </div>
            </div>
        </div>


           <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Produto </h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
               <div class="col-md-8">
                  <div class="form-group">
                  <label>Produto</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Selecione</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div><!-- /.form-group -->
                  
                </div><!-- /.col -->
                
                
                
                <div class="col-md-2">
                  <div class="form-group">                  
                    <label>Kg</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Selecione</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div><!-- /.form-group -->
                  
                </div><!-- /.col -->
                
                
                
                <div class="col-md-2">
                 <div class="form-group">
                    <label>Data de Entrega</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/aaaa'" data-mask>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                </div><!-- /.col -->
                
              </div>
            </div>
          </div>



           <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Estrutura </h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                 <div class="col-md-3">
                  <div class="form-group">
                    <label>COMPOSIÇÃO DA ESTRUTURA</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Selecione</option>
                      <option>Adesivo</option>
                      <option>Aluminio</option>
                      <option>BOPP Mate</option>
                      <option>BOPP Metalizado</option>
                      <option>BOPP Perolizado</option>
                      <option>BOPP Transparente</option>
                      <option>Metalização</option>
                      <option>Nylonpoli</option>
                    </select>
                  </div><!-- /.form-group -->                  
                </div><!-- /.col -->                
                                                                       

                
                <div class="col-md-1">
                  <div class="form-group">
                    <label>g/m2</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Selecione</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div><!-- /.form-group -->                  
                </div><!-- /.col -->

                

                

                

              </div>
            </div>
          </div>





           <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Bobinas </h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Largura </label>
                          <select class="form-control select2" style="width: 100%;">
                          </select>                        
                      </div><!-- /.form-group -->
                    </div>   

                   

                     

                    <div class="col-md-3">
                     <div class="form-group">
                      <label>Diamentro Interno </label>
                      <select class="form-control select2" style="width: 100%;">
                      </select>
                    </div><!-- /.form-group --> 
                    </div>

                    <div class="col-md-3">
                     <div class="form-group">
                      <label>Diametro Externo</label>
                      <select class="form-control select2" style="width: 100%;">
                      </select>
                    </div><!-- /.form-group -->  
                    </div> 

                    <div class="col-md-3">
                     <div class="form-group">
                      <label>Passo Fotocelula </label>
                      <select class="form-control select2" style="width: 100%;">
                      </select>
                    </div><!-- /.form-group --> 
                    </div> 



                    <div class="col-md-3">
                    <div class="form-group">
                      <label>Embobinamento </label> 
                       <select class="form-control select2" style="width: 100%;">
                      </select>                     
                    </div><!-- /.form-group -->                  
                  </div><!-- /.col -->


                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Emenda Tipo </label> 
                       <select class="form-control select2" style="width: 100%;">
                      </select>                     
                    </div><!-- /.form-group -->                  
                  </div><!-- /.col -->

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Quantidade </label> 
                       <select class="form-control select2" style="width: 100%;">
                      </select>                     
                    </div><!-- /.form-group -->                  
                  </div><!-- /.col -->

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Tubete </label> 
                       <select class="form-control select2" style="width: 100%;">
                      </select>                     
                    </div><!-- /.form-group -->                  
                  </div><!-- /.col -->


                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Impressao </label><br>  
                        <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Selecione</option>
                              <option>INTERNA</option>
                              <option>EXTERNA</option>
                              <option>SEM IMPRESSÃO</option>  
                       </select> 
                    </div><!-- /.form-group -->                  
                  </div><!-- /.col -->






              </div>
            </div>
          </div>


           <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Padrão de Cores </h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">                
                   <div class="col-md-12">
                    <div class="form-group">
                      
                      <textarea rows="4" style="width:100%;"></textarea>                      
                    </div><!-- /.form-group -->                  
                  </div><!-- /.col -->
              </div>
            </div>
          </div>


<div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Produção </h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                  <label>Tempo de Envase</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Selecione</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div><!-- /.form-group -->
                  
                </div><!-- /.col -->
                
                
                
                <div class="col-md-4">
                  <div class="form-group">                  
                    <label>Maquina</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Selecione</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div><!-- /.form-group -->
                  
                </div><!-- /.col -->
                
                
                
                <div class="col-md-4">
                  <div class="form-group">                  
                    <label>Velocidade</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Selecione</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div><!-- /.form-group -->
                  
                </div><!-- /.col -->
                
              </div>
            </div>
          </div>

          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Observações </h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">              
               <div class="col-md-3">
                    <div class="form-group">
                      <label>Acondicionamento </label> 
                       <select class="form-control select2" style="width: 100%;">
                      </select>                     
                    </div><!-- /.form-group -->                  
                  </div><!-- /.col -->

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Identificação </label> 
                       <select class="form-control select2" style="width: 100%;">
                      </select>                     
                    </div><!-- /.form-group -->                  
                  </div><!-- /.col -->

                  

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Observações </label> 
                       <textarea rows="4" style="width:100%;"></textarea>      
                    </div><!-- /.form-group -->                  
                  </div><!-- /.col -->
                 
              </div><!-- /.row -->
            </div><!-- /.box-body -->
          </div><!-- /.box -->














    <!-- Includes -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page script -->
    
    

<script>    
	function format (option) {
			console.log(option);
			if (!option.id) { return option.text; }
			var ob = option.text + '<img src="https://lh4.ggpht.com/wKrDLLmmxjfRG2-E-k5L5BUuHWpCOe4lWRF7oVs1Gzdn5e5yvr8fj-ORTlBF43U47yI=w64" />';	// replace image source with option.img (available in JSON)
			return ob;
		};
  $("#myval").select2({
  		placeholder: "Select something!!",
	    width: "50%",
      allowClear: true,
	    templateResult: format,
	    templateSelection: function (option) {
	        if (option.id.length > 0 ) {
	            return option.text + "<i class='fa fa-dot-circle-o'></i>";
	        } else {
	            return option.text;
	        }
	    },
      escapeMarkup: function (m) {
				return m;
			}
	});
</script>




    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>

      </section><!-- /.content -->
</div><!-- /.content-wrapper -->
       
<?php include 'inc_footer.php' ?>

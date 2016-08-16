<?php include 'inc_topo.php' ?>



<div class="content-wrapper">
       
        <section class="content-header">
          <h1>Criar Modelo
            <small>- Pedidos Online</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="camargo2.php"><i class="fa fa-dashboard"></i> Criar Modelo</a></li>
            <li class="active">Pedidos Online</li>
          </ol>
        </section>

        
  <section class="content">

  <div class="box">
    <div class="box-body">
        <div class="row">
                      

                            <div class="col-md-3">
                                <div class="form-group">
                                  <label>Nome do Modelo</label>
                                  <input type="text" class="form-control" value="" name="" />
                                </div><!-- /.form-group -->
                              </div><!-- /.col -->
                              
                      
                               <div class="col-md-3">
                                <div class="form-group">
                                  <label>Texto 1</label>
                                  <input type="text" class="form-control" value="" id="txt1" />
                                </div><!-- /.form-group -->
                               </div><!-- /.col --> 
                                         
                  <div class="col-md-3">
                                <div class="form-group">
                                  <label>Texto 2</label>
                                  <input type="text" class="form-control" value=""  id="txt2" />
                                </div><!-- /.form-group -->
                              </div><!-- /.col --> 
                              
                  <div class="col-md-3">
                                <div class="form-group">
                                  <label>Texto 3</label>
                                  <input type="text" class="form-control" value=""   id="txt3" />
                                </div><!-- /.form-group -->
                              </div><!-- /.col -->
                              

                                    



        </div>
     </div><!-- /.box-body -->
    
   </div>
   
   
   

  <div class="box">
    <div class="box-header with-border">
        <div class="pull-left"><h3 class="box-title">Montagem</h3></div>
      </div>
    <div class="box-body">
      <div class="row">

      <div class="teste"></div>

      <div class="box-modelo" style="margin-top: 180px; margin-left: 50px;font-size: 50px;" id="output1"></div>
      <div class="box-modelo" style="margin-top: 280px; margin-left: 50px;font-size: 30px;" id="output2"></div>
      <div class="box-modelo" style="margin-top: 291px;margin-left: 756px;font-size: 60px;" id="output3"></div>
      <img class="img-responsive" src="images/exemplo-modelo.jpg" style="margin: 10px;"></div><br>
      <div><button type="button" class="btn bg-orange ">ALTERAR IMAGEM</button></div>
    </div><!-- /.box-body -->
  </div>


  <button type="button" class="btn bg-orange">CADASTRAR</button>

  </section>



</div>



  <div>
    

  </div>

<style type="text/css">
  
.box-modelo{
    position: absolute;
    border: 1px #f66003 solid;
    color: #fff;
}

</style>



<script>

$(function(){
  $('#txt1').keydown(function(){
    setTimeout(function() {
      $('#output1').text($('#txt1').val());
    }, 50);
  });
});
$(function(){
  $('#txt2').keydown(function(){
    setTimeout(function() {
      $('#output2').text($('#txt2').val());
    }, 50);
  });
});
$(function(){
  $('#txt3').keydown(function(){
    setTimeout(function() {
      $('#output3').text($('#txt3').val());
    }, 50);
  });
});

</script>




<!-- footer -->
<?php include 'inc_footer.php' ?>


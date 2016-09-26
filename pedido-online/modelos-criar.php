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
                      

                            <div class="col-md-6">
                                <div class="form-group">
                                  <label>Nome do Modelo</label>
                                  <input type="text" class="form-control" value="" name="" />
                                </div><!-- /.form-group -->
                              </div><!-- /.col -->
                              
                      
                               <div class="col-md-6">
                                <div class="form-group">
                                  <label>Produto</label>
                                  <select class="form-control select2 busca_facil" style="width: 100%;" id="txttipo">
                                    <option>Selecione</option>
                                    <option value="1" selected="selected">Produto 1</option>
                                    <option value="2">Produto 2</option>
                                    <option value="3">Produto 3</option>
                                  </select>
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
      
      	<div class="col-md-7">

          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #draggable { width: 150px;}
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#output1" ).draggable();
    $( "#output2" ).draggable();
    $( "#output3" ).draggable();
    $( "#output4" ).draggable();
    $( "#output5" ).draggable();
  } );
  </script>
 
 

          <div class="box-modelo" style="margin-top: 20px; margin-left: 40px;font-size: 20px;" id="output1">Nome</div>
          <div class="box-modelo" style="margin-top: 90px; margin-left: 40px;font-size: 20px;" id="output2">Descrição</div>
          <div class="box-modelo" style="margin-top: 160px;margin-left: 40px;font-size: 20px;" id="output3">Preço</div>
          <div class="box-modelo" style="margin-top: 230px;margin-left: 40px;font-size: 20px;" id="output4">Promoção</div>
          <div class="box-modelo" style="margin-top: 200px;margin-left: 40px;width:350px;" id="output5">
              <img id="img_produto"  class="img-responsive" src="images/logo_teste1.png">
          </div>



          <img id="img_modelo" class="img-responsive" src="images/exemplo-modelo.jpg" style="margin: 10px;">

          <div>

            <a href="#" class="btn bg-orange modelo1" role="button">ALTERAR IMAGEM 1</a> 
            <a href="#" class="btn bg-orange modelo2" role="button">ALTERAR IMAGEM 2</a> 
            <a href="#" class="btn bg-orange modelo3" role="button">ALTERAR IMAGEM 3</a> 

            </div>

        </div>
        
        <div class="col-md-5">
        <div class="col-md-6"><strong>Nome</strong></div>
            <div class="col-md-3 text-center"><strong>Largura</strong></div>
            <div class="col-md-3 text-center"><strong>Fonte</strong></div>
<div class="cb" style="color:#fff;">.</div>
          <div class="col-md-6"><input type="text" class="form-control" placeholder="Nome" id="txt1" value="Nome" /></div>
            <div class="col-md-3"><input type="number" class="form-control" placeholder="" id="txt1d" step="10" value="200" /></div>
            <div class="col-md-3"><input type="number" class="form-control" placeholder="" id="txt1e" step="2" value="20" /></div>
<div class="cb" style="color:#fff;">.</div>
          <div class="col-md-6"><input type="text" class="form-control" placeholder="Descrição" id="txt2" value="Descrição" /></div>
            <div class="col-md-3"><input type="number" class="form-control" placeholder="" id="txt2d" step="10" value="200" /></div>
            <div class="col-md-3"><input type="number" class="form-control" placeholder="" id="txt2e" step="2" value="20" /></div>
<div class="cb" style="color:#fff;">.</div>
          <div class="col-md-6"><input type="text" class="form-control" placeholder="Preço" id="txt3" value="Preço" /></div>
            <div class="col-md-3"><input type="number" class="form-control" placeholder="" id="txt3d" step="10" value="40" /></div> 
            <div class="col-md-3"><input type="number" class="form-control" placeholder="" id="txt3e" step="2" value="20" /></div>
<div class="cb" style="color:#fff;">.</div>
          <div class="col-md-6"><input type="text" class="form-control" placeholder="Preço Promoção" id="txt4" value="Promoção" /></div>
            <div class="col-md-3"><input type="number" class="form-control" placeholder="" id="txt4d" step="10" value="40" /></div> 
            <div class="col-md-3"><input type="number" class="form-control" placeholder="" id="txt4e" step="2" value="20" /></div>
<div class="cb" style="color:#fff;">.</div>
          <div class="col-md-6"><input type="text" class="form-control" placeholder="Logo" id="txt5" value="Img" /></div>
            <div class="col-md-3"><input type="number" class="form-control" placeholder="" id="txt5d" step="10" value="350" /></div> 
            <div class="col-md-3"><input type="number" class="form-control" placeholder="" id="txt5e" step="2" value="20" /></div>



        </div>
        
      </div>
      
     
    </div><!-- /.box-body -->
    
    
  </div>


  <button type="button" class="btn bg-blue">CADASTRAR</button>




  </section>



</div>



  <div>
    

  </div>




<style type="text/css">
  
.box-modelo{
    position: absolute;
    /*border: 1px #f66003 solid;*/
    border: none;
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


  $("#txt1b").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output1').css( "margin-left", $('#txt1b').val() + "px" );
    }, 50);
  });

  $("#txt1c").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output1').css( "margin-top", $('#txt1c').val() + "px" );
    }, 50);
  });
    $("#txt1d").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output1').css( "width", $('#txt1d').val() + "px" );
    }, 50);
  });  
  $("#txt1e").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output1').css( "font-size", $('#txt1e').val() + "px" );
    }, 50);
  });    


  $('#txt2').keydown(function(){
    setTimeout(function() {
      $('#output2').text($('#txt2').val());
    }, 50);
  });


  $("#txt2b").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output2').css( "margin-left", $('#txt2b').val() + "px" );
    }, 50);
  });

  $("#txt2c").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output2').css( "margin-top", $('#txt2c').val() + "px" );
    }, 50);
  });
    $("#txt2d").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output2').css( "width", $('#txt2d').val() + "px" );
    }, 50);
  }); 
  $("#txt2e").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output2').css( "font-size", $('#txt2e').val() + "px" );
    }, 50);
  });    


  $('#txt3').keydown(function(){
    setTimeout(function() {
      $('#output3').text($('#txt3').val());
    }, 50);
  });


  $("#txt3b").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output3').css( "margin-left", $('#txt3b').val() + "px" );
    }, 50);
  });

  $("#txt3c").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output3').css( "margin-top", $('#txt3c').val() + "px" );
    }, 50);
  });
    $("#txt3d").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output3').css( "width", $('#txt3d').val() + "px" );
    }, 50);
  });   
  $("#txt3e").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output3').css( "font-size", $('#txt3e').val() + "px" );
    }, 50);
  });    


  $('#txt4').keydown(function(){
    setTimeout(function() {
      $('#output4').text($('#txt4').val());
    }, 50);
  });


  $("#txt4b").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output4').css( "margin-left", $('#txt4b').val() + "px" );
    }, 50);
  });

  $("#txt4c").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output4').css( "margin-top", $('#txt4c').val() + "px" );
    }, 50);
  });
    $("#txt4d").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output4').css( "width", $('#txt4d').val() + "px" );
    }, 50);
  });      
  $("#txt4e").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output4').css( "font-size", $('#txt4e').val() + "px" );
    }, 50);
  });    



  $('#txt5').keydown(function(){
    setTimeout(function() {
      $('#output5').text($('#txt5').val());
    }, 50);
  });


  $("#txt5b").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output5').css( "margin-left", $('#txt5b').val() + "px" );
    }, 50);
  });

  $("#txt5c").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output5').css( "margin-top", $('#txt5c').val() + "px" );
    }, 50);
  });
    $("#txt5d").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output5').css( "width", $('#txt5d').val() + "px" );
    }, 50);
  }); 
  $("#txt5e").bind('keyup mouseup', function () {
    setTimeout(function() {
      $('#output5').css( "font-size", $('#txt5e').val() + "px" );
    }, 50);
  });    


   
$( "select" )
  .change(function () {
    var str = "";
    $( "select option:selected" ).each(function() {
      str += $( this ).val() + "";
    });
    $( "#img_produto" ).attr('src', 'images/logo_teste'+str+'.png');
  })
  .change();



  $( ".modelo1" ).click(function() {
    $( "#img_modelo" ).attr('src', 'images/exemplo-modelo.jpg');
  });
  $( ".modelo2" ).click(function() {
    $( "#img_modelo" ).attr('src', 'images/exemplo-modelo2.jpg');
  });
  $( ".modelo3" ).click(function() {
    $( "#img_modelo" ).attr('src', 'images/exemplo-modelo3.jpg');
  });





});

</script>



<!-- footer -->
<?php include 'inc_footer.php' ?>


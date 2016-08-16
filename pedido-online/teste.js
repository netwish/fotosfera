

$(function () {
        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas);

        var areaChartData = {
          labels: ["Salgadinho", "Café Vácuo", "Café", "Biscoito", "Doce", "Rótulo", "Diversos"],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "rgba(210, 214, 222, 1)",
              pointColor: "rgba(210, 214, 222, 1)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
              data: [28, 48, 40, 19, 86, 27, 90]
            }
          ]
        };



        var areaChartOptions = {
        scaleLabel : "<%= 'R$ ' + value    %>",  
          //Boolean - If we should show the scale at all
          
        };
        //Create the line chart
        areaChart.Line(areaChartData, areaChartOptions);


        //-------------
        //- BAR CHART -
        //-------------
    
        var dataBAR = {
          labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
          datasets: [
            {
              label: "Electronics",
              data: [10, 2, 5, 50, 10, 5, 8]
            },
            {
              label: "Digital Goods",
              data: [28, 48, 40, 19, 86, 27,180]
            }
          ]
        };

    
        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = dataBAR;
        barChartData.datasets[1].fillColor = "#ff6600";
        barChartData.datasets[1].strokeColor = "#CE5300";
        barChartData.datasets[0].fillColor = "#c1c7d1";
        barChartData.datasets[0].strokeColor = "#c1c7d1";
        barChartData.datasets[1].pointColor = "#c1c7d1";
        var barChartOptions = {
          responsive: true,
          maintainAspectRatio: true,
      scaleLabel : "<%= 'R$ ' + value    %>",

        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);

//testes vinicius e alex
var myNewChart = new Chart(barChartCanvas).Bar(barChartData, barChartOptions);

$("#barChart").click( 
    function(evt){
        var activePoints = myNewChart.getSegmentsAtEvent(evt);
        var url = "data=" + activePoints[0].data ;
        alert(url);
    }
); 










  //PIE Chart
  var pieData = [
      {value: 96,color:"#F7464A",highlight: "#FF5A5E",label: "ROTO 1"},
      {value: 50,color: "#46BFBD",highlight: "#5AD3D1",label: "ROTO 2"},
      {value: 100,color: "#FDB45C",highlight: "#FFC870",label: "ROTO 3"}
    ]

    var options = {
        tooltipTemplate: "<%= label + ' - ' + value + '% ' %>",       
        onAnimationComplete: function()
        {
          this.showTooltip(this.segments, true);
        },
        tooltipEvents: [],
        showTooltips: true,
        responsive: true,
        maintainAspectRatio: true
      }
    

  Chart.types.Doughnut.extend({
        name: "DoughnutAlt",
        showTooltip: function() {
            this.chart.ctx.save();
            Chart.types.Doughnut.prototype.showTooltip.apply(this, arguments);
            this.chart.ctx.restore();
        },
        draw: function() {
            Chart.types.Doughnut.prototype.draw.apply(this, arguments);

            var width = this.chart.width,
                height = this.chart.height;

            var fontSize = (height / 114).toFixed(2);
            this.chart.ctx.font = fontSize + "em Verdana";
            this.chart.ctx.textBaseline = "middle";

            var text = "82%",
                textX = Math.round((width - this.chart.ctx.measureText(text).width) / 2),
                textY = height / 2;

            this.chart.ctx.fillText(text, textX, textY);
        }
    });

var pieChart = document.getElementById("pieChart").getContext("2d");
new Chart(pieChart).DoughnutAlt(pieData, options);//PIE CHART FIM


});


$(function () {

//PIE Chart 2
  var pieData = [
      {value: 200,color:"#F7464A",highlight: "#FF5A5E",label: "Salgadinho"},
      {value: 150,color: "#46BFBD",highlight: "#5AD3D1",label: "Café Vácuo"},
      {value: 100,color: "#FDB45C",highlight: "#FFC870",label: "Café"},
     {value: 50,color: "#4600cc",highlight: "#4000cc",label: "Biscoito"},
      {value: 100,color: "#5DB45C",highlight: "#5FC870",label: "Doce"}
    ]

    var options = {
        tooltipTemplate: "<%= label + ' - R$ ' + value  %>",        
        onAnimationComplete: function()
        {
          this.showTooltip(this.segments, true);
        },
        tooltipEvents: [],
        showTooltips: true,
        responsive: true,
        maintainAspectRatio: true
      }
    

  Chart.types.Doughnut.extend({
        name: "DoughnutAlt",
        showTooltip: function() {
            this.chart.ctx.save();
            Chart.types.Doughnut.prototype.showTooltip.apply(this, arguments);
            this.chart.ctx.restore();
        }
    });

var pieChart = document.getElementById("pieChart2").getContext("2d");
new Chart(pieChart).DoughnutAlt(pieData, options);//PIE CHART 2 FIM

var myNewChart = new Chart(pieChart).DoughnutAlt(pieData, options);

$("#pieChart2").click( 
    function(evt){
        var activePoints = myNewChart.getSegmentsAtEvent(evt);
        var url = "http://example.com/?label=" + activePoints[0].label + "&value=" + activePoints[0].value;
        alert(url);
    }
); 




        //-------------
        //-BARRA UNICA-
        //-------------
    
        var dataBAR = {
          labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
          datasets: [
            {
              label: "Electronics",
              data: [10, 2, 5, 50, 10, 5, 8]
            }
          ]
        };

    
        var barChartCanvas = $("#barChart2").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = dataBAR;
        barChartData.datasets[0].fillColor = "#ff6600";
        barChartData.datasets[0].strokeColor = "#CE5300";
        barChartData.datasets[0].pointColor = "#c1c7d1";
        var barChartOptions = {
          responsive: true,
          maintainAspectRatio: true,
          scaleLabel : "<%= 'R$ ' + value    %>",
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
});

// Grafico de linha
$(function () {
    
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas);
    
    
        var lineChartData = {
          labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "rgba(210, 214, 222, 1)",
              pointColor: "rgba(210, 214, 222, 1)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
              data: [28, 48, 40, 19, 86, 27, 90]
            }
          ]
        };
    
    var lineOptions = {
      scaleLabel : "<%=  value + ' %'   %>",
          //Boolean - If we should show the scale at all
        };


    
        var lineChartOptions = lineOptions;
        lineChartOptions.datasetFill = false;
        lineChart.Line(lineChartData, lineChartOptions);

});



/*MAPA*////////////////////////////////////////////////////////////////////////////////

  google.load('visualization', '1', {'packages': ['geochart', 'table']});
  google.setOnLoadCallback(drawRegionsMap);
  
function drawRegionsMap() {

      $( "#BR-PE" ).delay( 800 ).removeClass('active');
      $( "#BR-CE" ).delay( 800 ).removeClass('active');
      $( "#BR-MT" ).delay( 800 ).removeClass('active');
      $( "#BR-BA" ).delay( 800 ).removeClass('active');
      $( "#BR-SP" ).delay( 800 ).removeClass('active');

 

      var data = google.visualization.arrayToDataTable([
	  
          ['Estado', 'Fat. x1000'],
          ['BR-SP',   9253.68],
          ['BR-PE',   942.04],
          //sem movimentação em ABRIL['BR-AM',   136.62],  
          // ''    ''         ''     ['BR-AL',   94.24],
          ['BR-BA',   861.99],
          ['BR-CE',   2337.509],
          ['BR-DF',   287.70],
          ['BR-ES',   96.80],
          ['BR-GO',   79.40],
          ['BR-MT',   2251.09],
          ['BR-MS',   71.45],
          ['BR-MG',   504.19],
          //['BR-PA',   123.20],
          //['BR-PB',   474.60],
          ['BR-PR',   273.91],
          ['BR-RJ',   17.05],
          ['BR-RN',   196.37],
          ['BR-RS',   130.25],
          ['BR-RO',   24.98],
          ['BR-SC',   1.38],
          //['BR-SE',   660.00],
          ['BR-TO',   84.20]
      ]);
  
      var view = new google.visualization.DataView(data)
      view.setColumns([0, 1])
		
		var offset = {
            x: 300,
            y: 0
        };
		
      var options = {
          title:'How Much Pizza I Ate Last Night',
          region: 'BR',
          resolution: 'provinces'
      };
  
      var chart = new google.visualization.GeoChart(
      document.getElementById('chart_div'));
      chart.draw(data, options);
  
      var geochart = new google.visualization.GeoChart(
      document.getElementById('chart_div'));
      var options = {
          region: 'BR',
          resolution: 'provinces',
          title:'How Much Pizza I Ate Last Night',
          colorAxis: {
          colors: ['#FFD3B7', '#ff6600']
          } // orange to blue 
      };
      var geochart = new google.visualization.GeoChart(document.getElementById('chart_div'));
      google.visualization.events.addListener(geochart, 'select', function() {
        var selectionIdx = geochart.getSelection()[0].row;
        var stateName = data.getValue(selectionIdx, 0);

        //$( "#revenue-chart" ).removeClass('active');
        //$( "#teste" ).addClass('active');
        if (stateName == "BR-SP" || stateName == "BR-PE" || stateName == "BR-CE" || stateName == "BR-MT" || stateName == "BR-BA"     ){
      console.log(stateName)
      
      $( "#mapa_faturamento" ).removeClass('active');
      $( "#BR-PE" ).removeClass('active');
      $( "#BR-CE" ).removeClass('active');
      $( "#BR-MT" ).removeClass('active');
      $( "#BR-BA" ).removeClass('active');
      $( "#BR-BA" ).removeClass('active');
      
      $( ".mapa_faturamento" ).removeClass('active');
      $( ".BR-PE" ).removeClass('active');
      $( ".BR-CE" ).removeClass('active');
      $( ".BR-MT" ).removeClass('active');
      $( ".BR-BA" ).removeClass('active');
      $( ".BR-BA" ).removeClass('active');

      $( "."+stateName ).addClass('active');
      $( "#"+stateName ).addClass('active');

    }
    
        //window.open('http://en.wikipedia.org/wiki/' + stateName);
        //$( "#teste" ).load( "ajax/test.html" );
      });
      geochart.draw(data, options);
  
  };


// Grafico linha unica SP
$(function () {




Chart.types.Line.extend({
    name: "LineAlt",
    draw: function () {
        Chart.types.Line.prototype.draw.apply(this, arguments);
        
        var ctx = this.chart.ctx;
        ctx.save();
        // text alignment and color
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";
        ctx.fillStyle = this.options.scaleFontColor;
        // position
        var x = this.scale.xScalePaddingLeft * 0.2;
        var y = this.chart.height / 2;
        // change origin
        ctx.translate(x, y)
        // rotate text
        ctx.rotate(-90 * Math.PI / 180);
        ctx.fillText(this.datasets[0].label, 0, 0);
        ctx.restore();
    }
});

var data = {
          labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio"],
    datasets: [
        {
            label: "x1000",
            fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "#FF6600",
              pointColor: "#FF6600",
              pointStrokeColor: "#b24700",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "#FF6600",
            data: [ 9817.47, 7429.71, 9135.65, 9253.68, 2558.08]
        }
    ]
};

var ctx = document.getElementById("lineSP").getContext("2d");
var myLineChart = new Chart(ctx).LineAlt(data, {
    scaleLabel: "          <%= 'R$ ' + value    %>",
});




//data: [ 1995220, 1137111, 2032293, 2337509, 599080]  CE


});

// Grafico de linha unica CE
$(function () {




Chart.types.Line.extend({
    name: "LineAlt",
    draw: function () {
        Chart.types.Line.prototype.draw.apply(this, arguments);
        
        var ctx = this.chart.ctx;
        ctx.save();
        // text alignment and color
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";
        ctx.fillStyle = this.options.scaleFontColor;
        // position
        var x = this.scale.xScalePaddingLeft * 0.2;
        var y = this.chart.height / 2;
        // change origin
        ctx.translate(x, y)
        // rotate text
        ctx.rotate(-90 * Math.PI / 180);
        ctx.fillText(this.datasets[0].label, 0, 0);
        ctx.restore();
    }
});

var data = {
          labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio"],
    datasets: [
        {
            label: "x1000",
            fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "#FF6600",
              pointColor: "#FF6600",
              pointStrokeColor: "#b24700",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "#FF6600",
			  data: [ 1995.22, 1137.11, 2032.29, 2337.50, 599.08]
        }
    ]
};

var ctx = document.getElementById("lineCE").getContext("2d");
var myLineChart = new Chart(ctx).LineAlt(data, {
    scaleLabel: "          <%= 'R$ ' + value    %>",
});

});													//data: [2131385, 1762015, 2145654, 942040, 498669] PE

// Grafico de linha unica PE
$(function () {




Chart.types.Line.extend({
    name: "LineAlt",
    draw: function () {
        Chart.types.Line.prototype.draw.apply(this, arguments);
        
        var ctx = this.chart.ctx;
        ctx.save();
        // text alignment and color
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";
        ctx.fillStyle = this.options.scaleFontColor;
        // position
        var x = this.scale.xScalePaddingLeft * 0.2;
        var y = this.chart.height / 2;
        // change origin
        ctx.translate(x, y)
        // rotate text
        ctx.rotate(-90 * Math.PI / 180);
        ctx.fillText(this.datasets[0].label, 0, 0);
        ctx.restore();
    }
});

var data = {
          labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio"],
    datasets: [
        {
            label: "x1000",
            fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "#FF6600",
              pointColor: "#FF6600",
              pointStrokeColor: "#b24700",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "#FF6600",
			  data: [2131.38, 1762.01, 2145.65, 942.04, 498.66]
        }
    ]
};

var ctx = document.getElementById("linePE").getContext("2d");
var myLineChart = new Chart(ctx).LineAlt(data, {
    scaleLabel: "          <%= 'R$ ' + value    %>",
});

});
///data: [793395, 619428, 667411, 2251086, 788852] MT
// Grafico de linha unica MT
$(function () {




Chart.types.Line.extend({
    name: "LineAlt",
    draw: function () {
        Chart.types.Line.prototype.draw.apply(this, arguments);
        
        var ctx = this.chart.ctx;
        ctx.save();
        // text alignment and color
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";
        ctx.fillStyle = this.options.scaleFontColor;
        // position
        var x = this.scale.xScalePaddingLeft * 0.2;
        var y = this.chart.height / 2;
        // change origin
        ctx.translate(x, y)
        // rotate text
        ctx.rotate(-90 * Math.PI / 180);
        ctx.fillText(this.datasets[0].label, 0, 0);
        ctx.restore();
    }
});

var data = {
          labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio"],
    datasets: [
        {
            label: "x1000",
            fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "#FF6600",
              pointColor: "#FF6600",
              pointStrokeColor: "#b24700",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "#FF6600",
			  data: [793.39, 619.42, 667.41, 2251.08, 788.85]
        }
    ]
};

var ctx = document.getElementById("lineMT").getContext("2d");
var myLineChart = new Chart(ctx).LineAlt(data, {
    scaleLabel: "          <%= 'R$ ' + value    %>",
});

});       //data: [831090, 1704921, 897712, 861986, 163019] BA

// Grafico de linha unica BA
$(function () {




Chart.types.Line.extend({
    name: "LineAlt",
    draw: function () {
        Chart.types.Line.prototype.draw.apply(this, arguments);
        
        var ctx = this.chart.ctx;
        ctx.save();
        // text alignment and color
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";
        ctx.fillStyle = this.options.scaleFontColor;
        // position
        var x = this.scale.xScalePaddingLeft * 0.2;
        var y = this.chart.height / 2;
        // change origin
        ctx.translate(x, y)
        // rotate text
        ctx.rotate(-90 * Math.PI / 180);
        ctx.fillText(this.datasets[0].label, 0, 0);
        ctx.restore();
    }
});

var data = {
          labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio"],
    datasets: [
        {
            label: "x1000",
            fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "#FF6600",
              pointColor: "#FF6600",
              pointStrokeColor: "#b24700",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "#FF6600",
			  data: [831.09, 1704.92, 897.71, 861.98, 163.01]
        }
    ]
};

var ctx = document.getElementById("lineBA").getContext("2d");
var myLineChart = new Chart(ctx).LineAlt(data, {
    scaleLabel: "          <%= 'R$ ' + value    %>",
});

});


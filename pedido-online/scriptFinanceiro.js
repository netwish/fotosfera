$(function () {
    
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas);
    
    
        var lineChartData = {
          labels: ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho"],
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
          //Boolean - If we should show the scale at all
		  	  scaleLabel : "<%= value + '%' %>",

        };


    
        var lineChartOptions = lineOptions;
        lineChartOptions.datasetFill = false;
        lineChart.Line(lineChartData, lineChartOptions);

});



$(function () {    
  var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
  var randomColorFactor = function(){ return Math.round(Math.random()*255)};

  var barChartData = {
    labels : ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho"],
    datasets : [
      {
        fillColor : "rgba(220,220,220,0.5)",
        strokeColor : "rgba(220,220,220,0.8)",
        highlightFill: "rgba(220,220,220,0.75)",
        highlightStroke: "rgba(220,220,220,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      },
      {
        fillColor : "rgba(151,187,205,0.5)",
        strokeColor : "rgba(151,187,205,0.8)",
        highlightFill : "rgba(151,187,205,0.75)",
        highlightStroke : "rgba(151,187,205,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      }
    ]
  };
  window.onload = function(){
    var ctx = document.getElementById("barChart").getContext("2d");
    window.myBar = new Chart(ctx).StackedBar(barChartData, {
      responsive : true,
	  scaleLabel : "<%= 'R$ ' + value    %>",
    });

    $('#randomizeData').click(function(){
      barChartData.datasets[0].fillColor = 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',.7)';
      barChartData.datasets[0].data = [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()];

      barChartData.datasets[1].fillColor = 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',.7)';
      barChartData.datasets[1].data = [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()];

      window.myBar.update();
    });
  };
});
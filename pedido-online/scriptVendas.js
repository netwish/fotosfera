
//BAR CHART BARRA HORIZONTAL
$(function () {
    var randomScalingFactor = function(){
	      return Math.round(Math.random()*100);
	    };

	  	var barChartData = {
	  		labels: ["João", "Maria", "Paulo", "Vinicyus", "Jonas", "Jemerson", "Jonilson", "Oberson", "Edinilson", "Abel"],
	  		datasets : [
	  			{
	  				fillColor : "#ff6600",
	  				strokeColor : "#c1c7d1",
	  				highlightFill: "#ff8533",
	  				highlightStroke: "rgba(220,220,220,1)",
	  				data : [10,80,50,80,10,80,60,80,22,75]
	  			}
	  		]

	  	};

	  	window.onload = function(){
	  		var ctx = document.getElementById("canvas").getContext("2d");
			
	      var chart = new Chart(ctx).HorizontalBar(barChartData, {
	  			responsive: true,
	        barShowStroke: false,
			    scaleLabel : "<%= 'R$ ' + value  %>"
	  		});
	  	};
});

//Media de KG por pedido (mês)
$(function () {
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
        var barChartOptions = {
          responsive: true,
          maintainAspectRatio: true,
          scaleLabel : "<%= value + ' Kg' %>",
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
});

//BAR CHART BARRA DUPLA
$(function () {
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

    
        var barChartCanvas = $("#barChart3").get(0).getContext("2d");
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
});

//LINE CHART LINHA UNICA
$(function () {
    
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas);
    
    
        var lineChartData = {
          labels: ["Dia 1", "Dia 2", "Dia 3", "Dia 4", "Dia 5", "Dia 6", "Dia 7", "Dia 8", "Dia 9", "Dia 10","Dia 11", "Dia 12", "Dia 13", "Dia 14", "Dia 15", "Dia 16", "Dia 17", "Dia 18", "Dia 19", "Dia 20","Dia 21", "Dia 22", "Dia 23", "Dia 24", "Dia 25", "Dia 26", "Dia 27", "Dia 28", "Dia 29", "Dia 30",],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "#ff6600",
              pointColor: "#660000",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: [65, 59, 80, 81, 56, 55, 40,78,50,12,65, 59, 80, 81, 56, 55, 40,78,50,12,65, 59, 80, 81, 56, 55, 40,78,50,12]
            }
          ]
        };
    
    var lineOptions = {
		scaleLabel : "<%= 'R$ ' + value    %>",
          //Boolean - If we should show the scale at all
        };

        var lineChartOptions = lineOptions;
        lineChartOptions.datasetFill = false;
        lineChart.Line(lineChartData, lineChartOptions);

});

//LINE CHART LINHA UNICA
$(function () {
    
        var lineChartCanvas = $("#lineChart2").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas);
    
    
        var lineChartData = {
          labels: ["Salgadinho", "Café Vácuo", "Café", "Biscoito", "Doce", "Rótulo", "Diversos"],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "#ff6600",
              pointColor: "#660000",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: [65, 59, 80, 81, 56, 55, 40]
            }
          ]
        };
    
    var lineOptions = {
		scaleLabel : "<%= 'R$ ' + value    %>",
          //Boolean - If we should show the scale at all
        };

        var lineChartOptions = lineOptions;
        lineChartOptions.datasetFill = false;
        lineChart.Line(lineChartData, lineChartOptions);

});

//LINE CHART LINHA DUPLA
$(function () {
    
        var lineChartCanvas = $("#lineChart3").get(0).getContext("2d");
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
              //label: "Digital Goods",
              //fillColor: "rgba(60,141,188,0.9)",
              //strokeColor: "rgba(60,141,188,0.8)",   //desativado a segunda linha 
              //pointColor: "#3b8bba",
              //pointStrokeColor: "rgba(60,141,188,1)",
              //pointHighlightFill: "#fff",
             //pointHighlightStroke: "rgba(60,141,188,1)",
              //data: [28, 48, 40, 19, 86, 27, 90]
            }
          ]
        };
    
    var lineOptions = {
          //Boolean - If we should show the scale at all
		  scaleLabel : "<%= value + ' % ' %>",
        };

        var lineChartOptions = lineOptions;
        lineChartOptions.datasetFill = false;
        lineChart.Line(lineChartData, lineChartOptions);

});
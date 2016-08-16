  
$(function () {

        //-------------
        //-BARRA UNICA-
        //-------------
    
        var dataBAR = {
          labels: ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho"],
          datasets: [
            {
              label: "Electronics",
              data: [10, 2, 5, 50, 10, 5, 8]
            }
          ]
        };

    
        var barChartCanvas = $("#barraUnica").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = dataBAR;
        barChartData.datasets[0].fillColor = "#ff6600";
        barChartData.datasets[0].strokeColor = "#CE5300";

        barChartData.datasets[0].pointColor = "#c1c7d1";
        var barChartOptions = {
          responsive: true,
          maintainAspectRatio: true,
          scaleLabel : "<%=  value + ' Kg'  %>",
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
});

$(function () {

        //-------------
        //-BARRA UNICA 2-
        //-------------
    
        var dataBAR = {
          labels: ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho"],
          datasets: [
            {
              label: "Electronics",
              data: [10, 2, 5, 50, 10, 5, 8]
            }
          ]
        };

    
        var barChartCanvas = $("#barraUnica2").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = dataBAR;
        barChartData.datasets[0].fillColor = "#ff6600";
        barChartData.datasets[0].strokeColor = "#CE5300";

        barChartData.datasets[0].pointColor = "#c1c7d1";
        var barChartOptions = {
          responsive: true,
          maintainAspectRatio: true,
          scaleLabel : "<%= 'R$ ' + value %>",
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
});

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
            }
          ]
        };
    
    var lineOptions = {
          //Boolean - If we should show the scale at all
		  scaleLabel : "<%= 'R$ ' + value %>",
        };

        var lineChartOptions = lineOptions;
        lineChartOptions.datasetFill = false;
        lineChart.Line(lineChartData, lineChartOptions);

});
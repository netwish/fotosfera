$(function () {
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
  
// Grafico de linha
$(function () {
    
    var data = {
    labels: ["JAN", "FEV", "MAR", "ABR", "MAI", "JUN", "JUL", "AGO", "SET", "OUT", "NOV", "DEZ"],
    datasets: [{
        data: [12, 3, 2, 1, 8, 8, 2, 2, 3, 5, 7, 1]
    }]
};

var ctx = document.getElementById("indicadorChart").getContext("2d");

Chart.types.Line.extend({
    name: "LineWithLine",
    initialize: function () {
        Chart.types.Line.prototype.initialize.apply(this, arguments);
    },
    draw: function () {
        Chart.types.Line.prototype.draw.apply(this, arguments);
        
        var point = this.datasets[0].points[this.options.lineAtIndex]
        var scale = this.scale
        console.log(this);

        // draw line
        this.chart.ctx.beginPath();
        this.chart.ctx.moveTo(scale.startPoint+12, point.y);
        this.chart.ctx.strokeStyle = '#ff0000';
        this.chart.ctx.lineTo(this.chart.width, point.y);
        this.chart.ctx.stroke();
        
        // write TODAY
        this.chart.ctx.textAlign = 'center';
        this.chart.ctx.fillText("Meta", scale.startPoint + 35, point.y+10);
    }
});

new Chart(ctx).LineWithLine(data, {
    datasetFill : false,
    lineAtIndex: 10,
	scaleLabel : "<%=   value + '%'   %>"

});

});
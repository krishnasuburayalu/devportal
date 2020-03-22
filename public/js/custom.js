$( document ).ready(function() {

	$( "div.chart-line-p1" ).each(function() {
		var id = $( this ).data("id" );
    var labels = $( this ).data("labels" );
		var series = $( this ).data("series" );
			var chart = creatLineChart(id,labels,series);
  });

	$( "div.chart-pie-p1" ).each(function() {
		var id = $( this ).data("id" );
    var labels = $( this ).data("labels" );
		var series = $( this ).data("series" );
			var chart = creatPieChart(id,labels,series);
  });

});

var creatLineChart = function(id, labels, series){
	if(id== undefined || series == undefined){
		return false;
	}
   var dynamicColors = function() {
					 var r = Math.floor(Math.random() * 255);
					 var g = Math.floor(Math.random() * 255);
					 var b = Math.floor(Math.random() * 255);
					 return "rgb(" + r + "," + g + "," + b + ")";
				};
	  var color =['#003f5c', '#f95d6a','#2f4b7c','#ff7c43', '#665191',  '#ffa600','#a05195', '#d45087'];

		for (var i in series) {
		//	var color = dynamicColors();
       series[i]['borderColor'] = color[i];
			 series[i]['backgroundColor'] = color[i];
			 series[i]['fill'] = false;
			 series[i]['type'] = 'line';
    }

		var ctx = $('#' + id);
		var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: series
			},

    	options: {
				responsive: true,
				elements: {
         line: {
             tension: 0
         }
      },
				tooltips: {
					mode: 'index',
				},
				hover: {
					mode: 'index'
				},
        scales: {
            yAxes: [{
							 stacked: false,
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

}
var creatPieChart = function(id, labels, series){
	if(id== undefined || series == undefined){
		return false;
	}
   var dynamicColors = function() {
					 var r = Math.floor(Math.random() * 255);
					 var g = Math.floor(Math.random() * 255);
					 var b = Math.floor(Math.random() * 255);
					 return "rgb(" + r + "," + g + "," + b + ")";
				};
/*				var bgcolor =[];
				for (var i in series) {
					var color = dynamicColors();
		       bgcolor[i] = color;
		    }
				*/
		var bgcolor =['#003f5c', '#f95d6a','#2f4b7c','#ff7c43', '#665191',  '#ffa600','#a05195', '#d45087'];
		var ctx = $('#' + id);
		var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
        	data: series,
					backgroundColor: bgcolor
		    }]
			},

    	options: {
				responsive: true,
				elements: {
         line: {
             tension: 0
         }
      },
				tooltips: {
					mode: 'index',
				},
				hover: {
					mode: 'index'
				}

    }
});

};

$( document ).ready(function() {

	$( "div.chart-line-p1" ).each(function() {
		var id = $( this ).data("id" );
    var labels = $( this ).data("labels" );
		var series = $( this ).data("series" );
		var chart = creatLineChart(id,labels,series);
  });

});

var creatLineChart = function(id, labels, series){
	if(id== undefined || series == undefined){
		return false;
	}
		/* Add a basic data series with six labels and values */
		var data = {
			labels: labels,
			series: series
		};
		/* Set some base options (settings will override the default settings in Chartist.js *see default settings*). We are adding a basic label interpolation function for the xAxis labels. */
		var options = {
	     showArea: true,
	     height: '400px',
			axisX: {
				labelInterpolationFnc: function(value) {
					return  value;
				}
			}
		};

		/* Now we can specify multiple responsive settings that will override the base settings based on order and if the media queries match. In this example we are changing the visibility of dots and lines as well as use different label interpolations for space reasons. */
		var responsiveOptions = [
			['screen and (min-width: 641px) and (max-width: 1024px)', {
				showPoint: false,
				axisX: {
					labelInterpolationFnc: function(value) {
						return 'Week ' + value;
					}
				}
			}],
			['screen and (max-width: 640px)', {
				showLine: false,
				axisX: {
					labelInterpolationFnc: function(value) {
						return 'W' + value;
					}
				}
			}]
		];

		/* Initialize the chart with the above settings */
		var chart = new Chartist.Line('#' + id, data, options, responsiveOptions);
};

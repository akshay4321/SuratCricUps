$(function() {
    $.ajax({

        url: 'http://localhost/SuratCricUps/admin_template/chart_data1.php',
        type: 'GET',
        success: function(data) {
            chartData = data;
            var chartProperties = {
                "caption": "Top bowler takes wickets in match",
                "xAxisName": "Bowler",
                "yAxisName": "Economy Rate",
                "rotatevalues": "1",
                "theme": "zune"
            };

            apiChart = new FusionCharts({
                type: 'column2d',
                renderAt: 'chart-container1',
                width: '550',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChart.render();
        }
    });
});
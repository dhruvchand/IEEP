<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="https://sites.google.com/site/tushardobhal/data-viz/style.css?attredirects=0&d=1">
        <script src="../js/amcharts.js" type="text/javascript"></script>         
       <link type="text/css" rel="stylesheet" href="../css/common.css"  /><link type="text/css" rel="stylesheet" href="../css/buttons.css"  />
        <script type="text/javascript">
            var chart;

             window.onload = function() {
            createChart();            
                                               
        }

            function createChart()
			{
				var chartData = [{
                state: "Andhra Pradesh",
                forest_cover: 23.2,
				Average: "below average"
            }, {
				
                state: "Arunachal Pradesh",
                forest_cover: 61.55,
				Average: "above average"
            },
			{
				
                state: "Assam",
                forest_cover: 34.45,
				Average: "above average"
            },
			{
				
                state: "Bihar",
                forest_cover: 6.87,
				Average: "below average"
            },
			{
				
                state: "Chhattisgarh",
                forest_cover: 44.21,
				Average: "above average"
            },
			{
				
                state: "Delhi",
                forest_cover: 5.73,
				Average: "below average"
            },
			{
				
                state: "Goa",
                forest_cover: 33.05,
				Average: "above average"
            },
			{
				
                state: "Gujarat",
                forest_cover: 9.75,
				Average: "below average"
            },
			{
				
                state: "Haryana",
                forest_cover: 3.52,
				Average: "below average"
            },
			{
				
                state: "Himachal Pradesh",
                forest_cover: 66.52,
				Average: "above average"
            },
			{
				
                state: "Jammu & Kashmir",
                forest_cover: 9.1,
				Average: "below average"
            },
			{
				
                state: "Jharkhand ",
                forest_cover: 29.51,
				Average: "above average"
            },
			{
				
                state: "Karnataka",
                forest_cover: 22.46,
				Average: "below average"
            },
			{
				
                state: "Kerala",
                forest_cover: 28.99,
				Average: "above average"
            },
			{
				
                state: "Madhya Pradesh ",
                forest_cover: 30.89,
				Average: "above average"
            },
			{
				
                state: "Maharashtra",
                forest_cover: 20.13,
				Average: "below average"
            },
			{
				
                state: "Manipur",
                forest_cover: 78.01,
				Average: "above average"
            },
			{
				
                state: "Meghalaya",
                forest_cover: 42.34 ,
				Average: "above average"
            },
			{
				
                state: "Mizoram",
                forest_cover: 79.3,
				Average: "above average"
            },
			{
				
                state: "Nagaland",
                forest_cover: 52.05,
				Average: "above average"
            },
			{
				
                state: "Orissa",
                forest_cover: 37.34,
				Average: "above average"
            },
			{
				
                state: "Punjab",
                forest_cover: 6.12,
				Average: "below average"
            },
			{
				
                state: "Rajasthan ",
                forest_cover: 9.49,
				Average: "below average"
            },
			{
				
                state: "Sikkim",
                forest_cover: 82.31,
				Average: "above average"
            },
			{
				
                state: "Tamil Nadu",
                forest_cover: 17.59,
				Average: "below average"
            },
			{
				
                state: "Tripura",
                forest_cover: 60.01,
				Average: "above average"
            },
			{
				
                state: "Uttar Pradesh ",
                forest_cover: 6.98,
				Average: "below average"
            },
			{
				
                state: "Uttarakhand ",
                forest_cover: 54.81,
				Average: "above average"
            },
			{
				
                state: "West Bengal",
                forest_cover: 13.38,
				Average: "below average"
            }];

                // PIE CHART
                chart = new AmCharts.AmPieChart();

                // title of the chart
                chart.addTitle("% Forest Area to its Geographoc area (Average - 33.43%)", 16);

                chart.dataProvider = chartData;
                chart.titleField = "state";
                chart.valueField = "forest_cover";
				chart.descriptionField = "Average";
                chart.sequencedAnimation = true;
                chart.startEffect = "elastic";
                chart.innerRadius = "30%";
                chart.startDuration = 2;
                chart.labelRadius = 15;
				radius = 200;
				

                // the following two lines makes the chart 3D
                chart.depth3D = 20;
                chart.angle = 30;
				
				chart.balloonText = "[[title]]: [[value]]% ([[description]])";

                 var legend = new AmCharts.AmLegend();
                //legend.position = "right";
				legend.align = "center";
                legend.borderAlpha = 0.3;
                legend.horizontalGap = 10;
                legend.switchType = "v";
                chart.addLegend(legend);

                // WRITE                                 
                chart.write("chartdiv");
            }
        </script>
    </head>
    
    <body>
        <div id="chartdiv" style="width:800px; height:800px;"></div><br>
<br>
 
       <div style="text-align:center;"> <input  class="button primary" value="Next!" onClick="window.location='course-101-7.php'"/> </div>
       
        

    </body>

</html>

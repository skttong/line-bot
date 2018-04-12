<html>
<head>
<title>My First map using FusionCharts Suite XT</title>
<meta http-equiv="refresh" content="30">
<script type="text/javascript" src="http://164.115.32.133/wwt/testchart/js/fusioncharts.js"></script>
<script type="text/javascript" src="http://164.115.32.133/wwt/testchart/js/themes/fusioncharts.theme.fint.js"></script>
<script type="text/javascript">
FusionCharts.ready(function() {
    var fusioncharts = new FusionCharts({
        type: 'maps/thailand',
        renderAt: 'chartContainer',
        width: '100%',
        height: '100%',
        dataFormat: 'Xmlurl',
        dataSource: 'http://164.115.32.133/wwt/testchart/thailandmap4.php'
    });
    fusioncharts.render();
});	  
	  
</script>
</head>
<body>
    <div id="chartContainer">FusionMaps XT will load s map here!</div>
    <iframe src="http://164.115.32.133/testwebscrapin/test6.php" style="visibility: hidden;"></iframe>
</body>
</html>
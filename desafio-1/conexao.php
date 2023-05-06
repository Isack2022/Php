<?php
	$servidor="localhost";
	$banco="bdIdentCurso";
	$usuario="root";
	$senha="";
    
	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>
 <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Administração',11],
          ['Contabilidade', 2],
          ['Desenvolvimento',2],
          ['Eventos',2],
          ['Finanças',7],
		  ['Gastronomia',7],
		  ['Guia de Turismo',7],
		  ['Marketing',7],
		  ['Nutrição',7],
		  ['Serviços Público',7],
		  ['Nenhum',7],
		  
        ]);

        var options = {
          title: 'Cantagem de Votos',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html> 
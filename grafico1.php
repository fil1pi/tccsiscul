<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


<br>
 
       
   
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart1);

      function drawChart1() {
        var data = google.visualization.arrayToDataTable([
          ['Meses', 'Vendas', 'Despesas'],
          ['Jan',  1000,      400],
          ['Fev',  1170,      460],
          ['Mar',  660,       1120],
          ['Abr',  100,      540],
          ['Mai',  200,      540],
          ['Jun',  300,      540],
          ['Jul',  700,      540]
        ]);

        var options = {
          title: 'Sicul',
          hAxis: {title: '2020',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.Bar(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 50%; height: 500px; padding-left: 1.5%;"></div>
   
  </body>
  </html>
 


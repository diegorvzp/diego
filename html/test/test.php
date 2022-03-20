<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Opening Move', 'Percentage',{ role: 'style' }],
          ['tes1', 44,"red"],
          ["Queen's pawn (d4)", 31],
          
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },
          bars: 'vertical', // Required for Material Bar Charts.
          colors: ['#1b9e77', '#d95f02'],
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
    
  </head>
  <body>
    <h1>agregado desde la web</h1>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>

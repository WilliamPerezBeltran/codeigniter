<a href="<?php echo site_url('graficasControlador/cambmiarGrafica/'.$continent='North America'); ?>"><button type="button">North America</button></a>
<a href="<?php echo site_url('graficasControlador/cambmiarGrafica/'.$continent='Asia'); ?>"><button type="button">Asia</button></a>
<a href="<?php echo site_url('graficasControlador/cambmiarGrafica/'.$continent='Africa'); ?>"><button type="button">Africa</button></a>
<a href="<?php echo site_url('graficasControlador/cambmiarGrafica/'.$continent='Europe'); ?>"><button type="button">Europe</button></a>
<a href="<?php echo site_url('graficasControlador/cambmiarGrafica/'.$continent='Oceania'); ?>"><button type="button">Oceania</button></a>
<a href="<?php echo site_url('graficasControlador/cambmiarGrafica/'.$continent='Antarctica'); ?>"><button type="button">Antarctica</button></a>
<a href="<?php echo site_url('graficasControlador/cambmiarGrafica/'.$continent='South America'); ?>"><button type="button">South America</button></a>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php foreach ($infoall as $paises){?>
          ['<?php echo $paises['Name']; ?>',   <?php echo $paises['Population'];?>],
          <?php }?>
         
        ]);

        var options = {
          
           title: '<?php echo $titulo;?>'
          

         
         
         };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>


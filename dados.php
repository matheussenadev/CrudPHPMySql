<?php

session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "crud_db";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$produtos = []; 

$resultNiveisAva = "SELECT * FROM produtos";
$resultadosNiveisAva = mysqli_query($conn, $resultNiveisAva);


while ($rowNiveisAva = mysqli_fetch_assoc($resultadosNiveisAva)) {
    $nomeProduto = $rowNiveisAva['nome'];
    
    if (isset($produtos[$nomeProduto])) {
        $produtos[$nomeProduto]++;
    } else {
        $produtos[$nomeProduto] = 1;
    }
}
?>

<html>
 
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Produto', 'Quantidade'],
          <?php

          foreach ($produtos as $nome => $quantidade) {
              echo "['$nome', $quantidade],";
          }
          ?>
        ]);

        var options = {
          title: 'Produtos e suas Quantidades'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="piechart" style="width: 900px; height: 500px;" ></div>
</body>
</html>

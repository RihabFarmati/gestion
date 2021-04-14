<?php
  $con = mysqli_connect("localhost","RIHAB","","school1");
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['filiere', 'classe'],
         <?php
         $sql = "SELECT filiere,count(classe)as n FROM classe group by filiere";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['filiere']."',".$result['n']."],";
          }

         ?>
        ]);

           var options = {
        title: "Gestion Des Classes et Filieres",
        color : 'black',
        width: 750,
        height: 600,
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
      };
        // var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
      <div class="container-fluid" style="margin-top: 5%;">
     <div class="card-header">
        <p class="h2 text-center text-uppercase ">Gestion Des Classes Et Filieres à l'ENSAJ</p>
     </div>
        <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        
                        <a href="page Principale.php?p=Filiere" class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 >
                                    <?php 
                                $bdd = new PDO('mysql:host=localhost;dbname=school1;charset=utf8', 'RIHAB', '');
                                $reponse = $bdd->query("SELECT count(*) as n FROM Filiere ");
                                 while ($donnees = $reponse->fetch()){
                                            echo $donnees['n'];}
                                ?>
                                </h2>
                                <span class="desc">Filiere</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-group-work"></i>
                                </div>
                            </div>
                        </a>
                        <a href="page Principale.php?p=classe" class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2>                                  <?php 
                                //$bdd = new PDO('mysql:host=localhost;dbname=school1;charset=utf8', 'RIHAB', '');
                                $reponse = $bdd->query("SELECT count(*) as n FROM classe ");
                                 while ($donnees = $reponse->fetch()){
echo $donnees['n'];} ?></h2>
                                <span class="desc">classe</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-check"></i>
                                </div>
                            </div>
                        </a>
                             <a href="page Principale.php?p=Find" class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 >****</h2>
                                <span class="desc">FIND</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-check"></i>
                                </div>
                            </div>
                        </a>
                       
                    </div>
                </div>
            </section>
    </div>


    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

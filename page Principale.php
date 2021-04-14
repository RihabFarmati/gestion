<?php
if(session_status() != PHP_SESSION_ACTIVE) {
session_start();
}
if ($_SESSION["email"]) {
    ?>
<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <title>Gestion Des Filieres Et Classes A l'ensaj</title>
    <script src='vendor/jquery-3.2.1.min.js'></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>



    <link rel='stylesheet' href='vendor/bootstrap-4.1/bootstrap.min.css'>
    <link rel='stylesheet' href='vendor/font-awesome-5/css/fontawesome-all.min.css'>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/theme.css">
    <link rel="stylesheet" href="style/main.css">

    <script src='vendor/bootstrap-4.1/popper.min.js'></script>
    <script src='vendor/bootstrap-4.1/bootstrap.min.js'></script>
</head>
<body>



    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="./" class="h2 pt-2">ENSAJ</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                   
              
                </div>
                <!-- sidebar-header  -->

                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Gestion des classes et Filieres A l'ENSAJ</span>
                        </li>
                        <li>
                            <a href="page Principale.php?p=logo" ><i class="zmdi zmdi-hc-1x zmdi-accounts"></i>Accueil</a>
                        </li>
                        <li>
                            <a href="page Principale.php?p=Filiere" ><i class="zmdi zmdi-hc-1x zmdi-accounts"></i>Les Filieres</a>
                        </li>
                        <li>
                            <a href="page Principale.php?p=classe"><i class="zmdi zmdi-hc-1x zmdi-settings"></i>Les Classes</a>
                        </li>
                        <li>
                            <a href="page Principale.php?p=Find" ><i class="zmdi zmdi-hc-1x zmdi-accounts"></i>Gestion Des Classes et Des Filiere</a>
                        </li>
                      
                       
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
          
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid" id="main-content">

                <?php
                    if( isset($_GET['p']) && $_GET['p'] != ""){
                      if ($_GET['p']=="Filiere"){
                            include_once './page/indexfiliere.php';
                        }elseif($_GET['p']=="classe"){
                            include_once './page/indexClasse.php';
                        
                           }
                           elseif($_GET['p']=="Find"){
                            include_once './page/Find.php';
                        
                           }
                           
                           elseif($_GET['p']=="logo"){
                            include_once './page/index.php';
                        
                    }   }else{
                            include_once './page/index.php';
                    
                    }
                ?>
            </div>

        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

</body>
</html>
<?php
} else {
    header('Location:login.php');
}
?>
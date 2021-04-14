<!DOCTYPE html>
<?php
include_once 'racine.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET" action="addEtudiant.php">
            <fieldset>
                <div class="container-fluid">
    <div class="card bg-white" >
        <div class="card-header card-color">
            <p class="h2 text-center text-uppercase font-weight-bold pt-2">Ajouter un nouveau étudiant</p>
        </div>
        <div class="card-body container-fluid" >
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label>CIN : </label>
                       <input type="text"  class="form-control" id="cin" name="cin" value="" />
                </div>
                   <div class="col-sm-6 mb-2">
                        <label>Nom : </label>
                        <input class="form-control" type="text" id="nom" name="nom" value="" />
                    </div>
                    </div>
              <div class="row">
                <div class="col-sm-6 mb-2">
                        <td>Prenom :</td>
                        <td><input class="form-control" type="text" name="prenom" id="prenom" value="" /></td>
                </div>
                   <div class="col-sm-6 mb-2">
                       <label>Email : </label>
                        <input class="form-control" type="Email" name="email" id="email" value="" /></div>
                   </div>
            
                    
                      <div class="row">
                <div class="col-sm-6 mb-2">  
                        <label>Telephone : </label>
                       <input class="form-control" type="" name="telephone" value="" />
                </div>
 <div class="col-sm-6 mb-2">  
     <label>Mot De Passe : </label>
     <input class="form-control" type="password" name="psw" value="" />
 </div></div>
                               
                    <label>Filiere : </label>
                        <input type="text" class="form-control" name="filiere" value="" />
                        
                          <label>Classe : </label>
                              <input type="text" class="form-control" name="classe" value="" />
                    
                            <input type="submit" class="btn btn-outline-success mt-3 mb-3" value="Valider" id="valider" />
                            <input class="btn btn-outline-success mt-3 mb-3" type="reset" value="Effacer" />
                        


            </fieldset>
        <div class="row table-responsive m-auto rounded">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-uppercase bg-light">
                    <th scope="col">ID</th>
                    <th scope="col">CIN</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Psw</th> 
                    <th scope="col">Telephone</th> 
                    <th scope="col">Filiere</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Supprimer</th>
                    <th scope="col">Modifier</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once RACINE . '/EtudiantService.php';
                $es = new EtudiantService();
                foreach ($es->findAll() as $e) {
                    ?>
                    <tr>
                        <td><?php echo $e->getId(); ?></td>
                        <td><?php echo $e->getCin(); ?></td>
                        <td><?php echo $e->getNom(); ?></td>
                        <td><?php echo $e->getPrenom(); ?></td>
                        <td><?php echo $e->getEmail(); ?></td>
                        <td><?php echo $e->getPsw(); ?></td>
                        <td><?php echo $e->getTelephone(); ?></td>
                      
                        <td><?php echo $e->getFiliere(); ?></td>
                        <td><?php echo $e->getClasse(); ?></td>
                        <td>      
                            <a href="deleteEtudiant.php?id=
<?php echo $e->getId(); ?>">Supprimer</a> </td>
                        <td><a href="updateEtudiant.php?id=
<?php echo $e->getId(); ?>">Modifier</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </body>
</html> 


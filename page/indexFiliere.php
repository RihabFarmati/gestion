       <head>
        <script src="jquery-3.5.1.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js" type="text/javascript"></script>
   
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js" type="text/javascript"></script>
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" type="text/css"/>
 <!--      
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>     -->
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
  
        </head>
<div class="container-fluid">
    <div class="card bg-white" >
        <div class="card-header">
            <p class="h2 text-center text-uppercase font-weight-bold pt-2">Gestion des Filieres</p>
        </div>
        <div class="card-body container-fluid" >
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="code">Code Filiere : </label>
                    <input class="" type="text" id="id" hidden>
                    <input class="form-control" type="text" id="code" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Libelle : </label>
                    <input class="form-control" type="text" id="libelle" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-success mt-3 mb-3" id="btn">Ajouter</button>
                </div>
            </div>
            <div class="row table-responsive m-auto rounded">
                <table id="table" class="table table-hover" >
                    <thead>
                        <tr class="text-uppercase bg-light">
                            <th scope="col">Id</th>
                            <th scope="col">Code</th>
                            <th scope="col">Libelle</th>
                            <th scope="col">Supprimer</th>
                            <th scope="col">Modifier</th>
                        </tr>
                    </thead>
                    <tbody id="table-content">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="script/filiere.js" type="text/javascript"></script>

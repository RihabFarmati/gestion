<div class="container-fluid">
    <div class="card bg-white" >
        <div class="card-header">
            <p class="h2 text-center text-uppercase font-weight-bold pt-2">Gestion des Classes et des filieres</p>
        </div>
        <div class="card-body container-fluid" >
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for='id_fil'>Choisissez la filiere : </label>
                    
                   <select id='filiere' name='filiere' class="custom-select" >
           
</select> 
                </div>
            </div>
       
            <div class="row table-responsive m-auto rounded">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-uppercase bg-light">
                            <th scope="col">Id</th>
                            <th scope="col">Classe</th>
                            <th scope="col">Filiere</th>
                           
                        </tr>
                    </thead>
                    
                    <tbody id="table-content">
                        <tbody>
                
            </tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="script/find.js" type="text/javascript"></script>
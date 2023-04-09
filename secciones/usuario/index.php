<?php include("../../templates/header.php"); ?>

<!-- bs5-card-head-foot utilizamos para la vista -->
<div class="card">
    
    <div class="card-header"> 

        <a name="" id="" class="btn btn-primary" 
        href="crear.php" 
        role="button">Agregar Registro
        </a>
    
    </div>
    
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table">
                    <thead>
                        <tr class="table table">
                            <th scope="col">id</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">2</td>
                            <td>Jair</td>
                            <td>1234</td>
                            <td>jmisoardi@hotmail.com</td>
                            <td>
                                <input name="btneditar" id="btneditar" class="btn btn-info" type="button" value="Editar">
                                <input name="btneliminar" id="btneliminar" class="btn btn-danger" type="button" value="Eliminar">
                            </td>
                        </tr>                        
                    </tbody>                    
                </table>
            </div>
        </div>

    <div class="card-footer text-muted">
    </div> 

</div>
<?php include("../../templates/footer.php"); ?>

<?php include("../../templates/header.php"); ?>

<br>
<h3>Libros</h3>

<div class="card">
    
    <div class="card-header">
<!-- Creamos un boton (bs5-button-a) para derivar a crear.php         -->
        <a name="" id="" class="btn btn-primary" 
            href="crear.php" 
            role="button">Agregar Registro
        </a>
    </div>
    <div class="card-body">
        <br>
        <div class="table-responsive-xxl">
            <table class="table table">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Titulo</th>                                                
                        <th scope="col">Editorial</th>                        
                        <th scope="col">CDU</th>
                        <th scope="col">Nº inventario</th>
                        <th scope="col">Acciones</th>                                                
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">27/10/1986</td>
                        <td>JAIR</td>
                        <td>LA ESPERANZA</td>
                        <td>R1C3</td>
                        <td>R1C3</td>                        
                        <td>1986</td>
                        <td><a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="#" role="button">Borrar</a>
                        </td>
                    
                </tbody>
            </table>
        </div>
        

    <div class="card-footer text-muted">
    </div>
</div>

<?php  include("../../templates/footer.php"); ?>


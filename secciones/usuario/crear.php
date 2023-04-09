<?php include("../../templates/header.php"); ?>



<div class="card">
    <div class="card-header">
        Usuario
    </div>
        <div class="card-body">
            <form action="" method="post"></form>
                <div class="mb-3">
                    <label  for="usuario" class="form-label">Usuario</label>
                    <input  type="text"
                            class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Usuario">
                </div>
                <div class="mb-3">
                    <label  for="password" class="form-label">Contraseña</label>
                    <input  type="text"
                            class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Contraseña">
                </div>
<!-- Button-defautl se utiliza  -->                
                <button type="submit" class="btn btn-success">Agregar</button>
                <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>

        </div>
    
    <div class="card-footer text-muted">
        
    </div>

</div>
<?php include("../../templates/footer.php"); ?>
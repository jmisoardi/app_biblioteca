<?php include("../../templates/header.php"); ?>

<br>
<div class="card">
    <div class="card-header">
        <h3>Agregar datos del Libro</h3>
    </div>
        <div class="card-body">

        <form action="" method="post">

            <div class="mb-3">
                <label  for="Fecha_ingr" class="form-label">Fecha Ingreso</label>
                <input  type="datetime-local"
                        class="form-control" name="Fecha_ingr" id="Fecha_ingr" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mb-3">
                <label  for="autor" class="form-label">Autor</label>
                <input  type="text"
                        class="form-control" name="autor" id="autor" aria-describedby="helpId" placeholder="Autor">
            </div>
            <div class="mb-3">
                <label  for="titulo" class="form-label">Titulo</label>
                <input  type="text"
                        class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo">            
            </div>
            <div class="mb-3">
                <label  for="edicion" class="form-label">Edición</label>
                <input  type="text"
                        class="form-control" name="edicion" id="edicion" aria-describedby="helpId" placeholder="Edición">            
            </div>
            <div class="mb-3">
                <label  for="lugar" class="form-label">Lugar</label>
                <input  type="text"
                        class="form-control" name="lugar" id="lugar" aria-describedby="helpId" placeholder="Lugar">            
            </div>
            <div class="mb-3">
                <label  for="fecha" class="form-label">Fecha</label>
                <input  type="date"
                        class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">               
            </div>
            <div class="mb-3">
                <label  for="editorial" class="form-label">Editorial</label>
                <input  type="text"
                        class="form-control" name="editorial" id="editorial" aria-describedby="helpId" placeholder="Editorial">              
            </div>
            <div class="mb-3">
                <label  for="year" class="form-label">Año</label>
                <input  type="date"
                        class="form-control" name="year" id="year" aria-describedby="helpId" placeholder="">              
            </div>
            <div class="mb-3">
                <label  for="pagina" class="form-label">Paginas</label>
                <input  type="number"
                        class="form-control" name="pagina" id="pagina" aria-describedby="helpId" placeholder="Paginas">              
            </div>
            <div class="mb-3">
                <label  for="serie" class="form-label">Serie</label>
                <input  type="text"
                        class="form-control" name="serie" id="serie" aria-describedby="helpId" placeholder="Serie">              
            </div>
            <div class="mb-3">
                <label  for="volumen" class="form-label">Volumen</label>
                <input  type="number"
                        class="form-control" name="volumen" id="volumen" aria-describedby="helpId" placeholder="Volumen">
            </div>
            <div class="mb-3">
                <label  for="tema" class="form-label">Tema</label>
                <input  type="text"
                        class="form-control" name="tema" id="tema" aria-describedby="helpId" placeholder="Tema">              
            </div>
            <div class="mb-3">
                <label for="idprocedencia" class="form-label">Procedencia</label>
                <select class="form-select form-select-lg" name="idprocedencia" id="idprocedencia">
                    <option selected>Seleccionar</option>
                    <option value="compra">Compra</option>
                    <option value="donacion">Donación</option>
                    <option value="canje">Canje</option>
                </select>
            </div>
            <div class="mb-3">
                <label  for="cdu" class="form-label">CDU</label>
                <input  type="text"
                        class="form-control" name="cdu" id="cdu" aria-describedby="helpId" placeholder="CDU">
            </div>
            <div class="mb-3">
                <label  for="inventario" class="form-label">Nº Inventario</label>
                <input  type="text"
                        class="form-control" name="inventario" id="inventario" aria-describedby="helpId" placeholder="Nº Inventario">             
            </div>
            <div class="mb-3">
                <label  for="cantidad" class="form-label">Cantidad</label>
                <input  type="text"
                        class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="Cantidad">                
            </div>





        </form>

    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>


<?php include("../../templates/footer.php"); ?>
<?php include('header.php')?>
<h2 class="texto_superior_admin">Página del administrador, aquí se cargan los tickets
    a la base de datos.
</h2>

<div class="cajaformulario">
<form action="adminback.php" method="POST" class="formulario">
            
    <h2>Formulario de carga</h2>

    <input type="text"name="genero"placeholder="Genero" class="genero_input" required>
             
    <input type="text"name="banda"placeholder="Banda" class="banda_input" required>

    <input type="submit"value="Guardar"class="boton">
</form>
</div>

<h2 class="texto_superior_admin">Los datos cargados aquí se pueden ver en la página principal <i class="fa-solid fa-house"></i></h2>

<?php include('footer.php');?>
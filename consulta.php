<?php 
include('header.php')
?>
<div class="cajaformulario">
<form action="contacto.php" method="POST" class="formulario">
            
    <h2>CONTACTO</h2>

    <input type="text"name="nombre"placeholder="Nombre" class="contacto_input" required>
             
    <input type="text"name="apellido"placeholder="Apellido" class="contacto_input" required>
             
    <input type="email"name="correo"placeholder="Email" class="contacto_input" required>
             
    <textarea name="mensaje"placeholder="mensaje" class="contacto_input" cols="30"rows="10"required></textarea>
             
    <input type="submit"value="Enviar"class="boton">
</form>
</div>

<?php include('footer.php');?>
</body>
</html>


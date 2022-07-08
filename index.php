<?php include('header.php');?>

<h2> Boletos ARG es una empresa argentina
    dedicada a la venta de entradas para eventos. 
    Fundada en 1979, la compañía es propiedad 
    de TEG Pty Ltd con sede en Rosario, tiene
    operaciones de venta de boletos para eventos 
    deportivos y entretenimiento tanto en 
    Argentina  como en Uruguay.
    
</h2>
<div class="p_pregunta_edad">
<div class="pregunta_edad">
    <div class="h_pregunta_edad">
<form action="index.php" method="get">
    <h2>Ingrese su edad</h2><input type="text" name="edad" class="inputedad"/>
    <input class="boton" type="submit" value="Evaluar" name="botonedad"/>
</form>

<?php $respuesta1= "Apurate que las entradas se están agotando!!!";  ?>

<?php
if (isset($_GET['botonedad'])){
    if($_GET['edad'] < 18 ){
        $respuesta1 = "Usted no cumple con la edad 
        mínima para comprar un boleto";
    }else{
        $respuesta1 = "Pase a la sección de tickets 
        para poder comprar su boleto";
}}
?> 

<div>
    <h2 class="h2_index"> <?php echo $respuesta1; ?> </h2>
</div>
</div>
</div>
</div>

<div class="p_tickets_base_de_datos">
<div class="tickets_base_de_datos">
<h2>Generos y bandas impresos desde la base de datos</h2>
<?php 
$inc = include("conexion.php");
if ($inc){
    $consulta = "SELECT * FROM tickets";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array()){
        $id = $row['id'];
        $genero = $row['genero'];
        $banda = $row['banda'];
        ?>
        <div class="genero_banda">

        <div class="h_genero_banda">Genero: <?php echo $genero?></div>
        <div class="h_genero_banda">Banda: <?php echo $banda ?></div>
        
        </div>
        <?php
        }
    }
} ?>
<h2>Estos datos se cargan desde la página del administrador <i class="fa-solid fa-lock"></i></h2>
</div>
</div>

<?php include('footer.php');?>

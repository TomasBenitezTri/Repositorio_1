<?php include('header.php');?>

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
<?php include('footer.php');?>

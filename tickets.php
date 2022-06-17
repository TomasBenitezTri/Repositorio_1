<?php 
include('header.php')
?>
<section class="caja_tienda">
<div class="tienda_botonera">
    <ul>
        <a href="tickets.php?boleto=rock">Rock</a>
        <a href="tickets.php?boleto=metal">Metal</a>
        <a href="tickets.php?boleto=rap">Rap</a>
    </ul>
</div>

<?php 
if (isset($_GET['boleto'])){
switch($_GET['boleto']){
    case 'rock':
        $boleto = 'Boleto de Rock'; 
        $img = './boletos/rock.jpg';
    break;
    case 'metal':
        $boleto = 'Boleto de Metal'; 
        $img = './boletos/metal.jpg';
    break;
    case 'rap':
        $boleto = 'Boleto de Rap'; 
        $img = './boletos/rap.jpg';
    break;
}} else {
    $boleto = "Bienvenido a La Boletería.
    Elija una por favor";
    $img = "./boletos/boleta.jpg" ;
} 

?>


<div clase="resultado_boletos">
    <h2> <?php echo $boleto; ?> </h2>
    <img src="<?php echo $img; ?>">
</div>


</section>